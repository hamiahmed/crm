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
        <div class="col-12">

            <div class="card card-success">
                <div style="background-color: #14B8CF;" class="card-header  text-white fw-bold">
                    <div class="card-title">Employee Promotions</div>
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <form method="post" id="promotion_form" action="{{ url('promotion/create') }}" enctype="multipart/form-data">
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
                                    <label class="fw-bold"> From Designation</label>
                                    <select name="from_designation" id="Select-DDLDesignation" class="form-control select2" data-placeholder="Choose">
                                        <option value="">Choose</option>
                                        @foreach ($designations as $designation)
                                        <option value="{{ $designation->designation_id }}">{{ $designation->designation_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">To Designation</label>
                                    <select name="to_designation" id="Select-bps" class="form-control select2" data-placeholder="Choose">
                                        <option value="">Choose</option>
                                        @foreach ($designations as $designation)
                                        <option value="{{ $designation->designation_id }}">{{ $designation->designation_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">From BPS</label>
                                    <select name="from_bps" id="from_bps" class="form-control select2" data-placeholder="Choose">
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
                                    <label class="fw-bold">To BPS</label>
                                    <select name="to_bps" id="to_bps" class="form-control select2" data-placeholder="Choose">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Promotion Date</label>
                                    <input id="date" name="promotion_date" class="form-control" placeholder="01-01-2023" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Promotion Number</label>
                                    <input id="txtPromotionNo" type="text" name="promotion_number" placeholder="Promotion Number" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Department</label>
                                    <input id="txtDepartment" type="text" name="department" placeholder="Department" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Acting</label>
                                    <select class="form-control" name="acting">
                                        <option>Choose</option>
                                        <option value="regular">Regular</option>
                                        <option value="ops">OPS</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="fw-bold">Notification File</label>
                                        <input type="file" name="notification_file" accept="image/*" class="form-control" id="s1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Remarks</label>
                                    <input id="txtRemarks" type="text" name="remarks" placeholder="Remarks" class="form-control" autocomplete="off" required>
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
                                                <th scope="col">From Designation</th>
                                                <th scope="col">To Designation</th>
                                                <th scope="col">From BPS</th>
                                                <th scope="col">To BPS</th>
                                                <th scope="col">Promotion Date</th>
                                                <th scope="col">Promotion Number</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Notification File</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($promotions as $promotion)
                                            @php
                                            $employee_name = $promotion->user->first_name;
                                            $employee_name .= !empty($promotion->user->middle_name) ? ' ' . $promotion->user->middle_name : '';
                                            $employee_name .= !empty($promotion->user->last_name) ? ' ' . $promotion->user->last_name : '';
                                            $to_designation = !empty($promotion->toDesignation->designation_name) ? ' ' . $promotion->toDesignation->designation_name:'';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$promotion->fromDesignation->designation_name}}</td>
                                                <td>{{$promotion->toDesignation->designation_name}}</td>
                                                <td>{{$promotion->from_bps}}</td>
                                                <td>{{$promotion->tom_bps}}</td>
                                                <td>{{$promotion->promotion_date}}</td>
                                                <td>{{$promotion->promotion_number}}</td>
                                                <td>{{$promotion->department}}</td>
                                                <td>@if(!empty($promotion->order_file))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/promotions_files/').'/'.$promotion->notification_file }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_promotion('{{$promotion->pro_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $promotion->pro_id ?>','promotion');"><i class="fa-solid fa-trash"></i></td>
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
                                <input style="background-color: #14B8CF;" type="submit" class="btn text-white float-right shadow" value="Submit" name="saveUser1">
                            </div> -->
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('training') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('transfer') }}" class="btn text-white shadow float-right">Next</a>
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
        let form = $('#promotion_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('promotion_form/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_promotion(id) {

        $.ajax({
            type: "get",
            url: "{{url('promotion/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#promotion_form');
                form.prepend('<input type="hidden" name="id" value="' + response.pro_id + '">');
                form.find("[name='serv_status']").val(response.serv_status);
                form.find("[name='from_designation']").val(response.from_designation.designation_id);
                form.find("[name='from_designation']").trigger('change');
                form.find("[name='to_designation']").val(response.to_designation.designation_id);
                form.find("[name='to_designation']").trigger('change');
                form.find("[name='from_bps']").val(response.from_bps);
                form.find("[name='from_bps']").trigger('change');
                form.find("[name='to_bps']").val(response.to_bps);
                form.find("[name='to_bps']").trigger('change');
                form.find("[name='promotion_date']").val(getDateForInputMask(response.promotion_date));
                form.find("[name='promotion_number']").val(response.promotion_number);
                form.find("[name='department']").val(response.department);
                form.find("[name='acting']").val(response.acting);
                form.find("[name='remarks']").val(response.remarks);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('promotion/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>
@endsection