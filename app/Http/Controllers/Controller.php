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

    public function payment()
    {
    	return view('payment');
    }
}
