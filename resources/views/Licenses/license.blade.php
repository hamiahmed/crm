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
                        <div class="card-title text-white">{{ $title }}</div>
                    </div>
                    <br>

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="row mt-5">
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
                                        <label class="fw-bold">License No</label>
                                        <input id="mName" type="text" name="" placeholder="License No" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">License Fee</label>
                                        <input id="mName" type="text" name="" placeholder="License Fee" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Name of License Holder</label>
                                        <input id="lName" type="text" name="" placeholder="Name of License Holder" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">CNIC</label>
                                        <input id="txtCNIC" type="text" name="" placeholder="CNIC" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Contact Number</label>
                                        <input id="cNo" type="text" name="" placeholder="Contact Number" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Address</label>
                                        <input id="email" type="Email" name="" placeholder="Address" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Date of Issue</label>
                                        <input id="issuedate" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Date of Expiry</label>
                                        <input id="expirydate" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Area</label>
                                        <input id="email" type="Email" name="" placeholder="Area" class="form-control" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">Water Bodies</label>
                                        <select name="" id="Select-DDLwaterbody" class="form-control select2" required>
                                            <option value="">Choose</option>
                                            <option value="">Dam</option>
                                            <option value="">Rivers</option>
                                            <option value="">Streams</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="form-group m-5">
                                    <button type="button" class="btn text-white shadow float-right" style="background-color:#14B8CF ;"><i class="fa-solid fa-plus"></i></button>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <table class="table">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">District</th>
                                                <th scope="col">N0#</th>
                                                <th scope="col">Fee</th>
                                                <th scope="col">Holder Name</th>
                                                <th scope="col">Issue Date</th>
                                                <th scope="col">Expiry Date</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Water Body</th>
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

                <div class=" text-end my-3">
                    <input style="background-color: #14B8CF; " type="submit" class="btn text-white shadow float-right " value="Submit " name="saveUser1 ">
                </div>
                </form>
            </div>
        </div>
        <!-- Col-12 -->
</div>

<!-- Col-12 -->
</div>
<script>
        $(document).ready(function() {
            $("#issuedate").inputmask("99-99-9999", {
                "clearIncomplete": true
            });
            $("#expirydate").inputmask("99-99-9999", {
                "clearIncomplete": true
            });
            $("#txtCNIC").inputmask("99999-9999999-9", {
                "clearIncomplete": true
            });
            $('#issuedate').datepicker({
                uiLibrary: 'bootstrap5',
                format: 'dd/mm/yyyy'
            });
            $('#expirydate').datepicker({
                uiLibrary: 'bootstrap5',
                format: 'dd/mm/yyyy'
            });
        });
    </script>


    </div>
    <script>
        $(document).ready(function() {
            $("harvest").inputmask("99-99-9999", {
                "clearIncomplete": true
            });
            $("#farmerCNIC").inputmask("99999-9999999-9", {
                "clearIncomplete": true
            });
            $('harvest').datepicker({
                uiLibrary: 'bootstrap5',
                format: 'dd/mm/yyyy'
            });
        });
    </script>

@endsection