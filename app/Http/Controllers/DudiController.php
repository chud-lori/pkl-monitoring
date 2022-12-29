<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DudiController extends Controller
{
    public function dashboard()
    {
        return view ('dashboard.dudi');
    }
}
