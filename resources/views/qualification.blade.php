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

        <div class="col-md-12">

            <div class="card card-success bg-light">
                <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                    <div class="card-title">Employee Qualification</div>
                </div>
                <br>

                <!-- /.card-header -->
                <div class="card-body">
                    <!-- form start -->
                    <form method="post" id="qualification_form" action="{{ url('qualification/create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Select Employee</label>
                                    <select name="employee_id" class="form-control employee_select" required data-placeholder="Search here..">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Qualification</label>
                                    <input id="txtQualification" type="text" name="qualification" placeholder="Qualification" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Grade/Division</label>
                                    <input id="txtGrade" type="text" name="grade_division" placeholder="Grade/Division" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Passing Year of Degree</label>
                                    <input id="txtPassingYear" type="text" name="degree_passing_year" placeholder="Passing Year of Degree " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Last Institute</label>
                                    <input id="txtLastInstitute" type="text" name="last_institute" placeholder="Last Institute" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Institute Address</label>
                                    <input id="txtInstituteAddress" type="text" name="institute_address" placeholder="Institute Address " class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Major Subject</label>
                                    <input id="txtMajorSubjects" type="text" name="major_subject" placeholder="Major Subject" class="form-control" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="fw-bold">Remarks</label>
                                    <textarea rows="1" class="form-control" name="Remarks"></textarea>

                                </div>
                            </div>
                            <!-- <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" name="degree" id="s1">
                                        <label class="custom-file-label" for="customFile">Degree </label>
                                        <span id="DegreeFile" class="text-danger"></span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fw-bold">Upload Degree Image</label>
                                    <input id="s1" name="degree" type="file" accept="image/*" class="form-control" placeholder="Insert Your Image">
                                </div>
                            </div>
                            <div class="col-md-4 col-4 mt-4">
                                <div class="form-group">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn btn-block text-white shadow float-right" value="Submit" name="saveUser1">
                                    <input style="background-color: #14B8CF;display: none;" type="reset" class="btn btn-block text-white shadow float-right" value="Reset" onclick="reset_form();" id="resetbtn">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <table class="table" id="myTable2">
                                        <thead class="text-white px-2" style="background-color: #14B8CF; ">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">Qualification</th>
                                                <th scope="col">Grade/Division</th>
                                                <th scope="col">Passing Year of Degree</th>
                                                <th scope="col">Last Institute</th>
                                                <th scope="col">Major Subject</th>
                                                <th scope="col">Degree File</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count = 0;
                                            @endphp
                                            @foreach($qualifications as $qualification)
                                            @php
                                            $employee_name  = $qualification->user->first_name;
                                            $employee_name .= !empty($qualification->user->middle_name) ? ' ' . $qualification->user->middle_name : '';
                                            $employee_name .= !empty($qualification->user->last_name) ? ' ' . $qualification->user->last_name : '';
                                            @endphp
                                            <tr>
                                                <th scope="row">{{++$count}}</th>
                                                <td>{{$employee_name}}</td>
                                                <td>{{$qualification->qualification}}</td>
                                                <td>{{$qualification->grade_division}}</td>
                                                <td>{{$qualification->degree_passing_year}}</td>
                                                <td>{{$qualification->last_institute}}</td>
                                                <td>{{$qualification->major_subject}}</td>
                                                <td>@if(!empty($qualification->degree))
                                                    <a class="btn btn-sm btn-info text-white" target="_blank" href="{{ url('../storage/app/user_degrees/'.$qualification->degree) }}">View File</a>
                                                    @else
                                                    No Image Found
                                                    @endif
                                                </td>
                                                <td class="text-center" onclick="get_qualification('{{$qualification->qul_id}}')"><i class="fa-solid fa-pen-to-square"></i></td>
                                                <td onclick="global_delete('<?= $qualification->qul_id ?>','qualification');" class="text-center"><i class="fa-solid fa-trash"></i></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-8"></div>
                            <!-- <div class="col-md-1 mt-3">
                                <div class=" text-end">
                                    <input style="background-color: #14B8CF;" type="submit" class="btn text-white shadow float-right" value="Submit" name="saveUser1">
                                </div>
                            </div> -->
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('information') }}" class="btn text-white shadow float-right">Previous</a>
                                </div>
                            </div>
                            <div class="col-md-1 mt-3" style="text-align: right;">
                                <div class="form-group">
                                    <a style="background-color: #14c8A0;" href="{{ url('family') }}" class="btn text-white shadow float-right">Next</a>
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
        let form = $('#qualification_form');
        form.find("[name='employee_id']").val(0);
        form.find("[name='employee_id']").trigger('change');
        form.find("[name='id']").remove();
        form.find("[name='saveUser1']").val('Submit');
        let url = "{{url('qualification/create')}}";
        form.attr('action', url);
        $('#resetbtn').hide();
    }

    function get_qualification(id) {
        $.ajax({
            type: "get",
            url: "{{url('qualification/single')}}",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                let form = $('#qualification_form');
                form.prepend('<input type="hidden" name="id" value="' + response.qul_id + '">');
                form.find("[name='qualification']").val(response.qualification);
                form.find("[name='grade_division']").val(response.grade_division);
                form.find("[name='degree_passing_year']").val(response.degree_passing_year);
                form.find("[name='last_institute']").val(response.last_institute);
                form.find("[name='institute_address']").val(response.institute_address);
                form.find("[name='major_subject']").val(response.major_subject);
                form.find("[name='Remarks']").val(response.Remarks);
                form.find("[name='saveUser1']").val('Update');
                form.find("[name='employee_id']").append(new Option(response.employee_name, response.employee_id, true, true));
                form.find("[name='employee_id']").trigger('change');
                $('#resetbtn').show();
                let url = "{{url('qualification/update')}}";
                form.attr('action', url);
                $('html, body').animate({
                    scrollTop: 0
                }, 'medium');
            }
        });
    }
</script>
@endsection