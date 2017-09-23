<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interest;
use App\User;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //TODO:: REMEMBER TO UNCOMMENT THIS LINE
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::findOrFail(10);
    }

    public function viewProfile()
    {
        $user = Auth::user();

        $notifications = $user->notifications();

        $interests = $user->load('interestShownIn')->load('interestShownFrom');
        //return $interests;
        $interests = [
            'interest_from' => $user->interestShownFrom->where('status', '=', '0'),

            'interested_in' => $user->interestShownIn->where('status', '=', '0')
        ];


        $transactions = $user->transactions();

        $matches = 'get matches';

        $details =
            [
                'user' => $user,
                'notifications' => $notifications,
                'interests' => $interests,
                'transactions' => $transactions,
                'matches' => $matches
            ];


        return view('profile.profile', compact('details'));
    }

    public function viewDashboard()
    {
        $user = Auth::user();

        $user->gender = Helper::getReadableGender($user->gender);
        $user->age = Helper::getUserAge($user->date_of_birth);


        $randomUsers = User::query()->inRandomOrder()->take(3)->get()->each(function ($item, $key) {
            $item->mat_id = Helper::hashMatIdString($item->mat_id);
            $item->age = Helper::getUserAge($item->date_of_birth);
            $item->gender = Helper::getReadableGender($item->gender);
        });


        $monthAgo = date('Y-m-d H:i:s', strtotime('1 month ago'));
        $notification = $user->notifications->where('created_at', '>=', $monthAgo);

        $profile_views = $notification->where('type', Notification::$PROFILE_VIEW)->count();
        $admired = $user->outGoingNotifications->where('created_at', '>=', $monthAgo)
            ->where('type', Notification::$ADMIRE_MADE)->count();

        $admiredBy = $notification->where('type', '=', Notification::$ADMIRE_FROM)->count();

        $matches = $notification->where('type', '=', Notification::$NEW_MATCHES)->count();

        return view('dashboard', compact(
            'profile_views',
            'admired',
            'admiredBy',
            'matches',
            'user',
            'randomUsers'
        ));
    }
}
