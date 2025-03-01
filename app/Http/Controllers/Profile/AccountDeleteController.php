<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountDeleteController extends Controller
{
    public function index()
    {
        return view('profile.delete-account');
    }

    public function destroy(Request $request)
    {
        $request->user()->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
