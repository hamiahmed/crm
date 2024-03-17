<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{Dam, river, stream,Dam_detail,Dam_licenses,Dam_leases,River_fishes,River_licenses,River_leases,Stream_fishes,Stream_licenses,Stream_leases};

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
        $dam->name            = $req->input('dam_name');
        $dam->x_coordinates	  = $req->input('dam_x_Coordinates');
        $dam->y_coordinates   = $req->input('dam_y_coordinates');
        $dam->district_id     = $req->input('dam_district');
        $dam->location        = $req->input('dam_location');
        $dam->length_of_dam   = $req->input('dam_length');
        $dam->created_by      = $user_id;
        $dam->created_at      = now();
        $dam->save();
        return redirect()->back()->with('dam_success', 'Dam added successfully!');

    }

    public function add_river(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $river                  = new River;
        $river->name            = $req->input('river_name');
        $river->x_coordinates   = $req->input('river_x_coordinates');
        $river->y_coordinates   = $req->input('river_y_coordinates');
        $river->district_id     = $req->input('river_district');
        $river->location        = $req->input('river_location');
        $river->length_of_river = $req->input('river_length');
        $river->created_by      = $user_id;
        $river->created_at      = now();
        $river->save();
        return redirect()->back()->with('river_success', 'River added successfully!');
        
    }

    public function add_stream(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $stream                    = new Stream;
        $stream->name              = $req->input('stream_name');
        $stream->x_coordinates	   = $req->input('stream_x_coordinates');
        $stream->y_coordinates     = $req->input('stream_y_coordinates');
        $stream->district_id       = $req->input('stream_district');
        $stream->location          = $req->input('stream_location');
        $stream->length_of_stream  = $req->input('stream_length');
        $stream->created_by        = $user_id;
        $stream->created_at        = now();
        $stream->save();
        return redirect()->back()->with('stream_success', 'Stream added successfully!');
        
    }

    public function dam_details()
    {
        $_SESSION['header']  = 'hr';
        $_SESSION['page']    = 'dam_details';
        $result['fishes']    = Dam_detail::get();
        $result['licenses']  = Dam_licenses::get();
        $result['leases']    = Dam_leases::get();
        return view('water_bodies/dam_details',$result);
    }

    public function river_details()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'river_details';
        $result['fishes']    = River_fishes::get();
        $result['licenses']  = River_licenses::get();
        $result['leases']    = River_leases::get();
        return view('water_bodies/river_details',$result);
    }

    public function stream_details()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'stream_details';
        $result['fishes']    = River_fishes::get();
        $result['licenses']  = River_licenses::get();
        $result['leases']    = River_leases::get();
        return view('water_bodies/stream_details',$result);
    }

    public function add_dam_fish_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $fish_detail                  = new Dam_detail;
        $fish_detail->fish_type       = $req->input('fish_type');
        $fish_detail->dam_id          = $req->input('dam_id');
        $fish_detail->weight	      = $req->input('weight');
        $fish_detail->gear_type	      = $req->input('gear_type');
        $fish_detail->fish_population_pattern	      = $req->input('fish_population_pattern');
        $fish_detail->type_of_trout	  = $req->input('type_of_trout');
        $fish_detail->other_type      = $req->input('other_type');
        $fish_detail->daily_catch     = date('Y-m-d', strtotime($req->input('catch_date')));
        $fish_detail->number_of_fish  = $req->input('number_of_fish');
        $fish_detail->created_by      = $user_id;
        $fish_detail->created_at      = now();
        $fish_detail->save();
        return redirect()->back()->with('Success', 'Fish details added successfully!');

    }

    public function add_dam_license_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $license_detail                 = new Dam_licenses;
        $license_detail->license_type   = $req->input('license_type');
        $license_detail->dam_id         = $req->input('dam_id');
        $license_detail->created_by     = $user_id;
        $license_detail->created_at     = now();
        $license_detail->save();
        return redirect()->back()->with('Success', 'License details added successfully!');

    }

    public function add_dam_lease_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $lease_detail                        = new Dam_leases;
        $lease_detail->lease_value          = $req->input('lease_value');
        $lease_detail->amount_realized_date  = date('Y-m-d', strtotime($req->input('amount_realized_date')));
        $lease_detail->amount                = $req->input('amount');
        $lease_detail->dam_id                = $req->input('dam_id');
        $lease_detail->created_by            = $user_id;
        $lease_detail->created_at            = now();
        $lease_detail->save();
        return redirect()->back()->with('Success', 'Lease details added successfully!');

    }

    public function add_river_fish_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $fish_detail                  = new River_fishes;
        $fish_detail->fish_type       = $req->input('fish_type');
        $fish_detail->river_id          = $req->input('river_id');
        $fish_detail->weight	      = $req->input('weight');
        $fish_detail->gear_type	      = $req->input('gear_type');
        $fish_detail->fish_population_pattern	      = $req->input('fish_population_pattern');
        $fish_detail->type_of_trout	  = $req->input('type_of_trout');
        $fish_detail->other_type      = $req->input('other_type');
        $fish_detail->daily_catch     = date('Y-m-d', strtotime($req->input('catch_date')));
        $fish_detail->number_of_fish  = $req->input('number_of_fish');
        $fish_detail->created_by      = $user_id;
        $fish_detail->created_at      = now();
        $fish_detail->save();
        return redirect()->back()->with('Success', 'Fish details added successfully!');

    }

    public function add_river_license_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $license_detail                 = new River_licenses;
        $license_detail->license_type   = $req->input('license_type');
        $license_detail->river_id          = $req->input('river_id');
        $license_detail->created_by     = $user_id;
        $license_detail->created_at     = now();
        $license_detail->save();
        return redirect()->back()->with('Success', 'License details added successfully!');

    }

    public function add_river_lease_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $lease_detail                       = new River_leases;
        $lease_detail->lease_value          = $req->input('lease_value');
        $lease_detail->amount_realized_date = date('Y-m-d', strtotime($req->input('amount_realized_date')));
        $lease_detail->amount               = $req->input('amount');
        $lease_detail->river_id          = $req->input('river_id');
        $lease_detail->created_by    = $user_id;
        $lease_detail->created_at    = now();
        $lease_detail->save();
        return redirect()->back()->with('Success', 'Lease details added successfully!');

    }

    public function add_stream_fish_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $fish_detail                  = new Stream_fishes;
        $fish_detail->fish_type       = $req->input('fish_type');
        $fish_detail->stream_id       = $req->input('stream_id');
        $fish_detail->weight	      = $req->input('weight');
        $fish_detail->gear_type	      = $req->input('gear_type');
        $fish_detail->fish_population_pattern	      = $req->input('fish_population_pattern');
        $fish_detail->type_of_trout	  = $req->input('type_of_trout');
        $fish_detail->other_type      = $req->input('other_type');
        $fish_detail->daily_catch     = date('Y-m-d', strtotime($req->input('catch_date')));
        $fish_detail->number_of_fish  = $req->input('number_of_fish');
        $fish_detail->created_by      = $user_id;
        $fish_detail->created_at      = now();
        $fish_detail->save();
        return redirect()->back()->with('Success', 'Fish details added successfully!');

    }

    public function add_stream_license_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];
        $license_detail                 = new Stream_licenses;
        $license_detail->license_type   = $req->input('license_type');
        $license_detail->stream_id      = $req->input('stream_id');
        $license_detail->created_by     = $user_id;
        $license_detail->created_at     = now();
        $license_detail->save();
        return redirect()->back()->with('Success', 'License details added successfully!');

    }

    public function add_stream_lease_details(Request $req){

        $user_id = session()->get('userdata')['user_id'];

        $lease_detail                = new Stream_leases;
        $lease_detail->lease_value   = $req->input('lease_value');
        $lease_detail->amount_realized_date = date('Y-m-d',strtotime($req->input('amount_realized_date')));
        $lease_detail->amount        = $req->input('amount');
        $lease_detail->stream_id     = $req->input('stream_id');
        $lease_detail->created_by    = $user_id;
        $lease_detail->created_at    = now();
        $lease_detail->save();
        return redirect()->back()->with('Success', 'Lease details added successfully!');

    }

    /* single info of water bodies */
    public function get_single_dam(Request $request)
    {
        $searchTerm = $request->get('name');
        $data = Dam::select('dam_id', 'name')->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%');
        })->get();

        $result = [];
        foreach ($data as $value) {
            $result[] = ['id' => $value['dam_id'], 'text' => $value['name']];
        }

        return response()->json($result);
    }

    public function get_single_river(Request $request)
    {
        $searchTerm = $request->get('name');
        $data = River::select('river_id', 'name')->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%');
        })->get();
        
        $result = [];
        foreach ($data as $value) {
            $result[] = ['id' => $value['river_id'], 'text' => $value['name']];
        }

        return response()->json($result);
    }

    public function get_single_stream(Request $request)
    {
        $searchTerm = $request->get('name');
        $data = Stream::select('stream_id', 'name')->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%');
        })->get();
        
        $result = [];
        foreach ($data as $value) {
            $result[] = ['id' => $value['stream_id'], 'text' => $value['name']];
        }

        return response()->json($result);
    }
}