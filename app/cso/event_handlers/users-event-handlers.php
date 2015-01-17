<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/8/15
 * Time: 12:42 PM
 */

namespace cso\event_handlers;
use \Mail;
class UsersEventHandler {


    public function passwordChanged($user, $newPassword)
    {
        Mail::queue('emails.password_changed',['user' => $user, 'password' => $newPassword], function ($message) use($user) {
            $message->subject('Password changed');
            $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
            $message->to($user->email); // Recipient address
        });
    }

}