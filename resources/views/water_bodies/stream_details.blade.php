@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="alert_div mt-3">
        @if (session()->has('Error'))
        <div class="alert alert-danger" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('Error') }}</h6>
        </div>
        @elseif(session()->has('Success'))
        <div class="alert alert-success" style="padding-top: 5px;padding-bottom: 5px;" role="alert">
            <h6>{{ session()->get('Success') }}</h6>
        </div>
        @endif
    </div>

    <div class="row my-4">

        <div class="col-md-12 ">
            <div class="card card-success border border-2 border-dark bg-light">
                <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                    <div class="card-title text-white">Streams</div>

                </div>
                <br>
                <!-- /.card-header -->
                <div class="card-body ">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Select stream</label>
                                <select id="stream_id" name="stream_id" class="form-control stream_select" data-placeholder="Search stream here.." required>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- form start -->
                    <form method="post" id="fish_form" action="{{ url('stream_detail/create_stream_fish') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="stream_id" id="form1_stream_id" value="">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row my-4">
                                    <div class="col-md-12 ">
                                        <div class="card card-success border border-2 border-dark bg-light">
                                            <!-- /.card-header -->
                                            <div class="card-body ">
                                                <!-- form start -->

                                                <div class="row mt-5">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Type of Fish </label>
                                                            <select name="fish_type" id="fish" class="form-control select2">
                                                                <option value="">Choose Fish</option>
                                                                <option value="56">Trout</option>
                                                                <option value="57"> Mahashair</option>
                                                                <option value="58"> Rahu</option>
                                                                <option value="59"> Mori</option>
                                                                <option value="60"> Thaila</option>
                                                                <option value="61"> Calbans</option>
                                                                <option value="61"> Silver</option>
                                                                <option value="63"> Encashment to LPR</option>
                                                                <option value="64"> Big Head</option>
                                                                <option value="65"> Sole</option>
                                                                <option value="67"> Schizothorax sp</option>
                                                                <option value="68"> Gulfaam</option>
                                                                <option value="69"> Eel</option>
                                                                <option value="70"> Sher Mahi</option>
                                                                <option value="71"> Cat Fish</option>
                                                                <option value="71"> Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $('#fish').change(function(e) {
                                                            e.preventDefault();
                                                            let fish_type = $(this).val();
                                                            if (fish_type == 'trout') {
                                                                $('#raceways').show();
                                                                $('#trout_type').select2();
                                                                $('#Other_fields').hide();
                                                            } else if (fish_type == 'other') {
                                                                $('#raceways').hide();
                                                                $('#Other_fields').show();
                                                            } else {
                                                                $('#raceways').hide();
                                                                $('#Other_fields').hide();
                                                            }
                                                        });
                                                    </script>
                                                    <div id="raceways" class="col-md-4" style="display:none;">
                                                        <div class="form-group">
                                                            <label class="fw-bold ">Type of Trout </label>
                                                            <select name="type_of_trout" id="fish" class="form-control select2">
                                                                <option value="">Choose Type</option>
                                                                <option value="trout">Rainbow</option>
                                                                <option value="1"> Rainbow</option>
                                                                <option value="2"> Sparctic</option>
                                                                <option value="3"> Golden Rainbow</option>
                                                                <option value="4"> Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="Other_fields" class="col-md-4" style="display: none;">
                                                        <div class=" form-group ">
                                                            <label class="fw-bold ">Other</label>
                                                            <input type="text " name="other_type" placeholder="Other" class="form-control " autocomplete="off ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Date</label>
                                                            <input id="date" name="catch_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Number of Fish </label>
                                                            <input id="number_of_fish" type="text" name="number_of_fish" placeholder="Number of Fish" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Weight </label>
                                                            <input id="weight" type="text" name="weight" placeholder="Weight in Metric Ton" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Type of Gear Used</label>
                                                            <select name="gear_type" id="" class="form-control select2">
                                                                <option value="">Choose</option>
                                                                <option value="72">Gill Net</option>
                                                                <option value="73">Drag Net</option>
                                                                <option value="74">Cast Net</option>
                                                                <option value="75">Happa</option>
                                                                <option value="76">Hand Net</option>
                                                                <option value="77">Rod & Line</option>
                                                                <option value="78">Hook Line</option>
                                                                <option value="79">Other</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Fish Population Pattern % </label>
                                                            <input id="fish_population_pattern" type="text" name="fish_population_pattern" placeholder="Fish Population Pattern %" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 my-2">
                                                        <div class="form-group mt-5">
                                                            <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 my-2">
                                                        <table class="table">
                                                            <thead class="text-white" style="background-color: #14B8CF;">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Type of Fish</th>
                                                                    <th scope="col">Daily Catch</th>
                                                                    <th scope="col">Number of Fish</th>
                                                                    <th scope="col">Weight</th>
                                                                    <th scope="col">Type of Gear</th>
                                                                    <th scope="col">Fis Pop Pattern %</th>
                                                                    <th scope="col">Update</th>
                                                                    <th scope="col">Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                $count = 1;
                                                                @endphp
                                                                @foreach($fishes as $fish)
                                                                <tr>
                                                                    <th scope="row">{{$count}}</th>
                                                                    <td></td>
                                                                    <td>{{$fish->daily_catch}}</td>
                                                                    <td>{{$fish->number_of_fish}}</td>
                                                                    <td>{{$fish->weight}}</td>
                                                                    <td></td>
                                                                    <td>{{$fish->fish_population_pattern}}</td>
                                                                    <td class="text-center" onclick="get_fishes('{{$fish->stream_detail_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                                    <td onclick="global_delete('<?= $fish->stream_detail_id ?>','stream_detail');"><i class="fa-solid fa-trash"></i></td>
                                                                </tr>
                                                                @php
                                                                $count++;
                                                                @endphp
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>

                    </form>

                    <form method="post" id="license_form" action="{{ url('stream_detail/create_stream_license') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="stream_id" id="form2_stream_id" value="">

                        <div class="col-md-4 mt-5">
                            <div class="form-group">
                                <label class="fw-bold">Type of Licenses </label>
                                <select name="license_type" id="" class="form-control select2" required>
                                    <option value="">Choose</option>
                                    <option value="1">General License</option>
                                    <option value="2">Cast net</option>
                                    <option value="3">D.R.L</option>
                                    <option value="4">Dip Net</option>
                                    <option value="5">Long line</option>
                                    <option value="6">S.R.L</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 my-2">
                            <div class="form-group">
                                <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF;margin-bottom:15px" fdprocessedid="kqoon">Add More</button>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 mt-5">
                            <table class="table">
                                <thead class="text-white" style="background-color: #14B8CF;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type of Licenses</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($licenses as $license)
                                    <tr>
                                        <th scope="row">{{$count}}</th>
                                        <td>{{$license->license_type}}</td>
                                        <td class="text-center" onclick="get_licenses('{{$license->stream_license_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td onclick="global_delete('<?= $license->stream_license_id ?>','stream_licenses');"><i class="fa-solid fa-trash"></i></td>
                                    </tr>
                                    @php
                                    $count++;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </form>

                    <form method="post" id="lease_form" action="{{ url('stream_detail/create_stream_lease') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="stream_id" id="form3_stream_id" value="">

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">stream Total Lease Value </label>
                                    <input type="text" name="lease_value" placeholder="stream Total Lease Value " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Lease amount realized</label>
                                    <input id="dob" name="amount_realized_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Amount</label>
                                    <input type="text" name="amount" placeholder="Amount" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>


                            <div class="col-md-12 my-3">
                                <div class="form-group">
                                    <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF" fdprocessedid="kqoon">Add More</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table">
                                    <thead class="text-white" style="background-color: #14B8CF;">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">stream Total Lease Value </th>
                                            <th scope="col">Lease amount realized </th>
                                            <th scope="col">Amount </th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($leases as $lease)
                                    <tr>
                                        <th scope="row">{{$count}}</th>
                                        <td>{{$lease->lease_value}}</td>
                                        <td>{{$lease->amount_realized_date}}</td>
                                        <td>{{$lease->amount}}</td>
                                        <td class="text-center" onclick="get_Leases('{{$lease->stream_leases_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td onclick="global_delete('<?= $license->stream_leases_id ?>','stream_leases');"><i class="fa-solid fa-trash"></i></td>
                                    </tr>
                                    @php
                                    $count++;
                                    @endphp
                                    @endforeach

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                    <div class="row">

                        <div class="col-md-12 mt-12 " style="text-align: right; ">
                            <div class="form-group ">
                                <a style="background-color: #14c8A0; " href="{{ url('river_detail') }}" class="btn text-white shadow float-right ">Next</a>
                            </div>
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

    <script>
        // Update hidden input value when stream selection changes

        $('#stream_id').change(function() {
            var selectedstreamId = $(this).val();
            $('#form1_stream_id').val(selectedstreamId);
            $('#form2_stream_id').val(selectedstreamId);
            $('#form3_stream_id').val(selectedstreamId);
        });

        $('#fish_form, #license_form, #lease_form').submit(function(e) {
            var selectedstreamId = $('#stream_id').val();

            // Check if a stream has been selected
            if (!selectedstreamId) {
                alert('Please select a Stream before submitting the form.');
                e.preventDefault();
            }
        });
    </script>

    @endsection