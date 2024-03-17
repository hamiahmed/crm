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
        <!-- left column -->
        <div class="col-md-12">
            <div class="card card-success">
                <div style="background-color: #14B8CF;" class="card-header  text-white fw-bold">
                    <div class="card-title text-white">Employee Training Information</div>
                </div>

                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <form method="post" id="training_form" action="{{ url('training/create') }}" enctype="multipart/form-data">
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
                                    <label class="fw-bold">Training Serial Number</label>
                                    <input id="txtTrainingSerialNumber" type="text" name="training_name" placeholder="Training Serial Number" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Training Name</label>
                                    <input id="txtTrainingName" type="text" name="serial_number" placeholder="Training Name" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Institute</label>
                                    <input id="txtInstitute" type="text" name="Institute" placeholder="Institute" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">City</label>
                                    <input id="txtCity" type="text" name="city" placeholder="City" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Institute Address</label>
                                    <input id="txtInstituteAddress" type="text" name="institute_address" placeholder="Institute Address" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Oblige Sponsor</label>
                                    <input id="txtObligeSponsor" type="text" name="oblige_sponsor" placeholder="Oblige Sponsor" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">From</label>
                                    <input id="date" type="text" name="from_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">To</label>
                                    <input id="dob" type="text" name="to_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Duration </label>
                                    <input id="txtDuration" type="text" name="duration" placeholder="Duration" class="form-control" autocomplete="off" required="">
                                </div>

                            </div>
                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <table class="table" id="myTable2">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">Training Serial Number</th>
                                                <th scope="col">Training Name</th>
                                                <th scope="col">Institute</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Institute Address</th>
                                                <th scope="col">From Date</th>
                                                <th scope="col">To Date</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($trainings as $training)
                                            @php
                                            $employee_name = $training->user->first_name;
                                            $employee_name .= !empty($training->user->middle_name) ? ' ' . $training->user->middle_name : '';
                                            $employee_name .= !empty($training->user->last_name) ? ' ' . $training->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$training->serial_number}}</td>
                                                <td>{{$training->training_name}}</td>
                                                <td>{{$training->Institute}}</td>
                                                <td>{{$training->city}}</td>
                                                <td>{{$training->institute_address}}</td>
                                                <td>{{$training->from_date}}</td>
                                                <td>{{$training->to_date}}</td>
                                                <td class="text-center" onclick="get_training('{{$training->t_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $training->t_id ?>','training');"><i class="fa-solid fa-trash"></i></td>
                                            </tr>
                                            @php
                                            $count++;
                                            @endphp
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8"></div>
                            <!-- <div class="col-md-1 text-end mt-3">
                                        <div class="form-group">
                                            <input style="background-color: #14B8CF;" type="submit" class="btn text-white float-right shadow" value="Submit" name="saveUser1">
                                        </div>
                                    </div> -->
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('service') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('promotion') }}" class="btn text-white shadow float-right">Next</a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- Col-12 -->
    </div>
    <!-- row -->
</div>

<script>
    function reset_form() {
        let form = $('#training_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('training/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_training(id) {

        $.ajax({
            type: "get",
            url: "{{url('training/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#training_form');
                form.prepend('<input type="hidden" name="id" value="' + response.t_id + '">');
                form.find("[name='training_name']").val(response.training_name);
                form.find("[name='serial_number']").val(response.serial_number);
                form.find("[name='Institute']").val(response.Institute);
                form.find("[name='city']").val(response.city);
                form.find("[name='institute_address']").val(response.institute_address);
                form.find("[name='oblige_sponsor']").val(response.oblige_sponsor);
                form.find("[name='institute_address']").val(response.institute_address);
                form.find("[name='institute_address']").val(response.institute_address);
                form.find("[name='duration']").val(response.duration);
                form.find("[name='from_date']").val(getDateForInputMask(response.from_date));
                form.find("[name='to_date']").val(getDateForInputMask(response.to_date));
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('training/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>
@endsection