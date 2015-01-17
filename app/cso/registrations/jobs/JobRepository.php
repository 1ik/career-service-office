<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\registrations;


use cso\repositories\Repository;
use cso\utils\UserUtil;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use \Organisation;
use \Job;
use \User;
use \Excel;


class JobRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct(RegistrationRepository $registration, RegistrantRepository $registrants) {
        $this->registration = $registration;
        $this->registrants = $registrants;
        parent::__construct(new \Job());
    }

    public function all() {
        return Job::with(
                'registration.registrants.user',
                'organisation',
                'poster',
                'approver',
                'saved_jobs')->orderBy('id','DESC')->get();
    }

    public function getOpenJobs()
    {
        return Job::with('organisation',
                        'saved_jobs',
                        'openRegistration')
                        ->where('approver_id', "!=", '-1')
                        ->has('openRegistration')
                        ->orderBy('id','DESC')->get();
    }

    /**
     * @param $poster_id
     * @return mixed
     *
     * Returns the jobs posted only by poster, published and approved and if the job's Registration is open.
     * If the approver_id is -1 then there is no approver which means, the job hasn't been approved yet.
     */
    public function getPosterJobs($poster_id)
    {
        return Job::with(
                        'organisation',
                        'openRegistration')
                        ->where('approver_id', "!=", '-1')
                        ->wherePosterId($poster_id)
                        ->has('openRegistration')
                        ->orderBy('id','DESC')->get();
    }



    public function store($properties = null) {

        //create a Registration for this job first.
        $registration = $this->registration->store();
        $properties = \Input::except('_token');

        if(isset($properties['hot']) && $properties['hot'] == "on")
            $properties["hot"] = 1; //fix checkbox value to 1 from on

        //get this job a new registration id.
        $properties['registration_id'] = $registration->id;

        $loggedInUser = \Sentry::getUser();
        $properties['poster_id'] = $loggedInUser->id;

        //when an admin is posting. Then he/she is already approving the job.
        if(UserUtil::isAdmin()) {
            $properties['approver_id'] = $loggedInUser->id;
        }

        //if an employer posts.
        //then job's organisation id becomes the poster's organisation id.
        if(UserUtil::isEmployer())
        {
            $employer = \Employer::whereUserId(\Sentry::getUser()->id)->get()->first();
            $properties['organisation_id'] = $employer->organisation_id;
        }

        return parent::store($properties);
    }


    public function update($jobId, $properties = null)
    {
        $properties = \Input::all();

        //hot is a checkbox to show if a job is hot or not :p
        //if checked the value is 1 else 0.
        if(isset($properties['hot']) && $properties['hot'] == "on")
            $properties["hot"] = 1;
        else
            $properties["hot"] = 0;


        $job = parent::update($jobId, $properties);
        $job = \Job::find($jobId);

        //update the job's registration status too.
        $registration = \Registration::find($job->registration_id);
        $registration->ends_on = new \DateTime($properties['ends_on']);
        $registration->update();

        return $job;

    }

    public function find($id)
    {
        return Job::with('registration.registrants.user', 'organisation', 'applicant')->find($id);
    }



    public function applyToJob($jobId, $userId)
    {
        $job = Job::find($jobId);
        $application = $this->registrants->findRegistrant($job->registration_id, $userId);

        if( ! $application ) {
            // the user hasn't applied for the job.
            $application = $this->registrants->store(['registration_id' => $job->registration_id, 'user_id' => $userId]);
        }

        return $application;
    }


    public function approveJob($jobId)
    {
        $job = Job::find($jobId);
        $user = \Sentry::getUser();
        $job->approver_id = $user->id;
        $job->update();
    }

    public function getSavedJobs($userId)
    {
        return User::with('savedJobs.job')->find($userId);
    }

    public function removeSavedJob($uId, $jobId)
    {
        $savedJob = \SavedJob::whereUserId($uId)->whereJobId($jobId)->get()->first();

        if(!$savedJob) {
            App::abort(404);
        }

        return $savedJob->delete();
    }

    public function saveJob($uId, $jobId)
    {
        if(! \SavedJob::whereUserId($uId)->whereJobId($jobId)->get()->first()) {
            \SavedJob::create(['user_id' => $uId, 'job_id' => $jobId]);
        }
    }

    public function closeRegistration($jobId)
    {
        $job = Job::find($jobId);

        if(! $job) {
            App::abort(404);
        }

        $this->registration->close($job->registration_id);
    }

    public function openRegistration($jobId)
    {
        $job = Job::find($jobId);

        if(! $job) {
            App::abort(404);
        }

        $this->registration->open($job->registration_id);
    }

    //exports job registration data in xls files.
    public function exportRegistrants($jobId)
    {
        $job = $this->find($jobId);
        $export_data = [];

        foreach($job->registration->registrants as $registrant)
        {
            $export_data[] = [
                'Name' => $registrant->user->first_name . ' ' . $registrant->user->last_name,
                'Phone Number' => $registrant->user->phone_number,
                'Cell Phone' => $registrant->user->cell_phone,
                'Email' => $registrant->user->email,
                'Gender' => $registrant->user->gender == 'm' ? "Male" : "Female"
            ];
        }

        $file_name = 'JOB_REGISTRANTS_' . $job->title . '_' . $job->organisation->name;

        return Excel::create($file_name , function($excel) use($export_data) {
            $excel->sheet('Registrants', function($sheet) use($export_data) {
                $sheet->fromArray($export_data);
            });
        })->export('xls');
    }

    public static function isJobPoster($user_id, $job_id)
    {
        $job = Job::find($job_id);
        return $user_id == $job->poster_id;
    }
}
