<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
