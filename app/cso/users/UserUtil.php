<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 12/27/14
 * Time: 3:40 PM
 */
namespace cso\utils;

use \Sentry;
class UserUtil {

    public static function isStudent($userId = null) {
        return self::checkRole('student', $userId);
    }

    public static function isAlumni($userId = null) {
        return self::checkRole('alumni', $userId);
    }

    public static function isEmployer($userId = null) {
        return self::checkRole('employer', $userId);
    }

    public static function isAdmin($userId = null) {
        return self::checkRole('admin', $userId);
    }

    public static function isLoggedIn()
    {
        return Sentry::getUser() != NULL;
    }

    private static function checkRole($roleName, $userId = null)
    {
        $group = Sentry::findGroupByName($roleName);
        $user = NULL;

        if($userId != null) {
            try {
                $user = Sentry::findUserById($userId);

            } catch(\Exception $e)
            {
                \App::abort(404);
            }

        } else {
            $user = Sentry::getUser();
        }

        return $user != NULL && $user->inGroup($group);
    }

}