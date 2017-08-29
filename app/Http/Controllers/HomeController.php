<?php

namespace App\Http\Controllers;

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
        return $interests;
        $interests = [
            'interest_from' => $user->interestShownFrom->where('status', '=', '0'),
            'interested_in' => $user->interestShownIn->where('status', '=', '0')
        ];


        $transactions = $user->transactions();

        $matches = 'get matches';

        /*return [
                'user' => 'a',//$user,
                'notifications' => $notifications,
                'interests' => $interests,
                'transactions' => $transactions,
                'matches' => $matches
            ];*/
        return view('profile.profile');
    }

    public function viewDashboard()
    {
        $user = Auth::user();
        return view('dashboard.dashboard', compact('details'));
    }
}
