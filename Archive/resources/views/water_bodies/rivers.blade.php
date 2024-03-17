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
                    <div class="card-title text-white">Rivers</div>

                </div>
                <br>

                <!-- /.card-header -->
                <div class="card-body ">
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Select river</label>
                                    <select name="employee_id" class="form-control employee_select" data-placeholder="Search dam here.." required>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
                                                            <label class="fw-bold">Type of Fish</label>
                                                            <select name="fish_type" id="fish" class="form-control select2">
                                                                <option value="">Choose Fish</option>
                                                                <option value="trout">Trout</option>
                                                                <option value="mahashair">Mahashair</option>
                                                                <option value="rahu">Rahu</option>
                                                                <option value="mori">Mori</option>
                                                                <option value="thaila">Thaila</option>
                                                                <option value="calbans">Calbans</option>
                                                                <option value="silver">Silver</option>
                                                                <option value="encashment_to_lpr">Encashment to LPR</option>
                                                                <option value="big_head">Big Head</option>
                                                                <option value="sole">Sole</option>
                                                                <option value="sschizothorax_sp">Schizothorax sp</option>
                                                                <option value="gulfaam">Gulfaam</option>
                                                                <option value="eel">Eel</option>
                                                                <option value="sher_mahi">Sher Mahi</option>
                                                                <option value="cat_fish">Cat Fish</option>
                                                                <option value="other">Other</option>
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
                                                            }else if(fish_type == 'other'){
                                                                $('#raceways').hide();
                                                                $('#Other_fields').show();
                                                            }else{
                                                                $('#raceways').hide();
                                                                $('#Other_fields').hide();
                                                            }
                                                        });
                                                    </script>
                                                    <div id="raceways" class="col-md-4" style="display:none;">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Type of Trout</label>
                                                            <select name="type_of_trout" id="trout_type" class="form-control">
                                                                <option value="">Choose Type</option>
                                                                <option value="trout">Rainbow</option>
                                                                <option value="rainbow">Rainbow</option>
                                                                <option value="sparctic">Sparctic</option>
                                                                <option value="golden_rainbow">Golden Rainbow</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div id="Other_fields" class="col-md-4" style="display:none;">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Other</label>
                                                            <input type="text" name="other_type" placeholder="Other" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Daily Catch</label>
                                                            <input id="date" name="daily_catch" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Number of Fish</label>
                                                            <input type="text" name="number_of_fish" placeholder="Number of Fish" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Weight</label>
                                                            <input type="text" name="weight" placeholder="Weight in Metric Ton" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Type of Gear Used</label>
                                                            <select name="gear_type" id="gear_type" class="form-control select2">
                                                                <option value="">Choose</option>
                                                                <option value="gill_net">Gill Net</option>
                                                                <option value="drag_net">Drag Net</option>
                                                                <option value="cast_net">Cast Net</option>
                                                                <option value="happa">Happa</option>
                                                                <option value="hand_net">Hand Net</option>
                                                                <option value="rod_line">Rod & Line</option>
                                                                <option value="hook_line">Hook Line</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Fish Population Pattern % </label>
                                                            <input type="text" name="fish_population_pattern" placeholder="Fish Population Pattern %" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 my-2">
                                                        <div class="form-group m-5">
                                                            <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>
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
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                                                                    <td><i class="fa-solid fa-trash"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Type of Licenses </label>
                                                            <select name="" id="" class="form-control select2">
                                                                <option value="">Choose</option>
                                                                <option value="">General License</option>
                                                                <option value="">Cast net</option>
                                                                <option value="">D.R.L</option>
                                                                <option value="">Dip Net</option>
                                                                <option value="">Long line</option>
                                                                <option value="">S.R.L</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 my-2">
                                                        <div class="form-group ">
                                                            <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 my-2">
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
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td></td>
                                                                    <td><i class="fa-solid fa-pen-to-square"></i></td>
                                                                    <td><i class="fa-solid fa-trash"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">River Total Lease Value </label>
                                                            <input type="text" name="" placeholder="River Total Lease Value " class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Lease amount realized</label>
                                                            <input id="dob" name="" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="fw-bold">Amount</label>
                                                            <input type="text" name="" placeholder="Amount" class="form-control" autocomplete="off" required="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-12 my-2">
                                                    <div class="form-group ">
                                                        <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 my-5">
                                                    <table class="table">
                                                        <thead class="text-white" style="background-color: #14B8CF;">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">River Total Lease Value </th>
                                                                <th scope="col">Lease amount realized </th>
                                                                <th scope="col">Amount </th>
                                                                <th scope="col">Update</th>
                                                                <th scope="col">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                                                                <td><i class="fa-solid fa-trash"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-9 mt-3 " style="text-align: right; ">
                        <div class="form-group ">
                            <button type="submit " style="background-color: #14B8CF; " class="btn text-white shadow float-right ">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3 " style="text-align: right; ">
                        <div class="form-group ">
                            <a style="background-color: #14c8A0; " href="KPWaterBodies2.html" class="btn text-white shadow float-right ">Next</a>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3 " style="text-align: right; margin-right: 1%;">
                        <div class="form-group ">
                            <a style="background-color: #14c8A0; " href="KPWaterbodies.html" class="btn text-white shadow float-right ">Previous</a>
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
<script>
    $(document).ready(function() {
        $("#dailycatch1").inputmask("99-99-9999", {
            "clearIncomplete": true
        });
        $('#dailycatch1').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd/mm/yyyy'
        });
        $("#leaseamount1").inputmask("99-99-9999", {
            "clearIncomplete": true
        });
        $('#leaseamount1').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd/mm/yyyy'
        });
    });
</script>
@endsection