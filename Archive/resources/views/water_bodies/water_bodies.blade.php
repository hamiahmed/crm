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
                    <div class="card-title text-white h2">Dams</div>

                </div>
                <br>
                <!-- /.card-header -->
                <div class="card-body ">
                    <!-- form start -->
                    <form method="post" id="dam_form" action="{{ url('water_bodies/create_dam') }}" enctype="multipart/form-data">

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Name of the Dam </label>
                                    <input id="fName" type="text" name="" placeholder="Name of the Dam " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">X Coordinates </label>
                                    <input id="mName" type="text" name="" placeholder="X Coordinates          " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Y Coordinates </label>
                                    <input id="lName" type="text" name="" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">District</label>
                                    <select name="" id="Select-DDLDistrict" class="form-control select2">
                                        <option value="">Choose</option>
                                        <option value="">Abbottabad District</option>
                                        <option value="">Bajaur District</option>
                                        <option value="">Bannu District</option>
                                        <option value="">Battagram District</option>
                                        <option value="">Buner District</option>
                                        <option value="">Charsadda District</option>
                                        <option value="">Dera Ismail Khan District</option>
                                        <option value="">Hangu District</option>
                                        <option value="">Haripur District</option>
                                        <option value="">Karak District</option>
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
                                    <input id="lName" type="text" name="" placeholder="Location " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Length of Dam </label>
                                    <input id="cNo" type="text" name="" placeholder="Length of Dam in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-12 my-2">
                                <div class="form-group m-5">
                                    <button type="submit" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon" value="Submit">Add More</button>

                                </div>
                            </div>
                    </form>

                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <table class="table" id="myTable3">
                                <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">#</th>
                                        <th scope="col">Dam Name</th>
                                        <th scope="col">X Coordinates</th>
                                        <th scope="col">Y Coordinates</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Length of Dam</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
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

    <div class="col-md-12 ">
        <div class="card card-success border border-2 border-dark bg-light">

            <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                <div class="card-title text-white h2">Rivers</div>

            </div>
            <br>
            <!-- /.card-header -->
            <div class="card-body ">

            <form method="post" id="dam_form" action="{{ url('water_bodies/create_river') }}" enctype="multipart/form-data">

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Name of the River </label>
                                <input id="fName" type="text" name="" placeholder="Name of the Dam " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">X Coordinates </label>
                                <input id="mName" type="text" name="" placeholder="X Coordinates          " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Y Coordinates </label>
                                <input id="lName" type="text" name="" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">District</label>
                                <select name="" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="">Abbottabad District</option>
                                    <option value="">Bajaur District</option>
                                    <option value="">Bannu District</option>
                                    <option value="">Battagram District</option>
                                    <option value="">Buner District</option>
                                    <option value="">Charsadda District</option>
                                    <option value="">Dera Ismail Khan District</option>
                                    <option value="">Hangu District</option>
                                    <option value="">Haripur District</option>
                                    <option value="">Karak District</option>
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
                                <input id="lName" type="text" name="" placeholder="Location " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Length of Dam </label>
                                <input id="cNo" type="text" name="" placeholder="Length of Dam in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="form-group m-5">
                                <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>

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
                                    <th scope="col">Length of Dam</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
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
        <div class="card card-success border border-2 border-dark bg-light">

            <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                <div class="card-title text-white h2">Streams</div>

            </div>
            <br>
            <!-- /.card-header -->
            <div class="card-body ">

            <form method="post" id="dam_form" action="{{ url('water_bodies/create_stream') }}" enctype="multipart/form-data">

                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Name of the stream </label>
                                <input id="fName" type="text" name="" placeholder="Name of the Dam " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">X Coordinates </label>
                                <input id="mName" type="text" name="" placeholder="X Coordinates          " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Y Coordinates </label>
                                <input id="lName" type="text" name="" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">District</label>
                                <select name="" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="">Abbottabad District</option>
                                    <option value="">Bajaur District</option>
                                    <option value="">Bannu District</option>
                                    <option value="">Battagram District</option>
                                    <option value="">Buner District</option>
                                    <option value="">Charsadda District</option>
                                    <option value="">Dera Ismail Khan District</option>
                                    <option value="">Hangu District</option>
                                    <option value="">Haripur District</option>
                                    <option value="">Karak District</option>
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
                                <input id="lName" type="text" name="" placeholder="Location " class="form-control" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Length of Dam </label>
                                <input id="cNo" type="text" name="" placeholder="Length of Dam in Unit Kilo meter" class="form-control" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="form-group m-5">
                                <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>

                            </div>
                        </div>
                </form>

                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <table class="table" id="myTable2">
                            <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Stream Name</th>
                                    <th scope="col">X Coordinates</th>
                                    <th scope="col">Y Coordinates</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Length of Dam</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-10 mt-3 " style="text-align: right; ">
                        <div class="form-group ">
                            <button type="submit " style="background-color: #14B8CF; " class="btn text-white shadow float-right ">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-2 mt-3 " style="text-align: right; ">
                        <div class="form-group ">
                            <a style="background-color: #14c8A0; " href="KPWaterBodies1.html" class="btn text-white shadow float-right ">Next</a>
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
</div>

@endsection