<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.show');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        // Logic to update profile
    }

    public function viewOther($id)
    {
        // Logic to show other user's profile
        return view('profile.other', ['userId' => $id]);
    }
}
