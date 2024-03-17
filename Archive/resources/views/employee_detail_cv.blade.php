@extends('layouts.master')
@section('content')
    <!-- Header -->
    <section>
        <div class="container-fluid" style="padding:0px">

            <div class="well well-header change-border-color">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-3 form-control-static change-form-control-static">
                            <!-- <img src="~/images/fisheries logo.png" alt="DTS" class="img-logo" style=" width: 200px;"> -->
                        </div>

                        <div class="col-sm-9 col-xs-9" style="float: inherit;">
                            <div class="title table-striped text-center">
                                <h5 style="font-size: 18px" id="lblDptName"></h5>
                                <h5 id="lblAddress"></h5>

                            </div>

                            <!-- contact info -->

                            <div class="title_info text-center">
                                <span class="change-span-size" style="font-size: 13px" id="lblPhon1"> </span>
                                <span class="change-span-size" style="font-size: 13px" id="lblPhon2"></span>
                                <span class="change-span-size" style="font-size: 13px" id="lblEmail"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <!-- <button type="button" class="print-link pull-right" id="btnPrint" onclick="jQuery.print()" style="padding-right: 50px; padding-left: 50px; transition: all 0.2s ease-in-out 0s; padding-bottom: 8px; padding-top: 9px; border-radius: 28px; margin-top: -9px; color: #fff; font-size: 11px; font-weight: bold; border: 1px solid #DBDBDB; background: #09b0f3; " id="btnBankSlip">Print</button> -->

                        </div>
                    </div>

                    <hr style="min-width: 100%" class="change-hr-color">

                    <!-- Travel Agency & company name -->

                    <div class="form-group text-center">
                        <br>
                        <span class="change-span-size" style="font-size: 16px">
                            Khyber Pakhtunkhwa Fisheries Department
                        </span>
                        <br>

                    </div>



                    <!-- CEMCO Travel & Tours and QR code -->
                    <hr style="min-width: 100%" class="change-hr-color">

                    <!-- Basic Information -->

                    <div class="row">
                <div class="basic_info">
                    <p class="nice-title change-p-size">1. Basic Information</p>

                    <div class="row">
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">First Name:</label>
                                    <p><?= ucwords($details['first_name'])?></p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">Middle Name: </label>
                                    <p><?= ucwords($details['middle_name'])?></p>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">Last Name: </label>
                                    <p><?= ucwords($details['last_name'])?></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">Father Name: </label>
                                    <p><?= ucwords($details['father_name'])?></p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">CNIC: </label>
                                    <p><?=$details['cnic']?></p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label class="fw-bold">Email: </label>
                                    <p><?=$details['email_address']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="fw-bold">Permanent Address: </label>
                            <p><?= ucwords($details['permanent_address'])?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="fw-bold">Current Address: </label>
                            <p><?= ucwords($details['current_address'])?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="fw-bold">Postal Address: </label>
                            <p><?= ucwords($details['postal_address'])?></p>
                        </div>
                    </div>


                    <div class="row mt-3">

                        <div class="col-md-3">
                            <div class="form-group ">
                                <label class="fw-bold">City: </label>
                                <p><?= ucwords($details['city'])?></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Mobile Number: </label>
                                <p><?=$details['mobile_number']?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Office Phone Number: </label>
                                <p><?=$details['office_phone_number']?></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Alternate Number: </label>
                                <p><?=$details['alternate_number']?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Date of Birth: </label>
                                <p><?=$details['dob']?></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Religion: </label>
                                <p><?= ucwords($details['religion'])?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Gender: </label>
                                <p><?= ucwords($details['gender'])?></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Designation: </label>
                                <p><?= ucwords($details['designation']['designation_name'])?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">BPS: </label>
                                <p><?=$details['bps_id']?></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Marital Status : </label>
                                <p><?= ucwords($details['marital_status'])?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Domicile : </label>
                                <p><?= ucwords($details['domicile'])?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="fw-bold">Personal Number : </label>
                                <p><?=$details['personal_number']?></p>
                            </div>
                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                2. EMPLOYEE QUALIFICATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tbl_data" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Passing Year</th>
                                            <th>Name of Institute</th>
                                            <th>
                                                Major Subject
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                3. EMPLOYEE FAMILY INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tbleFamily" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Spouse Name</th>
                                            <th>Children Name</th>
                                            <th>Date of Birth</th>
                                            <th> Gender</th>
                                            <th> Relationship</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                4. EMPLOYEE INITIAL INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tblinitials" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Reporting Date</th>
                                            <th>Service Status</th>
                                            <th>Appointment Date</th>
                                            <th>Age of Retirement</th>
                                            <th>Cader/Service Group</th>
                                            <th>Department</th>
                                            <th>Appointment Through	</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                5. EMPLOYEE SERVICE HISTORY INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="deathTable1" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Service Status</th>
                                            <th>BPS</th>
                                            <th>Designation</th>
                                            <th>Place of Duty</th>
                                            <th>Station</th>
                                            <th>Running Basic Pay</th>
                                            <th>Joining Date</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                6. EMPLOYEE TRAINING INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tbltraining" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Training Serial Number</th>
                                            <th>Training Name</th>
                                            <th>Institute</th>
                                            <th>City</th>
                                            <th>Institute Address</th>
                                            <th>From</th>
                                            <th>To</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                7. EMPLOYEE PROMOTION INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tblpromotion" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>From Designation</th>
                                            <th>To Designation</th>
                                            <th>From BPS</th>
                                            <th>To BPS</th>
                                            <th>Promotion Date</th>
                                            <th>Promotion Number</th>
                                            <th>Department</th>
                                            <th>Acting</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                8. EMPLOYEE TRANSFER INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tbltransfer" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Transfer Order Number</th>
                                            <th>Designation</th>
                                            <th>BPS</th>
                                            <th>From Department</th>
                                            <th>To Project</th>
                                            <th>From Station</th>
                                            <th>To Station</th>
                                            <th>Worked Station</th>
                                            <th>Transfer Date</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                9. EMPLOYEE ACRS INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tblacrs" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>ACR</th>
                                            <th>ACR Details	</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">

                    <div class="row">
                        <div class="sub_ownership_details">
                            <p class="sub-nice-title change-p-size">
                                10. EMPLOYEE LEAVE INFORMATION
                            </p>
                            <div class="row">
                                <table class=" table table-hover" id="tblleave" style="max-width:100%">
                                    <thead>
                                        <tr>
                                            <th>Debatable to Leave Account	</th>
                                            <th>Not Debatable on Leave Account		</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <hr class="change-hr-color">
                    <!-- Contact -->

                    <!-- Signature, name and stamp  -->
                    <div class="row" style="display: flex">
                        <div class="col-sm-3 col-xs-3 form-group change-left-col">
                            <label class="control-label change-label">Signature: </label>
                            <p style="margin-bottom: 0px" class="panel panel-default panel-body change-border-color change-p-size"></p>
                        </div>
                       
                        <div class="col-sm-3 col-xs-3 form-group change-left-col" style="padding-left: 2px; ">
                               </div>
                        <div class="col-sm-3 col-xs-3 form-group change-right-col" style="padding-left: 2px;">
                            <label class="control-label change-label">Date: </label>
                            <p style="margin-bottom: 0px" class="panel panel-default panel-body change-border-color change-p-size"></p>
                        </div>
                    </div>


                </div>

            </div>
            <div class="form-group text-center">
                <br>
                <span class="change-span-size" style="font-size: 16px">Form No: 18</span>

                <br>

            </div>
        </div>
    </section>
    @endsection
