<?php

namespace Tabler\App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(Request $r, User $profile)
    {
        $r->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users,email,' . auth()->id()],
        ]);

        $profile->update([
            'name' => $r->name,
            'email' => $r->email,
        ]);

        return redirect()->back()->with('success', 'Saved!');
    }

    public function updatePassword(Request $r, User $profile)
    {
        $r->validate([
            'current_password' => [
                'required', 
                function($attribute, $value, $fail) {
                    if (! Hash::check($value, auth()->user()->password)) {
                        $fail("The :attribute is incorrect.");
                    }
                }
            ],
            'new_password' => ['required', 'confirmed', Password::min(12)->letters()->numbers()->mixedCase()->symbols()],
        ]);

        $profile->update([
            'password' => Hash::make($r->new_password),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success', 'Password updated! Please log in with the new password next time.');
    }
}
