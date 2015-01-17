<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/15/14
 * Time: 2:20 AM
 */

namespace cso\anik;


use cso\repositories\Repository;
use Illuminate\Support\Facades\Input;
use \Registration;
use \Sentry;
use TijsVerkoyen\CssToInlineStyles\Exception;
use \User;

class UserRepository extends Repository {

    public static $rules = [];
    public static $messages = [];

    function __construct()
    {
        parent::__construct(new \User());
    }


    public function update($uId, $properties =null)
    {
        $user = Sentry::findUserById($uId);

        if(\Input::hasFile('profile_picture')) {
            $mime = \Input::file('profile_picture')->getMimeType();
            $size = \Input::file('profile_picture')->getSize();

            if( $mime == "image/jpeg" || $mime == "image/png") {

                if($size <= 512000) { //512 (Kilobyte) or 512000 (Byte)
                    $file_name = "user_" . $user->id . '.' . \Input::file('profile_picture')->getClientOriginalExtension();
                    \Input::file('profile_picture')->move( base_path() . '/public/files/users/pp', $file_name);
                    $user->profile_image = $file_name;
                } else {
                    $this->errors[] = 'The Profile Picture size must have be below 512KB';
                    return false;
                }

            } else {
                $this->errors[] = "You have submitted unsupported file format for your profile picture. Please upload jpg or png type";
                return false;
            }

        }

        if(\Input::hasFile('cv')) {
            $mime = \Input::file('cv')->getMimeType();
            $size = \Input::file('cv')->getSize();

            if( $mime == "application/pdf") {

                if($size <= 3000000) { //375000 (Kilobyte) or 3 (Megabit)
                    $file_name = "user_" . $user->id . '.' . \Input::file('cv')->getClientOriginalExtension();
                    \Input::file('cv')->move( base_path() . '/public/files/users/cv', $file_name);
                    $user->cv = $file_name;
                } else {

                    $this->errors[] = 'Size of cv must have be below 3 Megabit';
                    return false;
                }

            } else {
                $this->errors[] = "You have submitted unsupported file format for your CV. Please submit only in pdf format.";
                return false;
            }

        }

        $user->phone_number = Input::get('phone_number');
        $user->cell_phone = Input::get('cell_phone');
        $user->gender = Input::get('gender');
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');

        //update password only if user has entered one.
        if(Input::get('password') != '') {
            $user->password = Input::get('password');
        }

        $user->update();

        return true;
    }

}