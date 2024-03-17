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
                    <div class="card-title">ACR</div>
                </div>

                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <form method="post" id="acr_form" action="{{ url('acr/create') }}" enctype="multipart/form-data">
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
                                    <label class="fw-bold">ACR</label>
                                    <input id="txtACR" type="text" name="acr" placeholder="ACR" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">ACR detail</label>
                                    <input id="txtACRDetail" type="text" name="acr_detail" placeholder="ACR Detail" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                    <label class="fw-bold">ACR File </label>
                                        <input type="file" name="acr_file" accept="image/*" class="form-control" id="s1">
                                    </div>
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
                                                <th scope="col">ACR</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">ACR Details</th>
                                                <th scope="col">ACR File</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 1;
                                            @endphp
                                            @foreach($acrs as $acr) @php
                                            $employee_name = $acr->user->first_name;
                                            $employee_name .= !empty($acr->user->middle_name) ? ' ' . $acr->user->middle_name : '';
                                            $employee_name .= !empty($acr->user->last_name) ? ' ' . $acr->user->last_name : '';

                                            @endphp
                                            <tr>
                                                <th scope="row">{{$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$acr->acr}}</td>
                                                <td>{{$acr->acr_detail}}</td>
                                                <td>@if(!empty($acr->acr_file))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{url('../storage/app/acr_files/').'/'.$acr->acr_file }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_acr('{{$acr->acr_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $acr->acr_id ?>','acr');"><i class="fa-solid fa-trash"></i></td>
                                            </tr>

                                        </tbody>
                                        @php
                                        $count++;
                                        @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8"></div>
                            <!-- <div class="col-md-1 mt-3">
                                        <input style="background-color: #14B8CF;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                                    </div> -->
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('transfer') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('leave') }}" class="btn text-white shadow float-right">Next</a>
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
        let form = $('#acr_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('acr/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_acr(id) {

        $.ajax({
            type: "get",
            url: "{{url('acr/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#acr_form');
                form.prepend('<input type="hidden" name="id" value="' + response.acr_id + '">');
                form.find("[name='acr']").val(response.acr);
                form.find("[name='acr_detail']").val(response.acr_detail);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('acr/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>

@endsection