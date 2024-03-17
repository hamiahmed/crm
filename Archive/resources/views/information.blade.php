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
                    <div class="card-title text-white">Employee Personal Information</div>
                </div>
                <br>
                <!-- /.card-header -->
                <div class="card-body ">
                    <!-- form start -->
                    <form method="post" id="user_form" action="{{ url('information/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Upload Image</label>
                                    <input id="file1" name="user_img" onchange="document.getElementById('log1').src = window.URL.createObjectURL(this.files[0])" type="file" accept="image/*" class="form-control" style="overflow: hidden;" placeholder="Insert Your Image">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 ">
                                <div class="form-group mr-3 mt-0 mb-3">
                                    <!-- @if($user['user_img'])
                                    <img id="log1" class="shadow" style="border: 1px #14B8CF; border-radius: 10%; margin-top: -4%" src="{{url('../storage/app/images/user_images/').'/'.$user['user_img']}}" width="120px;" height="130px">
                                    @else
                                    <img id="log1" class="shadow" style="border: 1px #14B8CF; border-radius: 10%; margin-top: -4%" src="{{url('../storage/app/images/download.png')}}" width="120px;" height="130px">
                                    @endif -->

                                    <img id="log1" class="shadow" src="{{url('../storage/app/images/download.png')}}" style="border: 1px #14B8CF; border-radius: 10%; margin-top: -4%" width="150px;" height="150px">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">First Name</label>
                                    <input id="txtFirstName" type="text" name="first_name" placeholder="First Name" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Middle Name</label>
                                    <input id="txtMiddleName" type="text" name="middle_name" placeholder="Middle Name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Last Name</label>
                                    <input id="txtLastName" type="text" name="last_name" placeholder="Last Name" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Father Name</label>
                                    <input id="txtFatherName" type="text" name="father_name" placeholder="Father Name" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">CNIC</label>
                                    <input id="nic" type="text" name="cnic" placeholder="CNIC" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Email address</label>
                                    <input id="txtEmail" type="Email" name="email_address" placeholder="Email" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Permanent Address</label>
                                    <input id="txtParmanentAddress" type="text" name="permanent_address" placeholder="Permanent Address" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Current Address</label>
                                    <input id="txtCurrentAddress" type="text" name="current_address" placeholder="Current Address" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">City</label>
                                    <input id="txtCity" type="text" name="city" placeholder="City" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Postal Address</label>
                                    <input id="txtPostalAddress" type="text" name="postal_address" placeholder="Postal Address" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Mobile Number</label>
                                    <input type="text" id="mobile" name="mobile_number" placeholder="Mobile Number" class="form-control mobile" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Office Phone Number</label>
                                    <input type="text" id="office-phone" name="office_phone_number" placeholder="Office Number" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Alternate Number</label>
                                    <input type="text" id="alternate" name="alternate_number" placeholder="Alternate Number" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Date of Birth</label>
                                    <input id="dob" class="form-control" name="dob" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Religion</label>
                                    <input id="txtReligion" type="text" name="religion" placeholder="Religion" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Gender</label>
                                    <select name="gender" id="Select-DDLGender" class="form-control select2" required>
                                        <option>Choose</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="transgender">Transgender</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Designation</label>
                                    <select name="designation_id" id="Select-DDLDesignation" class="form-control select2" data-placeholder="Choose" required>
                                        @foreach ($designations as $designation)
                                        <option value="{{ $designation->designation_id }}">{{ $designation->designation_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">BPS</label>
                                    <select name="bps_id" id="Select-bps" class="form-control select2" required data-placeholder="Choose" required>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Marital Status</label>
                                    <select name="marital_status" id="Select-DDLMaritalStatus" class="form-control select2" required>
                                        <option>Choose</option>
                                        <option value="married"> Married</option>
                                        <option value="un-married"> Un-married</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">First Entry to service</label>
                                    <input id="txtFirstEntry" type="text" name="first_service_entry" placeholder="First entry to service" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">GPF Number</label>
                                    <input id="GPFNumber" type="text" name="gpf_number" placeholder="GPF Number " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Domicile</label>
                                    <input id="txtDomicile" type="text" name="domicile" placeholder="Domicile " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="fw-bold">Personal Number </label>
                                    <input id="personal_mobile" type="text" name="personal_number" placeholder="Personal Number " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                    <input type="file" name="personal_cv" accept="image/*" class="form-control"id="s1">
                                        <label class="custom-file-label" for="customFile">CV Attachment </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Type</label>
                                    <select name="service_type" class="form-control select2" required>
                                        <option>Choose</option>
                                        <option value="regular">Regular</option>
                                        <option value="contract">Contract</option>
                                        <option value="project">Project</option>
                                        <option value="pay">Pay</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <table class="table" id="myTable2">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Father Name</th>
                                                <th scope="col">CNIC</th>
                                                <th scope="col">Email address</th>
                                                <th scope="col">Current Address</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Mobile Number</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">BPS</th>
                                                <th scope="col">User Photo</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 0;
                                            @endphp
                                            @foreach($personals as $personal)
                                            <tr>
                                                <th scope="row">{{ ++$count }}</th>
                                                <td>{{$personal->first_name.$personal->last_name}}</td>
                                                <td>{{$personal->father_name}}</td>
                                                <td>{{$personal->cnic}}</td>
                                                <td>{{$personal->email_address}}</td>
                                                <td>{{$personal->current_address}}</td>
                                                <td>{{$personal->city}}</td>
                                                <td>{{$personal->mobile_number}}</td>
                                                <td>{{$personal->designation->designation_name}}</td>
                                                <td>{{$personal->bps}}</td>
                                                <td>@if(!empty($personal->user_img))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/user_images/').'/'.$personal->user_img }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_user('{{$personal->user_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $personal->user_id ?>','users');"><i class="fa-solid fa-trash"></i></td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-8 mt-3"></div>
                            <div class="col-md-9 mt-3"></div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn text-white shadow float-right" value="Submit" required>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('qualification') }}" class="btn text-white shadow float-right">Next</a>
                                </div>
                            </div>
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


<script>
    function reset_form() {
        let form = $('#user_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('information/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_user(id) {

        $.ajax({
            type: "get",
            url: "{{url('information/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#user_form');
                form.prepend('<input type="hidden" name="id" value="' + response.user_id + '">');
                form.find("[name='first_name']").val(response.first_name);
                form.find("[name='designation_id']").val(response.designation_id);
                form.find("[name='designation_id']").trigger('change');
                form.find("[name='bps_id']").val(response.bps_id);
                form.find("[name='bps_id']").trigger('change');
                form.find("[name='middle_name']").val(response.middle_name);
                form.find("[name='last_name']").val(response.last_name);
                form.find("[name='father_name']").val(response.father_name);
                form.find("[name='cnic']").val(response.cnic);
                form.find("[name='email_address']").val(response.email_address);
                form.find("[name='permanent_address']").val(response.permanent_address);
                form.find("[name='current_address']").val(response.current_address);
                form.find("[name='city']").val(response.city);
                form.find("[name='current_address']").val(response.current_address);
                form.find("[name='postal_address']").val(response.postal_address);
                form.find("[name='mobile_number']").val(response.mobile_number);
                form.find("[name='office_phone_number']").val(response.office_phone_number);
                form.find("[name='alternate_number']").val(response.alternate_number);
                form.find("[name='dob']").val(response.dob);
                form.find("[name='religion']").val(response.religion);
                form.find("[name='gender']").val(response.gender);
                form.find("[name='gender']").trigger('change');
                form.find("[name='marital_status']").val(response.marital_status);
                form.find("[name='marital_status']").trigger('change');
                form.find("[name='domicile']").val(response.domicile);
                form.find("[name='personal_number']").val(response.personal_number);
                form.find("[name='first_service_entry']").val(response.first_service_entry);
                form.find("[name='service_type']").val(response.service_type);
                form.find("[name='service_type']").trigger('change');
                form.find("[name='gpf_number']").val(response.gpf_number);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('information/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>

@endsection