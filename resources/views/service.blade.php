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
                    <div class="card-title text-white">Employee Service History</div>
                </div>

                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <form method="post" id="service_form" action="{{ url('service/create') }}" enctype="multipart/form-data">
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
                                    <label class="fw-bold">Service Status</label>
                                    <input id="txtServiceStatus" type="text" name="serv_status" placeholder="Service Status" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Designation</label>
                                    <select name="designation_id" id="Select-DDLDesignation" class="form-control select2" data-placeholder="Choose">
                                        @foreach ($designations as $designation)
                                        <option value="{{ $designation->designation_id }}">{{ $designation->designation_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">BPS</label>
                                    <select name="bps_id" id="Select-bps" class="form-control select2" data-placeholder="Choose">
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

                        </div>
                        <div class="row mt-2">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Place of Duty</label>
                                    <input id="txtPlaceOfDuty" type="text" name="place_of_duty" placeholder="Place of Duty" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Station</label>
                                    <input id="txtStation" type="text" name="station" placeholder="Station" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Running Basic Pay</label>
                                    <input id="txtRunningBasicPay" type="text" name="running_basic_pay" placeholder="Running Basic Pay" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-md-4">
                                <!-- <div class="form-group">
                                    <div class="custom-file">

                                        <input type="file" name="office_order_file" class="custom-file-input" id="s1">
                                        <label class="custom-file-label" for="customFile">Copy of Office order </label>
                                        <span id="n1" class="text-danger"></span>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="fw-bold">Office order file</label>
                                    <input type="file" name="office_order_file" id="s1" accept="image/*" class="form-control" placeholder="Insert Your Image">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Joining Date </label>
                                    <input id="date" class="form-control" name="joining_date" autocomplete="off" required="">
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
                                                <th scope="col">Employee</th>
                                                <th scope="col">Service status</th>
                                                <th scope="col">BPS</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">PLace of Duty</th>
                                                <th scope="col">Station</th>
                                                <<th scope="col">Office Order File</th>
                                                    <th scope="col">Update</th>
                                                    <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($services as $service)
                                            @php
                                            $employee_name = $service->user->first_name;
                                            $employee_name .= !empty($service->user->middle_name) ? ' ' . $service->user->middle_name : '';
                                            $employee_name .= !empty($service->user->last_name) ? ' ' . $service->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$service->serv_status}}</td>
                                                <td>{{$service->bps_id}}</td>
                                                <td>{{$service->designation->designation_name}}</td>
                                                <td>{{$service->place_of_duty}}</td>
                                                <td>{{$service->station}}</td>
                                                <td>@if(!empty($service->office_order_file))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/service_files/').'/'.$service->office_order_file }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_service('{{$service->serv_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $service->serv_id ?>','service');"><i class="fa-solid fa-trash"></i></td>
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
                            <!-- <div class="col-md-1 text-end mt-2">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn text-white float-right shadow" value="Submit" name="saveUser1">
                                </div>
                            </div> -->
                            <div class="col-md-2 mt-2" style="float: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('appointment') }}" class="btn text-white shadow float-right">Previous</a>
                                    <a style="background-color: #14c8A0;" href="{{ url('training') }}" class="btn text-white shadow float-right">Next</a>
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
        let form = $('#service_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('service/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_service(id) {

        $.ajax({
            type: "get",
            url: "{{url('service/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#service_form');
                form.prepend('<input type="hidden" name="id" value="' + response.serv_id + '">');
                form.find("[name='serv_status']").val(response.serv_status);
                form.find("[name='designation_id']").val(response.designation_id);
                form.find("[name='designation_id']").trigger('change');
                form.find("[name='bps_id']").val(response.bps_id);
                form.find("[name='bps_id']").trigger('change');
                form.find("[name='place_of_duty']").val(response.place_of_duty);
                form.find("[name='station']").val(response.station);
                form.find("[name='running_basic_pay']").val(response.running_basic_pay);
                form.find("[name='joining_date']").val(getDateForInputMask(response.joining_date));
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('service/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>
@endsection