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
}