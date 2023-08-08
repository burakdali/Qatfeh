<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use App\Models\User;
use Illuminate\Http\Request;

class SeekerController extends Controller
{
    function index()
    {
        return view('seeker.details');
    }
    function searchForDonators(Request $req)
    {
        $users = User::join('doners', 'doners.user_id', 'users.id')
            ->join('user_details', 'user_details.user_id', 'users.id')
            ->where('location', '=', $req->location)
            ->where('blood_type', '=', $req->blood_type)
            ->get();
        return view('seeker.search-result')->with('users', $users);
    }
}
