<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
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

    public function addDudi()
    {
        return view('pembimbing.adddudi');
    }

    public function storeDudi(Request $request)
    {
        // dd($request);

        $password = Hash::make($request->email);

        $dudi = Dudi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $password,
            'perusahaan_id' => $request->nisn
        ]);

        return redirect()->route('pembimbing.dashboard')->with('status', 'dudi ditambahkan');

    }
}
