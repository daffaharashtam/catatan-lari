<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile');
    }

    public function editProfile()
    {
        return view('edit-profile');
    }

    public function register(Request $request)
    {

        // Redirect atau tampilkan hasil
        return view('register');
    }

    public function race(Request $request)
    {

        // Redirect atau tampilkan hasil
        return view('race');
    }

    public function runners(Request $request)
    {

        // Redirect atau tampilkan hasil
        return view('runners');
    }
}
