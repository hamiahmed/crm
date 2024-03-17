<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{User};

class Reports extends Controller
{
    public function employee_report()
    {
        $_SESSION['header']  = 'hr';
        $_SESSION['page']    = 'emp_report';
        $result['users'] = User::where('user_role', 3)->get();
        return view('reports/employee_report', $result);
    }
}
