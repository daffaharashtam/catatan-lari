<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();


            // Simpan data user di session
            session([
                'user_id' => $user->id,
                'email' => $user->email,
                'display_name' => $user->name,
                'user_type' => $user->user_type
            ]);


            return redirect('/')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful!');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $items = DB::table('mastercity')->get()->toArray();

        // Redirect atau tampilkan hasil
        return view('auth.register', compact('items'));
    }

    public function registerStore(Request $request){
        // Validasi input dari form

        // dd($request);

        $birthdateformat = Carbon::parse($request->birthdate)->format('Ymd');

        $now = now();  // Mendapatkan waktu sekarang
        $formattedNow = $now->format('is');
        $runnerid = "RUNNER" . $birthdateformat . $formattedNow ;



        $filename = null;
        if ($request->hasFile('pic_profile')) {
            $file = $request->file('pic_profile');
            $filename = $runnerid . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profiles'), $filename);
        }



        // Simpan data user ke database
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_type' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $userId = DB::table('users')->insertGetId($userData);

        $RunnerData = [
            'id' =>  $userId,
            'runner_id' => $runnerid,
            'runner_no' => $request->runner_no,
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'city' => $request->city,
            'pic_profile' => $filename,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('runnerinfo')->insert($RunnerData);

        return redirect('/')->with('success', 'Register successfully!');
    }


}
