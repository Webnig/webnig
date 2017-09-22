<?php
/**
 * Created by PhpStorm.
 * User: Pens Naku
 * Date: 15/09/2017
 * Time: 17:51
 */

namespace App\Algorithm;


use App\User;

class MatchChecker
{

    public function __construct()
    {
        //fetch the answered questions from the users
    }

    public function start()
    {
        $users = User::all()->where('profile_completed', true);
        
    }
}

class PersonalInfoChecker
{

}