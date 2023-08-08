<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use App\Models\Transactions;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    function storeTransaction(Request $req)
    {
        Transactions::create([
            'doner_id' => $req->doner_id,
            'seeker_id' => Auth::user()->id,
            'scheduled_date' => date('Y-m-d H:i:s'),
            'donation_date' => date('Y-m-d H:i:s'),
            'is_done' => true,
        ]);
        return view('seeker.details');
    }
}
