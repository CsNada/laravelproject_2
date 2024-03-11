<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function welcomeView () {
        return view('welcomePage');
    }

    public function createAccountView () {
        return view('createAccountPage');
    }
}
