@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="alert_div mt-3">
        @if (session()->has('Error'))
        <div class="alert alert-danger" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('Error') }}</h6>
        </div>
        @elseif(session()->has('dam_success'))
        <div class="alert alert-success" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('dam_success') }}</h6>
        </div>
        @endif
    </div>

    <div class="row my-4">

        <div class="col-md-12 ">
            <div class="card card-success border border-2 border-dark bg-light">

                <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                    <div class="card-title text-white h2">Dams</div>

                </div>
                <br>
                <!-- /.card-header -->
                <div class="card-body ">
                    <!-- form start -->
                    <form method="post" id="dam_form" action="{{ url('water_bodies/create_dam') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Name of the Dam </label>
                                    <input id="dam_name" type="text" name="dam_name" placeholder="Name of the Dam " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">X Coordinates </label>
                                    <input id="mName" type="text" name="dam_x_coordinates" placeholder="X Coordinates" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Y Coordinates </label>
                                    <input id="mName" type="text" name="dam_x_coordinates" placeholder="X Coordinates" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">District</label>
                                    <select name="dam_district" id="Select-DDLDistrict" class="form-control select2">
                                        <option value="">Choose</option>
                                        <option value="21">Abbottabad District</option>
                                        <option value="22">Bajaur District</option>
                                        <option value="23">Bannu District</option>
                                        <option value="24">Battagram District</option>
                                        <option value="25">Buner District</option>
                                        <option value="26">Charsadda District</option>
                                        <option value="27">Dera Ismail Khan District</option>
                                        <option value="28">Hangu District</option>
                                        <option value="29">Haripur District</option>
                                        <option value="30">Karak District</option>
                                        <option value="">Khyber District</option>
                                        <option value="">Kohat District</option>
                                        <option value="">Kolai-Palas District</option>
                                        <option value="">Kurram District</option>
                                        <option value="">Lakki Marwat District</option>
                                        <option value="">Lower Chitral District</option>
                                        <option value="">Lower Dir District</option>
                                        <option value="">Lower Kohistan District</option>
                                        <option value="">Lower South Waziristan District</option>
                                        <option value="">Malakand District</option>
                                        <option value="">Mansehra District</option>
                                        <option value="">Mardan District</option>
                                        <option value="">Mohmand District</option>
                                        <option value="">North Waziristan District</option>
                                        <option value="">Nowshera District</option>
                                        <option value="">Orakzai District</option>
                                        <option value="">Peshawar District</option>
                                        <option value="">Shangla District</option>
                                        <option value="">Swabi District</option>
                                        <option value="">Swat District</option>
                                        <option value="">Tank District</option>
                                        <option value="">Torghar District</option>
                                        <option value="">Upper Dir District</option>
                                        <option value="">Upper Kohistan District</option>
                                        <option value="">Upper South Waziristan District</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Location</label>
                                    <input id="lName" type="text" name="dam_location" placeholder="Location " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Length of Dam </label>
                                    <input id="cNo" type="text" name="dam_length" placeholder="Length of Dam in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-12 my-2">
                                <div class="form-group m-5">
                                    <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon" value="Submit">Submit</button>

                                </div>
                            </div>
                    </form>

                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <table class="table" id="myTable3">
                                <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Dam Name</th>
                                        <th scope="col">X Coordinates</th>
                                        <th scope="col">Y Coordinates</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Length of Dam</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($dams as $dam)
                                    <tr>
                                        <th scope="row">{{$count}}</th>
                                        <td>{{$dam->name}}</td>
                                        <td>{{$dam->x_coordinates}}</td>
                                        <td>{{$dam->y_coordinates}}</td>
                                        <td>{{$dam->district->e_name}}</td>
                                        <td>{{$dam->location}}</td>
                                        <td>{{$dam->length_of_dam}}</td>
                                        <td class="text-center" onclick="get_dam('{{$dam->dam_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td onclick="global_delete('<?= $dam->dam_id ?>','dam');"><i class="fa-solid fa-trash"></i></td>
                                    </tr>
                                    @php
                                    $count++;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- river area start -->
<div class="row my-4">

    <div class="alert_div mt-3">
        @if (session()->has('Error'))
        <div class="alert alert-danger" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('Error') }}</h6>
        </div>
        @elseif(session()->has('river_success'))
        <div class="alert alert-success" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('river_success') }}</h6>
        </div>
        @endif
    </div>

    <div class="col-md-12 ">
        <div class="card card-success border border-2 border-dark bg-light">

            <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                <div class="card-title text-white h2">Rivers</div>

            </div>
            <br>
            <!-- /.card-header -->
            <div class="card-body ">

                <form method="post" id="river_form" action="{{ url('water_bodies/create_river') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Name of the River </label>
                                <input id="fName" type="text" name="river_name" placeholder="Name of the River " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">X Coordinates </label>
                                <input id="mName" type="text" name="river_x_coordinates" placeholder="X Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Y Coordinates </label>
                                <input id="lName" type="text" name="river_y_coordinates" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">District</label>
                                <select name="river_district" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="21">Abbottabad District</option>
                                    <option value="22">Bajaur District</option>
                                    <option value="23">Bannu District</option>
                                    <option value="24">Battagram District</option>
                                    <option value="25">Buner District</option>
                                    <option value="26">Charsadda District</option>
                                    <option value="27">Dera Ismail Khan District</option>
                                    <option value="28">Hangu District</option>
                                    <option value="29">Haripur District</option>
                                    <option value="30">Karak District</option>
                                    <option value="">Khyber District</option>
                                    <option value="">Kohat District</option>
                                    <option value="">Kolai-Palas District</option>
                                    <option value="">Kurram District</option>
                                    <option value="">Lakki Marwat District</option>
                                    <option value="">Lower Chitral District</option>
                                    <option value="">Lower Dir District</option>
                                    <option value="">Lower Kohistan District</option>
                                    <option value="">Lower South Waziristan District</option>
                                    <option value="">Malakand District</option>
                                    <option value="">Mansehra District</option>
                                    <option value="">Mardan District</option>
                                    <option value="">Mohmand District</option>
                                    <option value="">North Waziristan District</option>
                                    <option value="">Nowshera District</option>
                                    <option value="">Orakzai District</option>
                                    <option value="">Peshawar District</option>
                                    <option value="">Shangla District</option>
                                    <option value="">Swabi District</option>
                                    <option value="">Swat District</option>
                                    <option value="">Tank District</option>
                                    <option value="">Torghar District</option>
                                    <option value="">Upper Dir District</option>
                                    <option value="">Upper Kohistan District</option>
                                    <option value="">Upper South Waziristan District</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Location</label>
                                <input id="lName" type="text" name="river_location" placeholder="Location " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Length of River </label>
                                <input id="cNo" type="text" name="river_length" placeholder="Length of River in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="form-group m-5">
                                <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Submit</button>

                            </div>
                        </div>
                </form>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <table class="table" id="myTable">
                            <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">River Name</th>
                                    <th scope="col">X Coordinates</th>
                                    <th scope="col">Y Coordinates</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Length of River</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @foreach($rivers as $river)
                                <tr>
                                    <th scope="row">{{$count}}</th>
                                    <td>{{$river->name}}</td>
                                    <td>{{$river->x_coordinates}}</td>
                                    <td>{{$river->y_coordinates}}</td>
                                    <td>{{$river->district->e_name}}</td>
                                    <td>{{$river->location}}</td>
                                    <td>{{$river->length_of_river}}</td>
                                    <td class="text-center" onclick="get_river('{{$river->river_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                    <td onclick="global_delete('<?= $river->river_id ?>','river');"><i class="fa-solid fa-trash"></i></td>
                                </tr>
                                @php
                                $count++;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- stream area start -->
<div class="row my-4">



    <div class="col-md-12 ">

        <div class="alert_div mt-3">
            @if (session()->has('Error'))
            <div class="alert alert-danger" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
                <h6>{{ session()->get('Error') }}</h6>
            </div>
            @elseif(session()->has('stream_success'))
            <div class="alert alert-success" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
                <h6>{{ session()->get('stream_success') }}</h6>
            </div>
            @endif
        </div>
        <div class="card card-success border border-2 border-dark bg-light">

            <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                <div class="card-title text-white h2">Streams</div>

            </div>
            <br>
            <!-- /.card-header -->
            <div class="card-body ">

                <form method="post" id="dam_form" action="{{ url('water_bodies/create_stream') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Name of the stream </label>
                                <input id="fName" type="text" name="stream_name" placeholder="Name of the Stream " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">X Coordinates </label>
                                <input id="mName" type="text" name="stream_x_coordinates" placeholder="X Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Y Coordinates </label>
                                <input id="lName" type="text" name="stream_y_coordinates" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">District</label>
                                <select name="stream_district" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="21">Abbottabad District</option>
                                    <option value="22">Bajaur District</option>
                                    <option value="23">Bannu District</option>
                                    <option value="24">Battagram District</option>
                                    <option value="25">Buner District</option>
                                    <option value="26">Charsadda District</option>
                                    <option value="27">Dera Ismail Khan District</option>
                                    <option value="28">Hangu District</option>
                                    <option value="29">Haripur District</option>
                                    <option value="30">Karak District</option>
                                    <option value="">Khyber District</option>
                                    <option value="">Kohat District</option>
                                    <option value="">Kolai-Palas District</option>
                                    <option value="">Kurram District</option>
                                    <option value="">Lakki Marwat District</option>
                                    <option value="">Lower Chitral District</option>
                                    <option value="">Lower Dir District</option>
                                    <option value="">Lower Kohistan District</option>
                                    <option value="">Lower South Waziristan District</option>
                                    <option value="">Malakand District</option>
                                    <option value="">Mansehra District</option>
                                    <option value="">Mardan District</option>
                                    <option value="">Mohmand District</option>
                                    <option value="">North Waziristan District</option>
                                    <option value="">Nowshera District</option>
                                    <option value="">Orakzai District</option>
                                    <option value="">Peshawar District</option>
                                    <option value="">Shangla District</option>
                                    <option value="">Swabi District</option>
                                    <option value="">Swat District</option>
                                    <option value="">Tank District</option>
                                    <option value="">Torghar District</option>
                                    <option value="">Upper Dir District</option>
                                    <option value="">Upper Kohistan District</option>
                                    <option value="">Upper South Waziristan District</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Location</label>
                                <input id="lName" type="text" name="stream_location" placeholder="Location " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Length of Stream </label>
                                <input id="cNo" type="text" name="stream_length" placeholder="Length of Stream in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="form-group m-5">
                                <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Submit</button>

                            </div>
                        </div>
                </form>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <table class="table" id="myTable2">
                            <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Stream Name</th>
                                    <th scope="col">X Coordinates</th>
                                    <th scope="col">Y Coordinates</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Length of Stream</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = 1;
                                @endphp
                                @foreach($streams as $stream)
                                <tr>
                                    <th scope="row">{{$count}}</th>
                                    <td>{{$stream->name}}</td>
                                    <td>{{$stream->x_coordinates}}</td>
                                    <td>{{$stream->y_coordinates}}</td>
                                    <td>{{$stream->district->e_name}}</td>
                                    <td>{{$stream->location}}</td>
                                    <td>{{$stream->length_of_river}}</td>
                                    <td class="text-center" onclick="get_stream('{{$stream->stream_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                    <td onclick="global_delete('<?= $stream->stream_id ?>','stream');"><i class="fa-solid fa-trash"></i></td>
                                </tr>
                                @php
                                $count++;
                                @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- Col-12 -->
</div>
<!-- Col-12 -->
</div>

@endsection