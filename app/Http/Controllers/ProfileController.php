<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transactions;
use App\Models\UserDetails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function navigator()
    {
        $exist = UserDetails::select('user_id')->where('user_id', '=', Auth::user()->id)->get();
        // dd($exist);

        if (Auth::user()->hasRole('user')) {
            if (!isset($exist)) {
                return view('user.complete-profile');
            } else {
                return view('welcome');
            }
        } else if (Auth::user()->hasRole('doner')) {
            return view('doner.waiting-page');
        } else if (Auth::user()->hasRole('seeker')) {
            return view('seeker.welcome');
        } else if (Auth::user()->hasRole('admin')) {
            $transactions = Transactions::all();
            return view('admin.dashboard')->with('transactions', $transactions);
        } else {
            abort(404, 'Error not found!');
        }
    }
}
