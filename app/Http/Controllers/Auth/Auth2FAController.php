<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use PragmaRX\Google2FA\Google2FA;

class Auth2FAController extends Controller
{
    public function enableTwoFactor()
    {
        $user = auth()->user();
        $google2fa = new Google2FA();

        $secret = $google2fa->generateSecretKey();

        $user->google2fa_secret = $secret;
        $user->save();

        $uri = $google2fa->getQRCodeUrl(
            config('app.name'),
            $user->email,
            $secret
        );
        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($uri);

        return view('profile.setting', compact('qrCodeUrl', 'secret'));
    }

    public function verifyTwoFactor(Request $request)
    {
        $request->validate(['securityTwoFactorCode' => 'required']);

        $google2fa = new Google2FA();
        $user = session()->get('user', Auth::user());

        $valid = $google2fa->verifyKey($user->google2fa_secret, $request->input('securityTwoFactorCode'));

        if ($valid) {
            session(['2fa_verified' => true]);
            if (!$user->google2fa_enabled) {
                $user->google2fa_enabled = true;
                $user->save();
            }
            Auth::login($user);
            session()->forget('user');
            return redirect()->route('profile.dashboard')->with('success', 'Two-Factor Authentication enabled successfully.');
        } else {
            return back()->with('errors', 'Invalid authentication code. Please try again.');
        }
    }


    public function disableTwoFactor(Request $request)
    {
        $user = auth()->user();
        $user->google2fa_secret = null;
        $user->google2fa_enabled = false;
        $user->save();

        return back()->with('success', 'Two-Factor Authentication disabled successfully.');
    }
}
