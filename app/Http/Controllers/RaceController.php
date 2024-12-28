<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function search()
    {
        return view('races.search');
    }

    public function show()
    {
        return view('races.show');
    }

    public function showSuggestionForm()
    {
        return view('races.suggest');
    }

    public function submitSuggestion(Request $request)
    {
        // Logic to handle race suggestion submission
    }
}
