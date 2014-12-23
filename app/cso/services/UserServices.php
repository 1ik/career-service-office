<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/16/14
 * Time: 9:55 PM
 */


use \User;

class UserServices {

    public static function redirect($user_id) {
        $user = User::with('student');
        $profile_type = '';
        if($user->student != null) {
            $profile_type = 'student';
        }

        return Redirect::route('profile/' . $profile_type . '/' . $user_id);
    }
} 