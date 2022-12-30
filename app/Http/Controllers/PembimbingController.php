<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class PembimbingController extends Controller
{
    public function dashboard()
    {
        return view ('dashboard.pembimbing');
    }

    public function addSiswa()
    {
        return view('pembimbing.addsiswa');
    }

    public function storeSiswa(Request $request)
    {
        // dd($request);

        $password = Hash::make($request->nisn);

        $siswa = Siswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $password,
            'nisn' => $request->nisn
        ]);

        return redirect()->route('pembimbing.dashboard')->with('status', 'siswa ditambahkan');

    }
}
