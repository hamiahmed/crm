<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fisheries Department</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/apple-touch-icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/49d698e135.js" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
   
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->

    <script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <style>
        .img-thumbnail {
            width: 100px;
            height: 100px;
            /* Add other styles as needed */
        }

        .employee_select+.select2-container--default .select2-selection--single {
            padding-top: 10px !important;
            padding-bottom: 20px !important;
        }

        .employee_select+.select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .employee_select+.select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 12px;
        }

        .dam_select+.select2-container--default .select2-selection--single {
            padding-top: 10px !important;
            padding-bottom: 20px !important;
        }

        .dam_select+.select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .dam_select+.select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 12px;
        }

        .river_select+.select2-container--default .select2-selection--single {
            padding-top: 10px !important;
            padding-bottom: 20px !important;
        }

        .river_select+.select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .river_select+.select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 12px;
        }

        .stream_select+.select2-container--default .select2-selection--single {
            padding-top: 10px !important;
            padding-bottom: 20px !important;
        }

        .stream_select+.select2-container--default .select2-selection--single .select2-selection__arrow {
            display: none;
        }

        .stream_select+.select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 12px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- sidenav -->
    <div id="mySidenav" class="sidenav" style="background-color: #14B8CF;">

        <a class="dropdown-btn1 mt-5 <?php if (isset($_SESSION['header']) && $_SESSION['header'] == 'hr') echo 'active'; ?>" id="hr" href="#" style="width: 200px; margin-top: 190px !important;"> HR MIS
            <i class="fa fa-caret-down"></i>
        </a>


        <div class="dropdown-container1" style="<?php if (isset($_SESSION['header']) && $_SESSION['header'] == 'hr') echo 'display:block;'; ?>" id="hr-dd">
            @if(checkPermission('read','HR'))
            <a href="{{ url('hr_dashboard') }}" style="background-color: #085283;">HR Dashboard</a>
            @endif
            @if(checkPermission('read','HR'))
            <a href="{{ url('information') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'information') echo 'dropdown_active'; ?>">Personal Info</a>
            @endif
            @if(checkPermission('read','HR'))
            <a href="{{ url('qualification') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'qualification') echo 'dropdown_active'; ?>">Qualification</a>
            @endif
            <!-- <a href="Qualification.html">Qualification</a> -->
            @if(checkPermission('read','HR'))
            <a href="{{ url('family') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'family') echo 'active'; ?>">Family Information</a>
            @endif

            <!-- <a href="familyinfo.html">Family Information</a> -->
            @if(checkPermission('read','HR'))
            <a href="{{ url('appointment') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'appointment') echo 'dropdown_active'; ?>">Initial Appointment</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('service') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'service') echo 'dropdown_active'; ?>">Service History</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('training') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'training') echo 'dropdown_active'; ?>">Training Info</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('promotion') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'promotion') echo 'dropdown_active'; ?>">Promotion info</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('transfer') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'transfer') echo 'dropdown_active'; ?>">Transfer info</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('acr') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'acr') echo 'dropdown_active'; ?>">ACR</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('leave') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'leave') echo 'dropdown_active'; ?>">Leave</a>
            @endif

            @if(checkPermission('read','HR'))
            <a href="{{ url('emp_report') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'emp_report') echo 'dropdown_active'; ?>">Report</a>
            @endif

            <!-- <a href="TrainingInformation.html">Training Info</a> -->
            <!-- <a href="Promotion.html">Promotion info</a> -->
            <!-- <a href="Transfer.html">Transfer info</a>
            <a href="ACR.html">ACR</a>
            <a href="Leave.html">Leave</a> -->
        </div>
        <a href="{{ url('fish_farm') }}" id="kp-fish-farm">KP Fish Farms</a>
        <a class="dropdown-btn" id="water-bodies" style="width: 200px;"> Water Bodies
            <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container" id="water-bodies-dd">

            <a href="{{ url('water_bodies') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'water_bodies') echo 'dropdown_active'; ?>">Add Water Bodies</a>

            <a href="{{ url('dam_detail') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'dam_details') echo 'dropdown_active'; ?>">Dams Details</a>
            <a href="{{ url('river_detail') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'river_details') echo 'dropdown_active'; ?>">Rivers Details</a>
            <a href="{{ url('stream_detail') }}" class="<?php if (isset($_SESSION['page']) && $_SESSION['page'] == 'stream_details') echo 'dropdown_active'; ?>">Streams Details</a>

        </div>

        <a href="{{ url('graphic_report') }}" id="kp-fish-farm">Graphic Report</a>

        <a class="dropdown-btn" id="sr" style="width: 200px;"> Statistics Report
            <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container" id="sr-dd">
            <a href="MonthlyStatistics.html">Monthly Report</a>
            <a href="QuarterlyStatistics.html">Quarter Report</a>
            <a href="annualstatistic.html">Annual Report</a>
        </div>
        <a class="dropdown-btn" id="sr" style="width: 200px;"> Licenses
            <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-container" id="sr-dd">
            <a href="{{ url('general') }}">All kinds of Nets</a>
            <a href="{{ url('fishing_Rod') }}">Fishing Rod</a>
            <a href="{{ url('fishing_line') }}">Fishing Line</a>
            <a href="{{ url('cast_net') }}">Cast Net</a>
            <a href="{{ url('dip_net') }}">Dip Net</a>
            <a href="{{ url('spear_hand') }}">Spear or Hand</a>
            <a href="{{ url('special_license') }}">Special License</a>
            <a href="{{ url('daily_not_trout') }}">daily-non-trout</a>
            <a href="{{ url('daily_trout') }}">daily-trout</a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg" style="background-color:#14B8CF; height: 160px; width: 100%;">
        <div class="container-fluid text-white text-center">
            <div class="row w-100 justify-content-center" style="margin-left: 0.1%;">
                <div class="col-md-2 col-lg-2 col-sm-12"> <img style="margin:auto;" width="160px" src="{{ url('../storage/app/images/finallogo.png') }}" alt=""></div>
                <div class="col-md-8 col-lg-8 col-sm-12 m-auto">
                    <h3 class="fw-bold m-5 text-white text-center h1" style="text-shadow: 0px 6px 15px black;font-family: initial;">Khyber Pakhtunkhwa Fisheries Department</h3>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12"> <img class="logo" width="130px" src="{{ url('../storage/app/images/logo.png') }}" alt=""></div>
            </div>
        </div>
    </nav>
    <!-- sidenav end -->
    <div class="" id="main">
        @yield('content')
    </div>

    <script src="{{ url('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {

        <?php if (session()->has('Error') || session()->has('Success')) { ?>
            setInterval(function() {
                $('.alert').hide();
            }, 3000);
        <?php } ?>

        $('#myTable').DataTable({
            columnDefs: [{
                orderable: false,
                targets: -1
            }]
        });
        $('#myTable2').DataTable();
        $('#myTable3').DataTable();
        $('.select2').select2();
        $('.multiple-select2').select2();
        $('.datepicker').datepicker();
        $('#table-list').DataTable({
            columnDefs: [{
                orderable: false,
                targets: -1,
                className: 'text-center'
            }, {
                orderable: false,
                targets: 0,
                className: 'text-center'
            }]
        });

        $(document).ready(function() {
            $('#Select-DDLDesignation').select2();
        });
    });


    // $(document).ready(function() {
    //     $('#myTable').DataTable({
    //         dom: 'Bfrtip',
    //         buttons: [
    //             'excel'
    //         ]
    //     });
    // });


    function showPassword(obj) {
        let x = $(obj).closest('div').find('input');
        if (x[0].type === "password") {
            x[0].type = "text";
        } else {
            x[0].type = "password";
        }
    }

    function checkValidation() {
        return true;
    }

    function global_delete(id, name) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('global_delete') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        name: name
                    },
                    dataType: "json",
                    success: function(response) {
                        location.reload();
                    }
                });
            }
        })
    }

    $(document).ready(function() {

        $('#Select-DDLDesignation').select2();
        $('#Select-DDLDesignation').val('Chooose').trigger('change');

        $('#Select-bps').select2();
        $('#Select-bps').val('Chooose').trigger('change');

        $('#from_bps').select2();
        $('#from_bps').val('Chooose').trigger('change');

        $('#to_bps').select2();
        $('#to_bps').val('Chooose').trigger('change');

        $("#date").inputmask("99-99-9999", {
            "clearIncomplete": true
        });

        $('#date').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd/mm/yyyy'
        });

        $("#dob").inputmask("99-99-9999", {
            "clearIncomplete": true
        });
        $('#dob').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'dd/mm/yyyy'
        });

        $("#nic").inputmask("99999-9999999-9", {
            "clearIncomplete": true
        });

        $("#mobile").inputmask("99999999999", {
            "clearIncomplete": true
        });

        $("#office-phone").inputmask("9999999999", {
            "clearIncomplete": true
        });

        $("#alternate").inputmask("99999999999", {
            "clearIncomplete": true
        });

        $("#personal_mobile").inputmask("99999999999", {
            "clearIncomplete": true
        });

        $('.employee_select').select2({
            ajax: {
                url: '{{url("get-single-employee")}}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        employee_name: params.term, // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data,
                    };
                },
                cache: true,
            },
            minimumInputLength: 1,
        });

        $('.dam_select').select2({
            ajax: {
                url: '{{url("single_dam")}}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        name: params.term, // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data,
                    };
                },
                cache: true,
            },
            minimumInputLength: 1,
        });

        $('.river_select').select2({
            ajax: {
                url: '{{url("single_river")}}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        name: params.term, // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data,
                    };
                },
                cache: true,
            },
            minimumInputLength: 1,
        });


        $('.stream_select').select2({
            ajax: {
                url: '{{url("single_stream")}}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        name: params.term, // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data,
                    };
                },
                cache: true,
            },
            minimumInputLength: 1,
        });


    });

    function getDateForInputMask(date) {
        let formattedDate = new Date(date);
        let day = formattedDate.getDate().toString().padStart(2, '0');
        let month = (formattedDate.getMonth() + 1).toString().padStart(2, '0');
        let year = formattedDate.getFullYear();
        let formattedDateString = day + '-' + month + '-' + year;
        return formattedDateString;
    }
</script>