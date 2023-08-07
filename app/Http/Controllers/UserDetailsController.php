<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailsController extends Controller
{
    public function create(Request $request)
    {
        $user = UserDetails::create(
            [
                'user_id' => Auth::user()->id,
                'full_name' => $request->full_name,
                'blood_type' => $request->blood_type,
                'location' => $request->location,
                'additional_phone_number' => $request->additional_phone_number,
                'whatsapp_link' => $request->whatsapp_link,
            ]
        );
        return view('welcome')->with('successMsg', 'Data is added succesfully.');
    }
}
