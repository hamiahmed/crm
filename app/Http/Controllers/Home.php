<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{User};

class Home extends Controller
{

    public function dashboard()
    {
       
        // $_SESSION['header']     = 'hr';
        $_SESSION['page'] = 'dashboard';
        return view('dashboard');
    }
}
