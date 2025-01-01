<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Menampilkan form untuk membuat user baru.
     */
    public function Announcement_Listing()
    {
        $announcements = DB::table('announcmentinfo')
        ->get()
        ->toArray();
        return view('settings.announcement.listing',compact('announcements'));
    }

    public function Announcement_Add()
    {
        return view('settings.announcement.add');
    }

    public function Announcement_Store(Request $request)
    {
        $startvalid = Carbon::parse($request->startvalid)->format('Ymd');
        $endvalid = Carbon::parse($request->endvalid)->format('Ymd');

        $now = now();  // Mendapatkan waktu sekarang
        $formattedNow = $now->format('is');
        $Announcementid = "ANNOUNCEMENT" . $startvalid. $endvalid . $formattedNow ;

        $filename = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $Announcementid . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/Announcement'), $filename);
        }

        $AnnouncementData = [
            'desc_info' => $request->desc_info,
            'startvalid' => $startvalid,
            'endvalid' => $endvalid,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        if ($request->hasFile('img')) {
            $AnnouncementData['img'] = $filename;
        }

        DB::table('announcmentinfo')->insert($AnnouncementData);

        $announcements = DB::table('announcmentinfo')->get()->toArray();

        return redirect('/announcement')->with('success', 'Announcement berhasil dibuat!');
    }

    public function Announcement_Edit($id)
    {
        $announcement= DB::table('announcmentinfo')
        ->select('id', 'desc_info', 'img', 'status', DB::raw("DATE_FORMAT(startvalid, '%Y-%m-%d') as startvalid"), DB::raw("DATE_FORMAT(endvalid, '%Y-%m-%d') as endvalid"))
        ->where('id', $id)
        ->get()
        ->toArray()[0];

        return view('settings.announcement.edit',compact('announcement'));
    }

    public function Announcement_Update(Request $request)
    {
        $id = $request->id;
        $startvalid = Carbon::parse($request->startvalid)->format('Ymd');
        $endvalid = Carbon::parse($request->endvalid)->format('Ymd');

        $now = now();  // Mendapatkan waktu sekarang
        $formattedNow = $now->format('is');
        $Announcementid = "ANNOUNCEMENT" . $startvalid. $endvalid . $formattedNow ;

        $announcementold = DB::table('announcmentinfo')
        ->where('id','=',$id)
        ->get()[0];

        if($announcementold->img == ''){
            $filename = null;
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $filename = $Announcementid . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/Announcement'), $filename);
            }
        } else {
            if ($request->hasFile('img')) {

                $filePath = public_path('uploads/Announcement/' . $announcementold->img);
                if (File::exists($filePath)) {
                    // Hapus file
                    File::delete($filePath);
                }

                $file = $request->file('img');
                $filename = $Announcementid . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/Announcement'), $filename);
            }

        }

        $AnnouncementData = [
            'desc_info' => $request->desc_info,
            'startvalid' => $startvalid,
            'endvalid' => $endvalid,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ];


        if ($request->hasFile('img')) {
            $AnnouncementData['img'] = $filename;
        }

        DB::table('announcmentinfo')
        ->where('id', $id)
        ->update($AnnouncementData);

        $announcements = DB::table('announcmentinfo')->get()->toArray();

        return redirect('/announcement')->with('success', 'Announcement berhasil diupdate!');
    }

    public function Announcement_Destroy($id)
    {
        $announcement = DB::table('announcmentinfo')
        ->where('id','=',$id)
        ->get()[0];
        $filePath = public_path('uploads/Announcement/' . $announcement->img);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $deleted = DB::table('announcmentinfo')->where('id', $id)->delete();

        $announcements = DB::table('announcmentinfo')->get()->toArray();

        return redirect('/announcement')->with('success', 'Announcement berhasil didelete!');
    }

    public function race_Listing()
    {
        $races = DB::table('raceinfo')
        ->get()
        ->toArray();
        return view('settings.race.listing',compact('races'));
    }

    public function race_Add()
    {
        return view('settings.race.add');
    }

    public function race_Store(Request $request)
    {
        $race_date = Carbon::parse($request->race_date)->format('Ymd');


        $RaceData = [
            'race_detail' => $request->race_detail,
            'race_date' => $race_date,
            'status' => $request->status,
            'category' => $request->category,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('raceinfo')->insert($RaceData);

        $races = DB::table('raceinfo')->get()->toArray();

        return redirect('/RaceInfo')->with('success', 'Race berhasil dibuat!');
    }

    public function race_Edit($id)
    {
        $races= DB::table('raceinfo')
        ->select('id', 'race_detail', 'category', 'status', DB::raw("DATE_FORMAT(race_date, '%Y-%m-%d') as race_date"))
        ->where('id', $id)
        ->get()
        ->toArray()[0];

        return view('settings.race.edit',compact('races'));
    }

    public function race_Update(Request $request)
    {
        $id = $request->id;
        $race_date = Carbon::parse($request->race_date)->format('Ymd');

        $raceold = DB::table('raceinfo')
        ->where('id','=',$id)
        ->get()[0];

        $RaceData = [
            'race_detail' => $request->race_detail,
            'race_date' => $race_date,
            'category' => $request->category,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ];


        DB::table('raceinfo')
        ->where('id', $id)
        ->update($RaceData);

        $races = DB::table('raceinfo')->get()->toArray();

        return redirect('/RaceInfo')->with('success', 'race berhasil diupdate!');
    }

    public function race_Destroy($id)
    {
        $announcement = DB::table('raceinfo')
        ->where('id','=',$id)
        ->get()[0];


        $deleted = DB::table('raceinfo')->where('id', $id)->delete();

        $races = DB::table('raceinfo')->get()->toArray();

        return redirect('/RaceInfo')->with('success', 'race berhasil didelete!');
    }


    // Category
    public function category_Listing()
    {
        $categories = DB::table('category')
        ->get()
        ->toArray();
        return view('settings.category.listing',compact('categories'));
    }


    public function category_Add()
    {
        return view('settings.category.add');
    }

    public function category_Store(Request $request)
    {

        $CategoryData = [
            'category_name' => $request->category_name,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('category')->insert($CategoryData);


        return redirect('/category')->with('success', 'Category berhasil dibuat!');
    }

    public function category_Edit($id)
    {
        $categories= DB::table('category')
        ->where('id', $id)
        ->get()
        ->toArray()[0];

        return view('settings.category.edit',compact('categories'));
    }

    public function category_Update(Request $request)
    {
        $id = $request->id;

        $CategoryData = [
            'category_name' => $request->category_name,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('category')
        ->where('id', $id)
        ->update($CategoryData);

        return redirect('/category')->with('success', 'Category berhasil diupdate!');
    }

    public function category_Destroy($id)
    {

        $deleted = DB::table('category')->where('id', $id)->delete();


        return redirect('/category')->with('success', 'category berhasil didelete!');
    }

     // Listing Users
     public function users_Listing()
     {
         $users = DB::table('users')->get()->toArray();
         return view('settings.users.listing', compact('users'));
     }

     // Add User Form
     public function users_Add()
     {
         return view('settings.users.add');
     }

     // Store New User
     public function users_Store(Request $request)
     {
         $userData = [
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password), // Password is hashed
             'user_type' => $request->user_type,
             'created_at' => now(),
             'updated_at' => now(),
         ];

         DB::table('users')->insert($userData);

         return redirect('/users')->with('success', 'User berhasil dibuat!');
     }

     // Edit User Form
     public function users_Edit($id)
     {
         $user = DB::table('users')
             ->where('id', $id)
             ->get()
             ->toArray()[0];

         return view('settings.users.edit', compact('user'));
     }

     // Update User
     public function users_Update(Request $request)
     {
         $id = $request->id;

         $userData = [
             'name' => $request->name,
             'email' => $request->email,
             'user_type' => $request->user_type,
             'created_at' => now(),
             'updated_at' => now(),
         ];

         if ($request->password) {
             $userData['password'] = Hash::make($request->password); // Update password only if provided
         }

         DB::table('users')
             ->where('id', $id)
             ->update($userData);

         return redirect('/users')->with('success', 'User berhasil diupdate!');
     }

     // Delete User
     public function users_Destroy($id)
     {
         DB::table('users')->where('id', $id)->delete();

         return redirect('/users')->with('success', 'User berhasil didelete!');
     }

}
