<?php

namespace App\Http\Controllers;

use App\Models\Doner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonerController extends Controller
{
    public function index()
    {
        return view('doner.become-a-doner');
    }
    public function create(Request $req)
    {
        Doner::create([
            'user_id' => Auth::user()->id,
            'is_available' => true,
            'date' => $req->date,
        ]);
        Auth::user()->detachRole('user');
        Auth::user()->attachRole('doner');
        return view('doner.waiting-page')->with('successMsg', 'you are added to the system succesfully.');
    }
}
