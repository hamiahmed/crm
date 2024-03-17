<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{Dam, river, stream};

class Fish_farms extends Controller
{

    public function fish_farm()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'fish_farm';
        return view('fish_farms/fish_farm');
    }
  
}
