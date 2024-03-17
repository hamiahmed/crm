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
                    <div class="card-title text-white">Leave</div>

                </div>
                <br>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- form start -->
                    <form method="post" id="leave_form" action="{{ url('leave/create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
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
                                    <label class="fw-bold">Debatable to Leave Account </label>
                                    <select name="dep_leave_account" id="Select-bps" class="form-control select2" data-placeholder="Choose">
                                        @foreach ($deb_leaves as $deb_leave)
                                        <option value="{{ $deb_leave->e_id }}">{{ $deb_leave->e_title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Not Debatable on Leave Account</label>
                                    <select name="not_dep_leave_account" id="Select-DDLDesignation" class="form-control select2" data-placeholder="Choose">
                                        @foreach ($not_deb_leaves as $not_deb_leave)
                                        <option value="{{ $not_deb_leave->e_id }}">{{ $not_deb_leave->e_title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile">Copy Attachment </label>
                                        <input type="file" name="dep_file" accept="image/*" class="form-control" id="s1">
                                    </div>
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
                                                <th scope="col">Debatable to Leave Account</th>
                                                <th scope="col">Not Debatable on Leave Account</th>
                                                <th scope="col">Leave File</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 0;
                                            @endphp
                                            @foreach($leaves as $leave)
                                            @php
                                            $employee_name = $leave->user->first_name;
                                            $employee_name .= !empty($leave->user->middle_name) ? ' ' . $leave->user->middle_name : '';
                                            $employee_name .= !empty($leave->user->last_name) ? ' ' . $leave->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{++$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$leave->dep_leaves->e_title}}</td>
                                                <td>{{$leave->not_dep_leaves->e_title}}</td>
                                                <td>@if(!empty($leave->dep_file))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/leave_files/').'/'.$leave->dep_file }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_leave('{{$leave->leave_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $leave->leave_id ?>','leave_id','tbl_leave')"><i class="fa-solid fa-trash"></i></td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-9"></div>
                            <!-- <div class="col-md-1 mt-3">
                                <input style="background-color: #14B8CF;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                            </div> -->
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('acr') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
        let form = $('#leave_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('leave/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_leave(id) {

        $.ajax({
            type: "get",
            url: "{{url('leave/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#leave_form');
                form.prepend('<input type="hidden" name="id" value="' + response.leave_id + '">');
                form.find("[name='not_dep_leave_account']").val(response.not_dep_leave_account);
                form.find("[name='not_dep_leave_account']").trigger('change');
                form.find("[name='dep_leave_account']").val(response.dep_leave_account);
                form.find("[name='dep_leave_account']").trigger('change');
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('leave/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>
@endsection