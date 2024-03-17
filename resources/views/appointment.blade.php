@extends('layouts.master')

@section('content')
<div class="container-fluid ">
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
    <div class="row my-4 ">
        <!-- left column -->
        <div class="col-md-12 ">
            <div class="card card-success">
                <div style="background-color: #14B8CF; " class="card-header text-white fw-bold">
                    <div class="card-title text-white ">Employee Initial Appointment</div>
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-light ">
                    <!-- form start -->
                    <form method="post" id="appointment_form" action="{{ url('appointment/create') }}" enctype="multipart/form-data">
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

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label class="fw-bold ">Reporting Date</label>
                                    <input id="date" name="reporting_date" class="form-control " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Service Status</label>
                                    <input id="txtServiceStatus " type="text " name="service_status" placeholder="Service Status " class="form-control " autocomplete="off " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Appointment Date</label>
                                    <input id="dob" name="appointment_date" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Age of Retirement</label>
                                    <input id="txtRetirement " type="text " name="age_of_retirement" placeholder="Age of Retirement " class="form-control " autocomplete="off " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Cader/ Service Group</label>
                                    <input id="txtCader " type="text " name="cader_service_group" placeholder="Cader/ Service Group " class="form-control " autocomplete="off " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Department </label>
                                    <input id="txtDepartment " type="text " name="department" placeholder="Department " class="form-control " autocomplete="off " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group ">
                                    <label class="fw-bold ">Appointment Through</label>
                                    <input id="txtAppointmentThrough " type="text " name="appointment_through" placeholder="Appointment Through " class="form-control " autocomplete="off " required=" ">
                                </div>
                            </div>
                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <table class="table" id="myTable2">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">Reporting Date</th>
                                                <th scope="col">Service Status</th>
                                                <th scope="col">Appointment Date</th>
                                                <th scope="col">Age of Retirement</th>
                                                <th scope="col">Cader/ Service Group</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Appointment Through</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($appointments as $appointment)
                                            @php
                                            $employee_name = $appointment->user->first_name;
                                            $employee_name .= !empty($appointment->user->middle_name) ? ' ' . $appointment->user->middle_name : '';
                                            $employee_name .= !empty($appointment->user->last_name) ? ' ' . $appointment->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$appointment->reporting_date}}</td>
                                                <td>{{$appointment->service_status}}</td>
                                                <td>{{$appointment->appointment_date}}</td>
                                                <td>{{$appointment->age_of_retirement}}</td>
                                                <td>{{$appointment->cader_service_group}}</td>
                                                <td>{{$appointment->department}}</td>
                                                <td>{{$appointment->appointment_through}}</td>
                                                <td class="text-center" onclick="get_appointment('{{$appointment->app_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $appointment->app_id ?>','appointment');"><i class="fa-solid fa-trash"></i></td>
                                            </tr>
                                            @php
                                            $count++;
                                            @endphp
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-8 "></div>
                            <div class="col-md-8 "></div>
                            <!-- <div class="col-md-1 mt-3 " style="text-align: right; ">
                                <div class="form-group ">
                                    <button type="submit " style="background-color: #14B8CF; " class="btn text-white shadow float-right ">Submit</button>
                                </div>
                            </div> -->
                            <div class="col-md-1 mt-3 " style="text-align: right; ">
                                <div class="form-group ">
                                    <a style="background-color: #14c8A0; " href="{{ url('family') }}" class="btn text-white shadow float-right ">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3 " style="text-align: right; ">
                                <div class="form-group ">
                                    <a style="background-color: #14c8A0; " href="{{ url('service') }}" class="btn text-white shadow float-right ">Next</a>
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
        let form = $('#appointment_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('appointment/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_appointment(id) {
        $.ajax({
            type: "get",
            url: "{{url('appointment/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#appointment_form');
                form.prepend('<input type="hidden" name="id" value="' + response.app_id + '">');
                form.find("[name='reporting_date']").val(getDateForInputMask(response.reporting_date));
                form.find("[name='service_status']").val(response.service_status);
                form.find("[name='appointment_date']").val(getDateForInputMask(response.appointment_date));
                form.find("[name='age_of_retirement']").val(response.age_of_retirement);
                form.find("[name='cader_service_group']").val(response.cader_service_group);
                form.find("[name='department']").val(response.department);
                form.find("[name='appointment_through']").val(response.appointment_through);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('appointment/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>

@endsection