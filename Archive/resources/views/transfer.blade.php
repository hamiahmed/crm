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
                    <div class="card-title">Employee Transfer</div>

                </div>

                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <form method="post" id="transfer_form" action="{{ url('transfer/create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row ">
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
                                    <label class="fw-bold">Transfer Order Number </label>
                                    <input id="txtTransferOrderNumber" type="text" name="order_number" placeholder="Transfer Order Number" class="form-control" autocomplete="off" required="">
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
                                    <label class="fw-bold">From Department</label>
                                    <input id="txtFromDepartment" type="text" name="from_department" placeholder="From Deparment" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">To Department</label>
                                    <input id="txtToProject" type="text" name="to_department" placeholder="To Department" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">From Station</label>
                                    <input id="txtFromStation" type="text" name="from_station" placeholder="From  Station" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">To Station</label>
                                    <input id="txtToStation" type="text" name="to_station" placeholder="To Station" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Worked From</label>
                                    <input id="txtWorkedFrom" type="text" name="worked_from" placeholder="Worked From" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                    <label class="fw-bold">Office order file </label>
                                        <input type="file" name="order_file" accept="image/*" class="form-control" id="s1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Transfer Date</label>
                                    <input id="date" type="text" name="transfer_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <table class="table" id="myTable2">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">Transfer Order Number</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">BPS</th>
                                                <th scope="col">From Station</th>
                                                <th scope="col">To Station</th>
                                                <th scope="col">Office Order File</th>
                                                <th scope="col">Transfer Date</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($transfers as $transfer)
                                            @php
                                            $employee_name = $transfer->user->first_name;
                                            $employee_name .= !empty($transfer->user->middle_name) ? ' ' . $transfer->user->middle_name : '';
                                            $employee_name .= !empty($transfer->user->last_name) ? ' ' . $transfer->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$transfer->order_number}}</td>
                                                <td>{{$transfer->designation->designation_name}}</td>
                                                <td>{{$transfer->bps_id}}</td>
                                                <td>{{$transfer->from_station}}</td>
                                                <td>{{$transfer->to_station}}</td>
                                                <td>@if(!empty($transfer->order_file))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/transfer_files/').'/'.$transfer->order_file }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td>{{$transfer->transfer_date}}</td>
                                                <td class="text-center" onclick="get_transfer('{{$transfer->tra_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $transfer->tra_id ?>','transfer');"><i class="fa-solid fa-trash"></i></td>
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
                                    <a style="background-color: #14c8A0;" href="{{ url('promotion') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('acr') }}" class="btn text-white shadow float-right">Next</a>
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
        let form = $('#transfer_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('transfer/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_transfer(id) {

        $.ajax({
            type: "get",
            url: "{{url('transfer/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#transfer_form');
                form.prepend('<input type="hidden" name="id" value="' + response.tra_id + '">');
                form.find("[name='order_number']").val(response.order_number);
                form.find("[name='designation_id']").val(response.designation_id);
                form.find("[name='designation_id']").trigger('change');
                form.find("[name='bps_id']").val(response.bps_id);
                form.find("[name='bps_id']").trigger('change');
                form.find("[name='transfer_date']").val(getDateForInputMask(response.transfer_date));
                form.find("[name='from_department']").val(response.from_department);
                form.find("[name='to_department']").val(response.to_department);
                form.find("[name='from_station']").val(response.from_station);
                form.find("[name='to_station']").val(response.to_station);
                form.find("[name='worked_from']").val(response.worked_from);
                form.find("[name='to_station']").val(response.to_station);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('transfer/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>

@endsection