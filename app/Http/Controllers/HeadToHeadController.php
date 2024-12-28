<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadToHeadController extends Controller
{
    public function show()
    {
        return view('headtohead.show');
    }

    public function compare(Request $request)
    {
        // Logic for head-to-head comparison
    }
}
