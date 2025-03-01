<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountSettingsController extends Controller
{
    public function index()
    {
        return view('profile.setting');
    }
    public function updateEmail(Request $request)
    {
        $request->validate([
            'securityNewEmail' => 'required|email|unique:users,email',
        ]);

        $user = Auth::user();

        $user->update([
            'email' => $request->securityNewEmail,
        ]);


        return back()->with('success', 'Email changed successfully!');
    }

    /**
     * Оновлення пароля користувача.
     */
    public function updatePassword(Request $request)
    {
//        dd($request->all());
//        $request->validate([
//            'securityCurrentPass' => 'required',
//            'securityNewPass' => 'required|string|min:6',
//            'securityConfirmPass' => 'required|string|min:6|confirmed',
//        ]);
        $user = Auth::user();

        if (!Hash::check($request->securityCurrentPass, $user->password)) {
            return back()->with('errors', 'Current password is incorrect.');
        }

        $user->update([
            'password' => Hash::make($request->securityNewPass),
        ]);

        return back()->with('success', 'Password changed successfully!');
    }
}
