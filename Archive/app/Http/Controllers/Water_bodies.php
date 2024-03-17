<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{Dam, river, stream};

class Water_bodies extends Controller
{

    public function water_bodies()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'water_bodies';
        $result['dams']     = Dam::get();
        $result['rivers']   = river::get();
        $result['streams']  = stream::get();
        return view('water_bodies/water_bodies',$result);
    }

    public function add_dam(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $dam                  = new Dam;
        $dam->name            = $req->input('name');
        $dam->x_coordinates	  = $req->input('employee_id');
        $dam->y_coordinates   = $req->input('designation_id');
        $dam->district_id     = $req->input('bps_id');
        $dam->location        = $req->input('from_department');
        $dam->length_of_dam   = $req->input('to_department');
        $dam->created_by      = $user_id;
        $dam->created_at      = now();
        $dam->save();
        return redirect()->back()->with('Success', 'Dam added successfully!');

    }

    public function add_river(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $river          = new River;
        $river->name    = $req->input('name');
        $river->x_coordinates	 = $req->input('employee_id');
        $river->y_coordinates  = $req->input('designation_id');
        $river->district_id    = $req->input('bps_id');
        $river->location = $req->input('from_department');
        $river->length_of_dam   = $req->input('to_department');
        $river->created_by      = $user_id;
        $river->created_at      = now();
        $river->save();
        return redirect()->back()->with('Success', 'River added successfully!');
        
    }

    public function add_stream(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $stream                  = new Stream;
        $stream->name            = $req->input('name');
        $stream->x_coordinates	 = $req->input('employee_id');
        $stream->y_coordinates   = $req->input('designation_id');
        $stream->district_id     = $req->input('bps_id');
        $stream->location        = $req->input('from_department');
        $stream->length_of_dam   = $req->input('to_department');
        $stream->created_by      = $user_id;
        $stream->created_at      = now();
        $stream->save();
        return redirect()->back()->with('Success', 'Stream added successfully!');
        
    }

    public function dams()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'dams';
        return view('water_bodies/dams');
    }

    public function rivers()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'rivers';
        return view('water_bodies/rivers');
    }

    public function streams()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'streams';
        // $result['streams'] = river::get();
        return view('water_bodies/streams');
    }
}
