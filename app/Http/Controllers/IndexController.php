<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Method untuk route '/'
    public function index()
    {
        // Mengarahkan ke view utama
        return view('index'); // Pastikan ada file 'index.blade.php' di folder resources/views
    }

    public function profile()
    {
        // Mengarahkan ke view utama
        return view('profile'); // Pastikan ada file 'profile.blade.php' di folder resources/views
    }

    // Method untuk route '/submit'
    public function submit(Request $request)
    {
        // Proses data form jika diperlukan
        // Contoh:
        // $data = $request->all();
        // dd($data); // Untuk debug data yang diterima

        // Redirect atau tampilkan hasil
        return view('submit'); // Pastikan ada file 'submit.blade.php' di folder resources/views
    }
}
