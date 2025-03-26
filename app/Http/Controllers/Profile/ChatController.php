<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request) {
        return response()->json(['message' => 'Your message has been sent!']);
    }
}
