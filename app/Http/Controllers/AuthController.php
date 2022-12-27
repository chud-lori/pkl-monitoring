<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembimbing;
use App\Models\Dudi;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $email = $request->email;
        // $password = Hash::make("123");
        $password = $request->password;
        $role = $request->role;

        if ($role == "siswa")
        {
            // login siswa
            $user = Siswa::where('email', $email)->first();
        }
        else if ($role == "pembimbing")
        {
            // login pembimbing guru
            $user = Pembimbing::where('email', $email)->first();
        }
        else if ($role == "dudi")
        {
            // login dudi
            $user = Dudi::where('email', $email)->first();
        }

        if ($user == null)
        {
            return response()->json([
                "message" => "EMAIL NOT FOUND"
            ]);
        }

        if (Hash::check($password, $user->password))
        {
            return response()->json([
                "message" => "LOGIN SUCCESS"
            ]);
        }
        else
        {
            return response()->json([
                "message" => "LOGIN FAILED"
            ]);
        }

    }
}
