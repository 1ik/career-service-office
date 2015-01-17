<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/4/15
 * Time: 11:32 PM
 */
namespace cso\event_handlers;
use \Mail;
class JobsEventHandler {

    public function notifyJobsPosted($job, $user)
    {
        $job_url = \URL::route('jobs.show', $job->id);

        Mail::queue('emails.jobs.new_job_post',compact('job', 'user', 'job_url'), function ($message) {
            $message->subject('New Job Posted');
            $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
            $message->to('careerservicesbracu@gmail.com'); // Recipient address
        });

    }

}