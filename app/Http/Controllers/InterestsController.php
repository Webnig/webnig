<?php

namespace App\Http\Controllers;

use App\Interest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestsController extends Controller
{
    public function index()
    {
        return Auth::user()->interestShownIn;
    }

    public function view(Interest $interest)
    {
        return $interest;
    }
    
    public function saveInterest()
    {
        $interest = new Interest();
        $interest->addInterest(request()->target_id);
    }
    
    public function deleteInterest(Interest $interest)
    {
        Interest::destroy($interest->id);
    }
}
