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

        $employers = [
            'Government', 'Private Business', 'Defence', 'Self Employed', 'Not working'
        ];

        $descriptionTags = [
            'Understanding', 'Cheerful', 'Respectable', 'Calm', 'Ambitious',
            'Easy-going', 'Down-to-earth', 'Loving', 'Homely', 'Broad-minded',
            'Modern', 'Positive-attitude', 'Helpful', 'Energetic', 'Conscientious'
        ];

        $hobbies = [
            'Cooking', 'Nature', 'Photography', 'Dancing', 'Painting',
            'Pets', 'Playing Musical Instruments', 'Puzzles',
            'Gardening/Landscaping', 'Art/Handicraft', 'Listening to music',
            'Movies', 'Internet Surfing', 'Traveling'
        ];

        return view('basicinfo.index', compact(
            'genotypes', 'months', 'religions', 'countries',
            'nigerianStates', 'spokenLanguages', 'familyStatus',
            'fatherStatus', 'motherStatus', 'residentStatus',
            'employers', 'descriptionTags', 'hobbies'
        ));
    }

    public function basicInfo2()
    {
        $eatingHabit = [
            'Normal', 'Traditional', 'Vegetarian', 'Keto diet',
            'Sugarless diet'
        ];

        $drinkingHabit = [
            'No', 'Drinks Socially', 'Love Alcohol'
        ];

        $smokingHabit = [
            'No', 'Occasionally', 'Yes', 'I smoke only cigarettes',
            'I smoke Indian hemp'
        ];

        $looks = ['Sexy', 'Nerdy'];
        $heights = ['Short', 'Petite', 'Tall', 'Very Tall'];
        $bodyStructures = [
            'Slim', 'Athletic', 'Skinny', 'Overweight', 'BBW',
            'SSBBW', 'Curvy', 'Plump', 'Muscular'
        ];
        $makeups = ['No makeup', 'Minimal makeup', 'Lots of makeup'];
        $beard = ['Full beard', 'Clean Shaven', 'Average beard'];
        $belly = ['Pot belly', 'Six pack', 'Flat belly', 'Not too flat'];
        $feet = ['Big', 'Average', 'Small'];
        $boobs = ['Very Big', 'Big', 'Average', 'Small'];
        $butt = ['Very Big', 'Big', 'Average Small'];
        $complexions = ['Dark Chocolate', 'Fair', 'Very Fair'];
        $fingers = ['Long', 'Short'];
        $nosetype = ['Pointed', 'Wide', 'Semi wide', 'Semi pointed'];
        $legs = ['Long', 'Short', 'Straight', 'K Leg', 'Bow Leg'];
        $shoulder = ['Wide', 'Average', 'Small'];

        return view('basicinfo.page2', compact(
            'eatingHabit', 'drinkingHabit', 'smokingHabit',
            'looks', 'heights', 'bodyStructures', 'makeups',
            'beard', 'belly', 'feet', 'boobs', 'butt', 'complexions',
            'fingers', 'nosetype', 'legs', 'shoulder'
        ));
    }
}
