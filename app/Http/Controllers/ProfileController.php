<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $userId = Auth::id();
        $infoRun = DB::table('runnerinfo')
        ->where('id',$userId)
        ->get()
        ->toArray()[0];

        $Cinfo = DB::table('racedetail')
        ->where('runner_id',$userId)
        ->get()
        ->count();

        $Sdistance = DB::table('racedetail')
        ->select('runner_id', DB::raw('sum(distance) as total_distance'))
        ->groupBy('runner_id')
        ->where('runner_id',$userId)
        ->get()
        ->toarray();

        $Stime = DB::table('racedetail')
        ->select(DB::raw('SEC_TO_TIME(SUM(TIME_TO_SEC(time))) as total_time'))
        ->where('runner_id', $userId)
        ->groupBy('runner_id')
        ->get()
        ->toArray();

        $Space = DB::table('racedetail')
        ->select(DB::raw('SEC_TO_TIME(SUM(TIME_TO_SEC(pace))) as total_pace'))
        ->where('runner_id', $userId)
        ->groupBy('runner_id')
        ->get()
        ->toArray();

        $Longest = DB::table('racedetail')
        ->where('runner_id', $userId)
        ->orderBy('distance', 'desc')
        ->first();

        $pbest = DB::table('racedetail')
        ->select(
            'category',
            DB::raw('MIN(TIME_TO_SEC(time)) as fastest_time_seconds'),
            DB::raw('SEC_TO_TIME(MIN(TIME_TO_SEC(time))) as fastest_time')
        )
        ->where('runner_id', $userId)
        ->groupBy('category')
        ->get()
        ->toArray();

        $Dataprofile = [
            'sum_distance' => isset($Sdistance[0]->total_distance) ? $Sdistance[0]->total_distance : '-',
            'sum_time' => isset($Stime[0]->total_time) ? $Stime[0]->total_time : '-',
            'sum_pace' => isset($Space[0]->total_pace) ? $Space[0]->total_pace : '-',
            'count_race' => $Cinfo ?? '-',
            'Longest' => isset($Longest->category) ? $Longest->category : '-'
        ];

        $racedetail = DB::table('racedetail')
        ->where('runner_id',$userId)
        ->get();

        $groupedRaces = $racedetail->groupBy(function ($race) {
            return \Carbon\Carbon::parse($race->race_date)->year;
        })->sortKeysDesc();


        return view('profile.show',compact('infoRun','Dataprofile','groupedRaces','pbest'));

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
