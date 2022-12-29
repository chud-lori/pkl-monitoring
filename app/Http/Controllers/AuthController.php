<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembimbing;
use App\Models\Dudi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        Auth::check();
        Auth::guard('dudi')->logout();
        if(Auth::guard('siswa')->check())
        {
            return redirect()->route('siswa.dashboard');
        }
        else if(Auth::guard('pembimbing')->check())
        {
            return redirect()->route('pembimbing.dashboard');
        }
        else if(Auth::guard('dudi')->check())
        {
            return redirect()->route('dudi.dashboard');
        }
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

        if (!Hash::check($password, $user->password))
        {
            return response()->json([
                "message" => "LOGIN FAILED"
            ]);
        }

        Auth::guard($role)->attempt(['email' => $request->email, 'password' => $request->password]);

        $dashboard = $role . ".dashboard";
        return redirect()->route($dashboard);
    }
}
