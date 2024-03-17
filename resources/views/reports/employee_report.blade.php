@extends('layouts.master')
@section('content')

<style>
    .dataTables_wrapper .dataTables_filter input {
        margin-bottom: 10px;
        padding: 10px 100px;
    }
</style>

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
                    <div class="card-title">Employee Basic Information Report</div>
                </div>
                <!-- /.card-header -->
                <div class="card-body bg-light">
                    <!-- form start -->
                    <div class="row mt-3">
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <table class="table" id="myTable2">
                                    <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">CNIC</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $count = 0;
                                        @endphp
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ ++$count }}</td>
                                            <td></td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email_address }}</td>
                                            <td>{{ $user->cnic }}</td>
                                            <td>{{ $user->current_address }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->mobile_number }}</td>
                                            <td><a style="background-color: #14c8A0;" href="emp_cv/{{ $user->user_id }}" class="btn text-white shadow float-right">Detail</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- Col-12 -->
    </div>
    <!-- row -->
</div>

@endsection