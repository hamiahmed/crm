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

    <iv class="container-fluid">
            <div class="row my-4">
                <div class="col-md-12 ">
                    <div class="card card-success border border-2 border-dark bg-light">
                        <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                            <div class="card-title text-white">KP Fish Farms</div>

                        </div>
                        <br>

                        <!-- /.card-header -->
                        <div class="card-body ">
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Choose Fish Farm </label>
                                            <select name="" id="typeoffish" class="form-control select2">
                                                <option value="">Choose Fish Farm</option>
                                                <option value="trout" >Earthen</option>
                                                <option value=""> Cage</option>
                                                <option value=""> Race ways</option>
                                                <option value=""> Bio Floc</option>
                                                <option value="Other" > Other</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div id="othertype" class="col-md-4" style="display: none;">
                                        <div class="form-group">
                                            <label class="fw-bold">Other</label>
                                            <input id="mName" type="text" name="" placeholder="Other" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Name of Fish Farm</label>
                                            <input id="mName" type="text" name="" placeholder="Name of Fish Farm" class="form-control" autocomplete="off" required="">
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
                                <option value="">Upper Chitral District</option>
                                <option value="">Upper Dir District</option>
                                <option value="">Upper Kohistan District</option>
                                <option value="">Upper South Waziristan District</option>
                              
                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Address</label>
                                            <input id="lName" type="text" name="" placeholder="Address" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Registration Number</label>
                                            <input id="lName" type="text" name="" placeholder="Registration Number" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Certification Number</label>
                                            <input id="cNo" type="text" name="" placeholder="Certification Number" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Area of Fish Farms </label>
                                            <input id="email" type="Email" name="" placeholder="Area of Fish Farms in Kanals" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">X Coordinates</label>
                                            <input type="text" name="" placeholder="X Coordinates" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="fw-bold">Y Coordinates</label>
                                            <input type="text" name="" placeholder="Y Coordinates" class="form-control" autocomplete="off" required="">
                                        </div>
                                    </div>
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
                                                                    <select name="" id="fish" class="form-control select2">
                                                 <option value="">Choose Fish</option>
                                                 <option value="trout" >Trout</option>
                                                 <option value=""> Mahashair</option>
                                                 <option value=""> Rahu</option>
                                                 <option value=""> Mori</option>
                                                 <option value=""> Thaila</option>
                                                 <option value=""> Calbans</option>
                                                 <option value=""> Silver</option>
                                                 <option value=""> Encashment to LPR</option>
                                                 <option value=""> Big Head</option>
                                                 <option value=""> Sole</option>
                                                 <option value=""> Schizothorax sp</option>
                                                 <option value=""> Gulfaam</option>
                                                 <option value=""> Eel</option>
                                                 <option value=""> Sher Mahi</option>
                                                 <option value=""> Cat Fish</option>
                                                 <option value="Other" > Other</option>
                                
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 row" id="raceways" style="display: none ;">
                                                                <div class="row">
                                                                    <div id="" class="col-md-4">
                                                                        <div class=" form-group ">
                                                                            <label class="fw-bold ">Types of Trout </label>
                                                                            <input type="text " name=" " placeholder=" Type of Trout " class="form-control " autocomplete="off ">
                                                                        </div>
                                                                    </div>
                                                                    <div id="" class="col-md-4">
                                                                        <div class=" form-group ">
                                                                            <label class="fw-bold ">Number of Race Ways </label>
                                                                            <input type="text " name=" " placeholder=" Number of Race Ways " class="form-control " autocomplete="off ">
                                                                        </div>
                                                                    </div>
                                                                    <div id="" class="col-md-4">
                                                                        <div class=" form-group ">
                                                                            <label class="fw-bold ">Area of Race Ways </label>
                                                                            <input type="text " name=" " placeholder=" Area of Race Ways " class="form-control " autocomplete="off ">
                                                                        </div>
                                                                    </div>
                                                                    <div id="" class="col-md-4">
                                                                        <div class=" form-group ">
                                                                            <label class="fw-bold ">Unit square Feet  </label>
                                                                            <input type="text " name=" " placeholder=" Unit square Feet  " class="form-control " autocomplete="off ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group m-5">
                                                                        <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF;" fdprocessedid="kqoon"><i class="fa-solid fa-plus"></i></button>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 my-2">
                                                                    <table class="table">
                                                                        <thead class="text-white" style="background-color: #14B8CF;">
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Type</th>
                                                                                <th scope="col">Number of Race Ways</th>
                                                                                <th scope="col">Area of Race Ways</th>
                                                                                <th scope="col">Unit square Feet</th>
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
                                                                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                                                                                <td><i class="fa-solid fa-trash"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div id="Other_fields" class="col-md-4" style="display: none;">
                                                                <div class=" form-group ">
                                                                    <label class="fw-bold ">Other</label>
                                                                    <input type="text " name=" " placeholder="Other" class="form-control " autocomplete="off ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="fw-bold">Fish Harvest</label>
                                                                    <input id="txtharvest" class="form-control" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Number of Fish</label>
                                                                    <input type="text " name=" " placeholder="Number of Fish " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Metric Ton</label>
                                                                    <input type="text " name=" " placeholder="Weight in Metric Ton " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="fw-bold">Type of Gear Used</label>
                                                                    <select name="" id="" class="form-control select2">
                                                        <option value="">Choose Gear Used</option>
                                                        <option value="">Gill Net</option>
                                                        <option value="">Drag Net</option>
                                                        <option value="">Cast Net</option>
                                                        <option value="">Happa</option>
                                                        <option value="">Hand Net</option>
                                                        <option value="">Rod & Line</option>
                                                        <option value="">Hook Line</option>
                                                        <option value="">Other</option>
                                                      
                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group m-5">
                                                                    <button type="button" class="btn text-white shadow float-end" style="background-color:#14B8CF ;" fdprocessedid="kqoon">Add More</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 my-2">
                                                            <table class="table">
                                                                <thead class="text-white" style="background-color: #14B8CF;">
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Type of Fish</th>
                                                                        <th scope="col">Fish Harvest</th>
                                                                        <th scope="col">Number of Fish</th>
                                                                        <th scope="col">Metric Ton</th>
                                                                        <th scope="col">Type of Gear Used</th>
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
                                                                        <td><i class="fa-solid fa-pen-to-square"></i></td>
                                                                        <td><i class="fa-solid fa-trash"></i></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                        <!-- Col-12 -->
                                    </div>

                                    <div class="container-fluid">
                                        <div class="row my-4">
                                            <div class="col-md-12 ">
                                                <div class="card card-success border border-2 border-dark bg-light">


                                                    <!-- /.card-header -->
                                                    <div class="card-body ">
                                                        <!-- form start -->

                                                        <div class="row mt-5">
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Farm Production Capacity</label>
                                                                    <input type="text " name=" " placeholder="Farm Production Capacity " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Farmer Name</label>
                                                                    <input type="text " name=" " placeholder="Farmer Name " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="fw-bold">Farmer CNIC</label>
                                                                    <input id="farmerCNIC" type="text" name="" placeholder="CNIC" class="form-control" autocomplete="off" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Farmer Qualification</label>
                                                                    <input type="text " name=" " placeholder="Farmer Qualification " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Farmer Contact</label>
                                                                    <input type="text " name=" " placeholder="Farmer Contact " class="form-control " autocomplete="off " required=" ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Marital Status </label>
                                                                    <select name=" " id="Marital_Status" class="form-control select2 ">
                                                         <option value="Null">Choose</option>
                                                         <option value="Married"> Married</option>
                                                         <option value="Unmarried"> Unmarried</option>
                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div id="married" class="col-md-4 " style="display:none;">
                                                                <div class="form-group ">
                                                                    <label class="fw-bold ">Number of dependents </label>
                                                                    <input type="text " name=" " placeholder="Number of dependents  " class="form-control " autocomplete="off " required=" ">
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



                                    </div>
                                </div>
                                <div class=" text-end my-3">
                                    <input style="background-color: #14B8CF; " type="submit" class="btn text-white shadow float-right " value="Submit " name="saveUser1 ">
                                </div>
                            </form>
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