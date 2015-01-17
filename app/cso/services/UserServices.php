<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/16/14
 * Time: 9:55 PM
 */


use \User;

class UserServices {

    public static function redirect($user_id)
    {

        $user = Sentry::getUser();
        $adminGroup = Sentry::findGroupByName('admin');
        $studentGroup = Sentry::findGroupByName('student');

        $user = User::with('student');
        $profile_type = '';

        if($user->student != null) {
            $profile_type = 'student';
        }

        return Redirect::route('profile/' . $profile_type . '/' . $user_id);
    }

    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

} 