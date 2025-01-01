<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $announcements = DB::table('announcmentinfo')
        ->where('status','=',1)
        ->where('endvalid', '>=', $today )
        ->get()
        ->toArray();

        $races = DB::table('raceinfo')
        ->where('status','=',1)
        ->where('race_date', '>=',$today )
        ->get()
        ->toArray();



        return view('index',compact('announcements','races'));

    }
}
