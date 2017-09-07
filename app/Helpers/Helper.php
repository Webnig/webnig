<?php
/**
 * Created by PhpStorm.
 * User: Pens Naku
 * Date: 06/09/2017
 * Time: 17:19
 */

namespace App\Helpers;


class Helper
{

    public static function getUserAge($dateOfBirth)
    {
        $timeStampDiff = strtotime('now') - strtotime($dateOfBirth);

        return intval($timeStampDiff/(60 * 60 * 24 * 365));
    }

    public static function hashMatIdString($matId)
    {
        $matId = strval($matId);

        return substr_replace($matId, "###", -3);
    }

    public static function getReadableGender($genderLetter)
    {
       return ($genderLetter == 'm') ? 'Male' : 'Female';
    }
}