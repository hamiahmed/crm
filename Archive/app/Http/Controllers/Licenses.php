<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{Dam, river, stream};

class Licenses extends Controller
{

    public function general()
    {
        echo 'yes';die;
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']   = 'All kind of Nets (General)';
        return view('Licenses/license',$result);
    }

    public function fishing_Rod()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title'] = 'Fishing Rod';
        return view('Licenses/license',$result);
    }

    public function fishing_line()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']  = 'Fishing Line';
        return view('Licenses/license',$result);
    }

    public function cast_net()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title'] = 'Cast Net';
        return view('Licenses/license',$result);
    }

    public function dip_net()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']  = 'Dip Net';
        return view('Licenses/license',$result);
    }

    public function spear_hand()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']   = 'Spear and Hand License';
        return view('Licenses/license',$result);
    }

    public function special_license()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']  = 'Special License';
        return view('Licenses/license',$result);
    }

    public function daily_not_trout()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']  = 'Daily License(Non-Trout)';
        return view('Licenses/license',$result);
    }

    public function daily_trout()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'License';
        $result['title']  = 'Daily License(Tout)';
        return view('Licenses/license',$result);
    }
  
}
