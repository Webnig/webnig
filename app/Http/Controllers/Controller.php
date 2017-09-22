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
        $fashionStyles = [
            'Trendy', 'Casual', 'Business Casual',
            'Formal', 'Corporate', 'Semi Formal',
            'Comfortable'
        ];
        
        $wifeLooks = [
            'Genevieve', 'Asa', 'Beyonce', 'Toolz',
            'Omotola Jalade', 'Chidinma', 'Mo\' Chedda',
            'Toke Makinwa', 'Tiwa Savage', 'Yemi Alade',
            'Ini Edo', 'Mercy Johnson'
        ];
        
        $husbandLooks = [
            'Don Jazzy', 'Banky W', 'Olamide', 'Davido',
            'Jidenna', 'Wizkid', 'Sound Sultan', 'Timi Dakolo',
            'Ebuka', 'Tuface', 'M.I'
        ];

        $musicGenres = [
            'Jazz', 'Hip Hop music', 'Folk music', 'Popular Music',
            'Blues', 'Rock music', 'Rap', 'Melody', 'Pop music',
            'Reggae', 'Rhythm and blues', 'Country music', 'Punk rock',
            'Classical period', 'Orchestra', 'Heavy metal', 'Rock and roll',
            'Soul music', 'Opera', 'World music', 'Instrumental',
            'Alternative rock', 'Funk', 'Classical music',
            'Techno Music of Latin America'
        ];

        $sports = [
            'Cricket', 'Chess', 'Jogging', 'Badminton',
            'Swimming', 'Tennis', 'Volleyball', 'Football',
            'Basketball', 'Gym', 'Gold', 'Car racing'
        ];

        $travelHabits = [
            'Yes, been to Europe', 'Yes, been to USA', 'Yes, been to Asia',
            'Yes, been to Africa', 'Yes, been to UAE', 'Yes, been to many continents',
            'I have not been outside Nigeria', 'Other'
        ];

        $descriptions = [
            'I always proceed according to plan',
            'I make time for others', 'I often feel overwhelmed by things',
            'I like helping others', 'I always seek adventure',
            'I often leave clutter in the room',
            'My contributions often raise the level of conversation',
            'I become stressed easily partially',
            'I often try to make sure that other people feel good',
            'I am good at analyzing problems',
            'I stand up for myself and my interests',
            'I am easily discouraged', 'I can handle a great deal of information',
            'I often waste my time', 'I grasp situations quickly',
            'I wait for others to make the initiative', 'I like order and regularity',
            'I like to do nice things for other people',
            'I have little patience'
        ];

        $moreDescriptions = [
            'Warm', 'Clever', 'Dominant', 'Ambitious',
            'Extroverted', 'Agreeable', 'Submissive', 'Introverted',
            'Distant', 'Argumentative', 'Cold', 'Stable', 'Energetic',
            'Spiritual', 'Religious', 'Domesticated', 'Frugal',
            'Predictable', 'Affectionate', 'Intelligent', 'Sympathetic',
            'Attractive', 'Loyal', 'Witty', 'Satisfied', 'Spontaneous',
            'Sensitive', 'Successful', 'Generous'
        ];

        $qualities = [
            'Moral', 'Adaptable', 'Communicative', 'Honest', 'Sensual',
            'Liberal', 'Patient', 'Resilient', 'Optimistic', 'Conservative',
            'Passionate', 'Thoughtful', 'Protective', 'Genuine', 'Emotional',
            'Outgoing', 'Kind', 'Happy', 'Sincere', 'Industrious', 'Loving',
            'Responsible', 'Faithful', 'Serious minded', 'Understanding',
            'Easygoing', 'Confident', 'Curious', 'Strong'
        ];

        $peopleDescriptions = [
            'Good Listener', 'Caring', 'Outgoing', 'Creative', 'Ambitious',
            'Generous', 'Intelligent', 'Passionate', 'Modest', 'Spontaneous',
            'Optimistic', 'Loyal', 'Articulate', 'Happy', 'Industrious',
            'Energetic', 'Respectful', 'Physically fit', 'Reliable', 'Spiritual',
            'Rational', 'Quiet', 'Thoughtful', 'Funny', 'Affectionate', 'Romantic',
            'Kind', 'Easygoing', 'Genuine', 'Sweet', 'Perceptive'
        ];

        $imperfections = [
            'I get angry easily', 'I am a shy person', 'I have been told I snore',
            'I am old school', 'I party a lot', 'I cry easily', 'I trust easily',
            'I over worry about stuff', 'I am an introvert', 'I am always indoors',
            'I have OCD - a perfectionist', 'I have bad odor', 'I am sarcastic',
            'I can abuse well', 'I am impatient', 'I talk a lot'
        ];

        $lifeViews = [
            'My religion is important to me', 'I have a great sense of humor',
            'I enjoy talking to people in social situations', 'I am satisfied with my emotional development',
            'I have a strong desire for sex', 'I believe monogamy is essential in a relationship',
            'Being with new people is easy for me', 'I consider myself to be well adjusted',
            'I pay attention to my appearance', 'I laugh often', 'I like to be in situations where i meet new people',
            'I can easily make other people', 'My emotional state is stable',
            'I am rich and generous'
        ];

        return view('basicinfo.page2', compact(
            'eatingHabit', 'drinkingHabit', 'smokingHabit',
            'looks', 'heights', 'bodyStructures', 'makeups',
            'beard', 'belly', 'feet', 'boobs', 'butt', 'complexions',
            'fingers', 'nosetype', 'legs', 'shoulder', 'fashionStyles',
            'wifeLooks', 'husbandLooks', 'musicGenres', 'sports',
            'travelHabits', 'descriptions', 'moreDescriptions', 'qualities',
            'peopleDescriptions', 'imperfections', 'lifeViews'
        ));
    }

    public function matches()
    {
        return view('matches.matches');
    }
}
