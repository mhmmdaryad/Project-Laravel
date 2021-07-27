<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('halaman.auth');
    }

    public function send(Request $request)
    {
        $firstName = $request['firstname'];
        $lastName = $request['lastname'];
        $gender = $request['gender'];
        $nationality = $request['negara'];
        $language = $request['language'];

        return view('halaman.welcome', compact('firstName', 'lastName'));
    }
}
