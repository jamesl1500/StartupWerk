<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserInterestsSelection;
use Illuminate\Support\Facades\Auth;

class InspirationController extends Controller
{
    //
    public function index()
    {
        return view('inspiration_explorer.index');
    }

    public function save(Request $request)
    {
        // Gather interests
        $interests = $request->input('interest');

        // Gather skills
        $skills = $request->input('skill');

        // Save interests
        foreach($interests as $interest) {
            // See if the user already has this interest
            $userInterest = UserInterestsSelection::where('user_id', Auth::id())
                ->where('interest_id', $interest)
                ->first();

            // If the user does not have this interest, save it
            if(!$userInterest) {
                $userInterest = new UserInterestsSelection();
                $userInterest->user_id = Auth::id();
                $userInterest->interest_id = $interest;
                $userInterest->save();
            }
        }
    }
}
