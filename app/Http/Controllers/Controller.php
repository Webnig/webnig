<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $users = User::where('id', '<=', '4')->get();
        // exit;
        return view('homepage', compact('users'));
    }

    public function faqs()
    {
    	return view('faqs');
    }

    public function keywordSearch()
    {
        return view('keywordsearch');
    }

    public function advanceSearch()
    {
        return view('advancedsearch');
    }

    public function regularSearch()
    {
        return view('regularsearch');
    }

    public function payment()
    {
    	return view('payment');
    }

    public function basicInfo()
    {
        $genotypes = [
            'AA', 'AS', 'SS', 'SC'
        ];

        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];

        $religions = [
            'Christian', 'Muslim', 'Atheist', 'Agnostic', 
            'Traditional Worshipper', 'Christian + Traditional',
            'Muslim + Traditional', 'Non Religious but Spiritual',
            'Other'
        ];

        $countries = [
            'United States of America',
            'United Kingdom', 'Kenya', 'Ghana',
            'China', 'India', 'Singapore'
        ];

        $nigerianStates = [
            'Abia', 'Adamawa', 'Akwa-Ibom', 'Anambra', 'Bauchi',
            'Benue', 'Borno', 'Cross Rivers', 'Kwara', 'Lagos',
        ];

        $spokenLanguages = [
            'English', 'Yoruba', 'Igbo', 'Hausa', 'Mandarin', 'French'
        ];

        $familyStatus = [
            'Lower middle class', 'Middle class', 'Upper middle class',
            'Rich', 'Affluent'
        ];

        $fatherStatus = [
            'Employed', 'Not Employed', 'Retired', 'Businessman',
            'Passed away'
        ];

        $motherStatus = [
            'Employed', 'Not Employed', 'Retired', 'Businesswoman',
            'Passed away'
        ];

        $residentStatus = [
            'Permanent Resident', 'Work Permit', 'Student Visa', 'Temporary Visa'
        ];

        return view('basicinfo.index', compact(
            'genotypes', 'months', 'religions', 'countries',
            'nigerianStates', 'spokenLanguages', 'familyStatus',
            'fatherStatus', 'motherStatus', 'residentStatus'
        ));
    }
}
