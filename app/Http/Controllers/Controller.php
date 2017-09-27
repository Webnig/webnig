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
        $users = User::paginate(4);
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
            'China', 'India', 'Singapore', 'Nigeria'
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

        $emotions = [
            'Happy', 'Sad', 'Worried', 'Confident', 'Hopeful', 'Anxious about the future',
            'Furious', 'Calm', 'Fortunate', 'Out of control', 'Fulfilled', 'Depressed',
            'Energetic', 'Tired', 'Successful', 'Unable to cope', 'Content', 'Misunderstood',
            'Secure', 'Paranoid'
        ];

        $interests = [
            'Music', 'Fine Food and Dining', 'Arts and Crafts',
            'Theatre/Dance/Opera', 'Nature/Gardening', 'Socialising/Clubbing',
            'Philanthropy', 'Movies/Cinema', 'International Travle/Road Trip',
            'Photography', 'Swimming', 'Literature/Reading', 'Health and Fitness/Gym',
            'Playing Team Sports'
        ];

        $moviePlatforms = [
            'Foreign movies/Netflix', 'Local movies/African Magic', 'Telemundo',
            'Zee world', 'I don\'t mind what I watch'
        ];

        $characteristics = [
            'Makes a lot of time for their closest friends', 'Likes being the center of attention',
            'Often make others laugh', 'Bring romance to my relationships', 'Adept at resolving conflicts',
            'Always on the go', 'Constantly extending their circle of friends', 'Able to accommodate the wishes of others',
            'Trying to understand others', 'Always try to fix any issues, which arise between my partner and me',
            'Try to avoid disagreements', 'Try to forget an issue once it is resolved',
            'A people pleaser'
        ];

        return view('basicinfo.page2', compact(
            'eatingHabit', 'drinkingHabit', 'smokingHabit',
            'looks', 'heights', 'bodyStructures', 'makeups',
            'beard', 'belly', 'feet', 'boobs', 'butt', 'complexions',
            'fingers', 'nosetype', 'legs', 'shoulder', 'fashionStyles',
            'wifeLooks', 'husbandLooks', 'musicGenres', 'sports',
            'travelHabits', 'descriptions', 'moreDescriptions', 'qualities',
            'peopleDescriptions', 'imperfections', 'lifeViews', 'emotions',
            'interests', 'moviePlatforms', 'characteristics'
        ));
    }

    public function basicInfo3()
    {
        $curtsies = [
            'Yes, for only the husband', 'Yes, for only the in-laws',
            'Yes, for both husband and in-laws', 'No, I don\'t believe in this'
        ];

        $haveMaleChild = [
            'Yes, it is compulsory', 'No, it is not compulsory'
        ];

        $familyidol = [
            'Yes, we do', 'No, we don\'t'
        ];

        $spouse = [
            'I will listen to them and break up with my intended',
            'I will not listen to them',
            'I will listen depending on their reason'
        ];

        $partnersFamily = [
            'Yes, it is okay with me', 'No, it is not okay with me'
        ];

        $spouseGreetParents = [
            'Modern' => 'Shake hands when they greet my parents',
            'Hybrid' => 'Curtsy, nod when they greet my parents',
            'Traditional' => 'Kneel/Prostrate when they greet my parents',
            'Liberal' => 'Wave when they greet my parents'
        ];

        $spouseSiblings = [
            'Yes, if they are older than her', 'Yes, irrespective of their age',
            'No, if they are younger than her'
        ];

        $extendedFamilyExpenses = [
            'Yes, as long as it is mutual',
            'No, we keep extended family expenses apart'
        ];

        $religiousProphecies = ['Yes, I will', 'No, I will not'];

        return view('basicinfo.page3', compact(
            'curtsies', 'haveMaleChild', 'familyidol', 'spouse',
            'partnersFamily', 'spouseGreetParents', 'spouseSiblings',
            'extendedFamilyExpenses', 'religiousProphecies'
        ));
    }

    public function domesticatedInfo()
    {
        $domesticJobs = [
            'Yes, it is her job to do house chores',
            'No, both of us work on house chores',
            'We will get a househelp/cleaner/cook'
        ];

        $clothesWasher = [
            'My partner will wash everything with his/her hands',
            'We\'ll get a washing machine', 'Our house help/drycleaner will wash it',
            'I don\'t care as long as it is clean'
        ];

        $enjoyCooking = ['Yes', 'No'];
        $enjoyHousekeeping = ['Yes', 'No'];
        $tidyness = ['Very tidy', 'Tidy', 'Not tidy'];

        return view('basicinfo.domesticated', compact(
            'domesticJobs', 'clothesWasher', 'enjoyCooking', 'enjoyHousekeeping',
            'tidyness'
        ));
    }

    public function relationshipInfo()
    {
        $unsatisfiedFeeling = [
            'I will become very upset and plan my revenge',
            'I accept it in good stride and move on',
            'I will nag till they get it done',
            'Nothing, there will be other days'
        ];
        $hasCar = ['Yes', 'No'];
        $partnerHasCar = ['Yes', 'No'];
        $liveInFamilyHouse = [
            'Yes, I live in the family house',
            'No, I have my own place', 'I live with my friends'
        ];

        $mostAppealing = [
            'Settling down with a family someday',
            'A life of singledom', 'Living spontaneously and in the moment'
        ];

        $whoCallsMore = [
            'The Groom to be', 'The Bride to be', 'Both of them'
        ];

        $getBackTogetherActivity = [
            'We take a break for some time to think things through',
            'We have a heart to heart discussion',
            'We make love to reconnect our emotions'
        ];

        $communicateEmotionalNeeds = [
            'Absolutely, from the get-go',
            'Maybe after a few months into the relationship',
            'Absolutely not. I expect my partner to figure it out 
            without me saying it verbally'
        ];

        $holdOntoResentment = [
            'I do, but I am working on it',
            'Only until my partner apologizes',
            'I forgive easily'
        ];

        $typicalLoveExpression = [
            'I give them thoughtful gifts',
            'I show it throught acts of service',
            'I spend quality time with them',
            'I show it with physical touch and sex',
            'I tell them how special they are to me'
        ];

        $whyNotDoSomething = [
            'I have no funds to get started',
            'I have no motivation to get started',
            'Ancestral curse',
            'I just haven\'t gotten around to it yet'
        ];

        $whyStillSingle = [
            'Ancestral Curse', 'The right person has not come yet'
        ];

        $likeToBeWith = [
            'Quiet person', 'Talkative person'
        ];

        $mostValued = [
            'My space, peace and quiet', 'A partner that understands 
            my peculiarities', 'Respect &amp; Honesty', 'A partner that 
            will not try to change me but accept me the way I am'
        ];

        $choiceOfMusic = [
            'I would play the music I like', 'I will allow my partner to choose 
            the music', 'We should take turns choosing the music',
            'It would be best to keep the stereo off'
        ];

        $domesticViolence = [
            'Most people that beat their partners are provoked',
            'No man or woman should beat their partner no matter what',
            'It is one of those things you experience in marriage'
        ];

        $forgiveForgetAbility = [
            'Yes', 'No', 'It really depends on circumstances',
            'I can forgive, but I never forget'
        ];

        $annoyanceFrequency = [
            'All the time', 'Frequently', 'Once in a while',
            'Never'
        ];

        $promiscuousFriendsView = [
            'It is their life, I do not care, I still love them',
            'I will never move with friends that are promiscuous',
            'They can cheat so long as they are yet to get married'
        ];

        $partnerKeepLateNights = [
            'I do not mind', 'I really mind', 'So long as they come back 
            home I do not care', 'We will rock the night together'
        ];

        $cannotCompromise = [
            'Faithfulness', 'Sex', 'Food', 'Respect', 'Neatness', 'Money'
        ];

        $phoneInPartnerPocket = [
            'Call the number to see whose it is',
            'Openly ask what/who the number is for',
            'Nothing, I would trust my partner',
            'Nothing, my partner\'s privacy should be respected',
            'Ask them but also search for the number on Truecaller'
        ];

        $forgiveCheatingPartner = [
            'Yes, I will forgive, if he/she was sincerely sorry',
            'No! NEVER I will not forgive',
            'I don\'t believe in monogamy anyway',
            'Drag him/her to take an STD test'
        ];

        $partnerWeight = [
            'No, my partner\'s weight is irrelevant to me',
            'No, my parnter\'s health is what is most important',
            'Not if they are willing to work hard and lose it',
            'Yes, weight gain is so unattractive'
        ];

        $considerOpenRelationship = [
            'Yes', 'No'
        ];

        $avoidContactWithEx = [
            'Yes, of course!', 'No. This would be an unacceptable demand',
            'Only if their justification seems reasonable'
        ];

        $stayWithAttractiveFriend = [
            'It would be totally unacceptable. Get an hotel',
            'It might be ok, but I\'d want to discuss it first',
            'It\'s fine &mdash; I don\'t see any problem',
            'It sounds sexy &mdash; Hopefully they\'ll hook up'
        ];

        $relationshipMistake = [
            'Keep trying. Marriage means commitment',
            'Get a divorce. It\'ll be better for both of you'
        ];

        $affectionTolerance = [
            'Bring it on!!! Infinite', 'Most of it', 'Small-small abeg',
            'Get off me!!! It is too much'
        ];

        $ownUniqueThing = [
            'Very - I need some ME time to be happy',
            'Sort of - I need friends outside of my partner',
            'Not much - I like sharing stuff with my partner',
            'I\'d prefer not to have exclusive things'
        ];

        $makeBetterRelationship = [
            'Passion' => 'Fire burns out after a while',
            'Commitment' => 'Water is always there'
        ];

        $ensureDailyCommunication = [
            'Yes, no matter what', 'Yes, unless otherwise specified',
            'No, it\'s not necessary', 'No, I\'d prefer not to communicate daily'
        ];

        $nextRelationshipDescription = [
            'Someone to come home to', 'Someone to go out with',
            'Someone for tonight'
        ];

        $stillHurting = ['Yes', 'No'];
        $sharePhonePassword = ['Yes', 'No'];
        $idealMatchPreference = ['Sports', 'Books', 'Music', 'Movies'];
        $intoAnime = ['Yes', 'No'];
        $sarcasmOpinion = [
            'I like it or love it', 'It\'s okay',
            'Sarcasm is formulaic and lame'
        ];

        $singingVoice = [
            'Really awesome, actually', 'Very good', 'Okay', 'Crappy'
        ];

        $signupForMarriage = ['Yes', 'No'];
        $marryHowSoon = [
            'In 3 months', 'In 6 months', 'In a year\'s time',
            'In 2 years time'
        ];

        $weekendsActivity = [
            'Get up and do something', 'Sleep late and relax',
            'It varies'
        ];

        return view('basicinfo.relationship', compact(
            'unsatisfiedFeeling', 'hasCar', 'partnerHasCar', 'liveInFamilyHouse',
            'mostAppealing', 'whoCallsMore', 'getBackTogetherActivity',
            'communicateEmotionalNeeds', 'holdOntoResentment',
            'typicalLoveExpression', 'whyNotDoSomething', 'whyStillSingle',
            'likeToBeWith', 'mostValued', 'choiceOfMusic', 'domesticViolence',
            'forgiveForgetAbility', 'annoyanceFrequency', 'promiscuousFriendsView',
            'partnerKeepLateNights', 'cannotCompromise', 'phoneInPartnerPocket',
            'forgiveCheatingPartner', 'partnerWeight', 'considerOpenRelationship',
            'avoidContactWithEx', 'stayWithAttractiveFriend', 'relationshipMistake',
            'affectionTolerance', 'ownUniqueThing', 'makeBetterRelationship',
            'ensureDailyCommunication', 'nextRelationshipDescription', 'stillHurting',
            'sharePhonePassword', 'idealMatchPreference', 'intoAnime', 'sarcasmOpinion',
            'singingVoice', 'signupForMarriage', 'marryHowSoon', 'weekendsActivity'
        ));
    }

    public function lifeAndDeathInfo()
    {
        $viewOnDeath = [
            'A biological phenomenon', 'A spiritual progression',
            'Just a fact of life', 'We won\'t know until we die &amp; then 
            still might not know'
        ];
        $abortion = ['Yes', 'No'];
        
        $greatestMotivation = [
            'Love/Family', 'Wealth', 'Expression', 'Freedom',
            'Knowledge', 'Excellence'
        ];

        $stopEnjoyingNature = [
            'Yes, I do', 'No, I don\'t'
        ];

        $happyWithYourLife = ['Yes', 'No', 'Sometimes'];

        $genderBiasedRemarks = [
            'Yes', 'No', 'Only if they were inaccurate'
        ];

        $socialActivities = [
            'Lots', 'Sometimes', 'Rarely', 'Never but will love to',
            'Never not my thing'
        ];

        return view('basicinfo.lifeanddeath', compact(
            'viewOnDeath', 'abortion', 'greatestMotivation', 'stopEnjoyingNature',
            'happyWithYourLife', 'genderBiasedRemarks', 'socialActivities'
        ));
    }

    public function matches()
    {
        return view('matches.matches');
    }
}
