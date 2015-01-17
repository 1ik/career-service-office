<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\registrations;


use cso\repositories\Repository;
use \Organisation;
use \Excel;

class PsdpRegistrationRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct(RegistrationRepository $registration, RegistrantRepository $registrants) {
        $this->registration = $registration;
        $this->registrants = $registrants;
        parent::__construct(new \PsdpRegistration());
    }


    public function all() {
        return \PsdpRegistration::with('registrants')->orderBy('id', 'desc')->get();
    }


    public function store($properties = null) {
        $registration = $this->registration->store();
        $registration->toJson();
        $properties = \Input::except('_token');
        $properties['registration_id'] = $registration->id;
        return parent::store($properties);
    }

    public function find($id) {
        return \PsdpRegistration::with('registration.registrants.user.student.majorCourse', 'registration.registrants.user.student.minorCourse', 'registration.registrants.user.student.department')->find($id);
    }



    public function enroll($user)
    {
        $openPsdpRegistration = $this->getOpenPsdpRegistration();
        if( ! $this->registrants->findRegistrant($openPsdpRegistration->registration_id, $user->id))
        {
            $this->registrants->store(['registration_id' => $openPsdpRegistration->registration_id, 'user_id' => $user->id]);
            return true;
        }
        return false;
    }





    public function getOpenPsdpRegistration()
    {
        return \PsdPRegistration::has('openRegistration')->orderBy('created_at','desc')->take(1)->get()->first();
    }



    public function exportRegistrants($psdpRegistrationId)
    {
        $psdp_registration = $this->find($psdpRegistrationId);
        $export_data = [];

        foreach($psdp_registration->registrants as $registrant)
        {
            $export_data[] = [
                'Name' => $registrant->user->first_name . ' ' . $registrant->user->last_name,
                'Phone Number' => $registrant->user->phone_number,
                'Cell Phone' => $registrant->user->cell_phone,
                'Email' => $registrant->user->email,
                'Gender' => $registrant->user->gender == 'm' ? "Male" : "Female",
                'Student ID' => $registrant->user->student->student_id,
                'CGPA' => $registrant->user->student->current_cgpa,
                'Credits Completed' => $registrant->user->student->credits_completed,
                'Major' => $registrant->user->student->major_course->name,
                'Minor' => $registrant->user->student->minor_course->name,
                'Semester' => $registrant->user->student->semester == 'sl' ? "Second Last" : "Last",
                'Department' => $registrant->user->student->department->name,
            ];
        }


        $file_name = 'PSDP_REGISTRANTS_' . $psdp_registration->semester . '_' . $psdp_registration->year;

        return Excel::create($file_name , function($excel) use($export_data) {
            $excel->sheet('Registrants', function($sheet) use($export_data) {
                $sheet->fromArray($export_data);
            });
        })->export('xls');
    }




    public function changeStatus($psdp_id, $status)
    {
        $psdp = \PsdpRegistration::find($psdp_id);
        $psdp->status = $status;
        $psdp->update();
        return true;
    }

}