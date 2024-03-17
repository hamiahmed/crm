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
                    <div class="card-title text-white">Employee Family Information</div>

                </div>
                <!-- /.card-header -->
                <div class="card-body ">
                    <!-- form start -->
                    <form method="post" id="spouce_form" action="{{ url('family/create_spouce') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Select Employee</label>
                                    <select name="employee_id" class="form-control employee_select" data-placeholder="Search here.." required>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Spouce</label>
                                    <input id="txtSpouce" type="text" name="spouce" placeholder="Spouce" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Name of Spouse</label>
                                    <input id="txtSpouseName" type="text" name="name_of_spouce" placeholder="Name of Spouse" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Upload CNIC Image</label>
                                    <input id="s1" name="spouce_file" type="file" accept="image/*" class="form-control" placeholder="Insert Your Image">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Date of Birth</label>
                                    <input id="dob" name="spouce_dob" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">No of Children</label>
                                    <input id="txtChildren" type="text" name="no_of_children" placeholder="No of Children" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <table class="table" id="myTable3">
                                <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Employee</th>
                                        <th scope="col">Spouse</th>
                                        <th scope="col">Name of Spouse</th>
                                        <th scope="col">CNIC</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">No of Childrens</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 0;
                                    @endphp
                                    @foreach($spouces as $spouce)
                                    @php
                                    $employee_name = $spouce->user->first_name;
                                    $employee_name .= !empty($spouce->user->middle_name) ? ' ' . $spouce->user->middle_name : '';
                                    $employee_name .= !empty($spouce->user->last_name) ? ' ' . $spouce->user->last_name : '';

                                    @endphp
                                    <tr>
                                        <th scope="row">{{++$count}}</th>
                                        <td>{{$employee_name}}</td>
                                        <td> {{ $spouce->spouce }} </td>
                                        <td> {{ $spouce->name_of_spouce }} </td>
                                        <td>@if(!empty($spouce->spouce_file))
                                            <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/cnic_files/').'/'.$spouce->spouce_file }}">View File</a>
                                            @else
                                            No Image Found
                                            @endif
                                        </td>
                                        <td> {{ $spouce->dob }} </td>
                                        <td> {{ $spouce->no_of_children }} </td>
                                        <td class="text-center" onclick="get_spouce('{{$spouce->spou_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td onclick="global_delete('<?= $spouce->spou_id ?>','spouce');"><i class="fa-solid fa-trash"></i></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <form method="post" id="marital_form" action="{{ url('family/create_marital') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Select Employee</label>
                                    <select name="employee_id" class="form-control employee_select" data-placeholder="Search here.." required>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Dependency Name</label>
                                    <input id="txtSpouce" type="text" name="dependency_name" placeholder="Name" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Relationship</label>
                                    <select name="relationship" class="form-control" required>
                                        <option value="">Choose</option>
                                        <option value="son">Son</option>
                                        <option value="daughter">Daughter</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Marital_Status</label>
                                    <select name="marital_status" class="form-control" required>
                                        <option value="">Choose</option>
                                        <option value="married">Married</option>
                                        <option value="un-married">Un-Married</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Date of Birth</label>
                                    <input id="date" name="marital_dob" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser2">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_martial_form();" id="resetmartial">
                                </div>
                            </div>
                    </form>

                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <table class="table" id="myTable2">
                                <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Employee</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Relationship</th>
                                        <th scope="col">Marital-Status</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 0;
                                    @endphp
                                    @foreach($maritals as $marital) @php
                                    $employee_name = $marital->user->first_name;
                                    $employee_name .= !empty($marital->user->middle_name) ? ' ' . $marital->user->middle_name : '';
                                    $employee_name .= !empty($marital->user->last_name) ? ' ' . $marital->user->last_name : '';

                                    @endphp
                                    <tr>
                                        <th scope="row">{{++$count}}</th>
                                        <td>{{$employee_name}}</td>
                                        <td>{{ ucwords($marital->dependency_name) }}</td>
                                        <td>{{ ucwords($marital->relationship) }}</td>
                                        <td> {{ ucwords($marital->marital_status) }} </td>
                                        <td> {{ $marital->dob }} </td>
                                        <td class="text-center" onclick="get_marital('{{$marital->mar_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td onclick="global_delete('<?= $marital->mar_id ?>','marital');"><i class="fa-solid fa-trash"></i></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8 mt-3" style="text-align: right;"></div>
                    <!-- <div class="col-md-1 mt-3" style="text-align: right;">
                                        <div class=" text-end">
                                            <input style="background-color: #14B8CF;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                                        </div>
                                    </div> -->
                    <div class="col-md-1 mt-3" style="text-align: right;">
                        <div class="form-group">
                            <a style="background-color: #14c8A0;" href="qualification" class="btn text-white shadow float-right">Previous</a>
                        </div>
                    </div>
                    <div class="col-md-1 mt-3" style="text-align: right;">
                        <div class="form-group">
                            <a style="background-color: #14c8A0;" href="appointment" class="btn text-white shadow float-right">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- Col-12 -->

<script>
    $(document).ready(function() {
        $('#resetbtn').hide();
    });

    function reset_form() {
        let form = $('#spouce_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('family/create_marital')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_spouce(id) {
        $.ajax({
            type: "get",
            url: "{{url('family/single_spouce')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#spouce_form');
                form.prepend('<input type="hidden" name="id" value="' + response.spou_id + '">');
                form.find("[name='spouce']").val(response.spouce);
                form.find("[name='name_of_spouce']").val(response.name_of_spouce);
                form.find("[name='spouce_dob']").val(getDateForInputMask(response.dob));
                form.find("[name='no_of_children']").val(response.no_of_children);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('family/update_spouce')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }

    $(document).ready(function() {
        $('#resetmartial').hide();
    });


    function reset_martial_form() {
        let form = $('#spouce_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser2']").val('Submit');
        let url = "{{url('family/create_spouce')}}";
        form.attr('action', url);
        $('#resetmartial').hide();
    }

    function get_marital(id) {
        $.ajax({
            type: "get",
            url: "{{url('family/single_marital')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#marital_form');
                form.prepend('<input type="hidden" name="id" value="' + response.mar_id + '">');
                form.find("[name='dependency_name']").val(response.dependency_name);
                form.find("[name='relationship']").val(response.relationship);
                form.find("[name='marital_status']").val(response.marital_status);
                form.find("[name='marital_dob']").val(getDateForInputMask(response.dob));
                form.find("[name='saveUser2']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetmartial').show();
                let url = "{{url('family/update_marital')}}";
                form.attr('action', url);
                $('html, body').animate({
                    // scrollTop: 10
                }, 'medium');
            }
        });
    }
</script>

@endsection