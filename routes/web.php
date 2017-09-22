<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    return view('photo');
});

Route::get('/', 'Controller@index')->name('index_page');

//login route to view login page
Route::get('/login', 'Auth\LoginController@index')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('process_login');

Route::get('/login/channel/facebook', function(){ return ''; })->name('facebook_login');

Route::get('/login/channel/twitter', function(){ return ''; })->name('twitter_login');

Route::get('/login/channel/google', function(){ return ''; })->name('google_plus_login');

Route::get('/password/forgot', function(){
    return '';
})->name('forgot_password');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//route to view registration page
Route::get('/register', 'Auth\RegisterController@index')->name('register');

//process register request;
Route::post('/register', 'Auth\RegisterController@register')->name('process_registration');

// frequently asked questions
Route::get('faqs', 'Controller@faqs');

// keyword search
// do remember to remove these search routes if necessary @PENS
Route::get('/search', 'Controller@keywordSearch')->name('user.keyword_search');
Route::get('/search/advance', 'Controller@advanceSearch')->name('user.advance_search');
Route::get('/search/regular', 'Controller@regularSearch')->name('user.regular_search');

// matches
Route::get('/matches', 'Controller@matches')->name('display_matches');

// Routes for Basic Info
Route::get('/basicinfo', 'Controller@basicInfo');
Route::get('/basicinfo/2', 'Controller@basicInfo2');

// Payment
Route::get('payment', 'Controller@payment');

Route::middleware([ 'auth', 'reg.complete' ])->group(function () {
    
    Route::get('/dashboard', 'HomeController@viewDashboard')->name('view_dashboard');

    Route::get('/profile', 'HomeController@viewProfile')->name('view_profile');

//TODO::resolve the conflicts between these two routes {{--}}
//Route::get('/profile/edit', '');
//Route::resource('photos', 'PhotosController');

// TODO::uncomment this route
    // Route::get('/matches', 'MatchesController@index')->name('viewMatches');

//search routes
    // Route::get('/search', 'SearchController@index');

    // Route::get('search/advance', 'SearchController@advanceIndex');

    Route::post('/search', 'SearchController@processSearch');

    Route::post('/search/advance', 'SearchController@processAdvanceSearch');


//interests routes

    Route::get('/interests', 'InterestsController@index');

    Route::get('/interests/{interest}', 'InterestsController@view');

//
//Route::delete('/interests/{interest}', 'InterestsController@delete');

});




