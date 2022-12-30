<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
use App\Models\Perusahaan;
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
        $perusahaans = Perusahaan::all();
        // dd($perusahaans);
        return view('pembimbing.adddudi', ['perusahaans' => $perusahaans]);
    }

    public function storeDudi(Request $request)
    {
        $password = Hash::make($request->email);

        $dudi = Dudi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $password,
            'perusahaan_id' => $request->perusahaan_id
        ]);

        return redirect()->route('pembimbing.dashboard')->with('status', 'dudi ditambahkan');

    }
}
