<?php

namespace App\Http\Controllers;

use App\SavedUserSearches;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @return view() object for default search page;
     */
    public function index()
    {
        return view('keywordsearch');
    }

    public function advance()
    {
        return view('advancedsearch');
    }
    
    public function regular()
    {
        return view('regularsearch');
    }

    public function searchByMatID()
    {
        $this->validate(request(), [
           'matID' => 'required|numeric'
        ], [
            'matID.required' => 'Please provide the MAT ID of the user',
            'matID.numeric' => 'The MatID must be a numeric value'
        ]);

        $mat_id = request('matID');
        
        $users = User::where('mat_id', 'like', '%'.$mat_id.'%')->get();
        
        echo '<pre>';
        var_dump($users);
        echo '</pre>';
    }

    public function processKeywordSearch(Request $r)
    {
        $searchResult = [ ];
        return view('search.results');
    }

    public function processRegularSearch(Request $r)
    {
        $searchResult = [ ];
        return view('search.results');
    }

    public function processAdvanceSearch(Request $r)
    {
        $users = User::query();

        if ( $r->has('age_floor') && $r->has('age_ceiling') )
            $users->where('age', '>=', $r->get('age_floor'));
        elseif ( $r->has('height_floor') && $r->has('height_ceiling') )
            $users->where('height', '>=', $r->get('height_floor'));
        elseif ( $r->has('marital_status') )
            $users->where('marital_status', '=', $r->get('marital_status'));
        elseif ( $r->has('religion') )
            $users->where('religion', '=', $r->get('religion'));

        return view('searchResult', compact('users'));
    }

    public function saveUserSearch(Request $request)
    {
        $search = new SavedUserSearches();
        $search->saveSearch($request);
    }
}
