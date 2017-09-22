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

Route::get('/test', function () {
    return view('matches.matches');
});

Route::get('/mail', 'MailController@sendRegistrationSuccess');

Route::get('/', 'Controller@index')->name('index_page');

//login route to view login page
Route::get('/login', 'Auth\LoginController@index')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('process_login');

Route::get('/auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('social_login');

Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/password/forgot', function () {
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
Route::get('/search', 'SearchController@index')->name('user.keyword_search');

Route::get('/search/advance', 'SearchController@advance')->name('user.advance_search');

Route::get('/search/regular', 'SearchController@regular')->name('user.regular_search');

Route::post('/search', 'SearchController@processKeywordSearch')->name('process_search');

Route::post('/search/regular', 'SearchController@processRegularSearch')->name('process_regular_search');

Route::post('/search/advance', 'SearchController@processAdvanceSearch')->name('process_advanced_search');

Route::post('/search/byMatID', 'SearchController@searchByMatID')->name('process_search_by_mat_id');


// Routes for Basic Info
Route::get('/basicinfo', 'Controller@basicInfo')->name('user.basic_info');

// Payment
Route::get('payment', 'Controller@payment');

Route::middleware([ 'auth', 'reg.complete' ])->group(function () {

    Route::get('/dashboard', 'HomeController@viewDashboard')->name('view_dashboard');

    Route::get('/profile', 'HomeController@viewProfile')->name('view_profile');

//TODO::resolve the conflicts between these two routes {{--}}
//Route::get('/profile/edit', '');
//Route::resource('photos', 'PhotosController');

    Route::get('/matches', 'MatchesController@index')->name('viewMatches');


//interests routes

    Route::get('/interests', 'InterestsController@index');

    Route::get('/interests/{interest}', 'InterestsController@view');

});




