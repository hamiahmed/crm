<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\{User, Qualification, Transfer, Acr, Leave, Training, Promotion, Service, Appointment, Marital, Spouce, Designation, Entity};

class Home extends Controller
{

    public function dashboard()
    {
        $_SESSION['header']     = 'hr';
        $_SESSION['page']       = 'dashboard';
        return view('hr_dashboard');

    }

    public function information()
    {
        $_SESSION['header']     = 'hr';
        $_SESSION['page']       = 'information';
        $user_id                = session()->get('userdata')['user_id'];
        $result['user']         = User::where('user_id', $user_id)->first();
        $result['personals']    = User::get();
        $result['designations'] = Promotion::getAllDesignations();
        return view('information', $result);
    }

    public function add_information(Request $req)
    {

        $user_id = session()->get('userdata')['user_id'];
        $user = new User;
        $user->first_name  = $req->input('first_name');
        $user->middle_name = $req->input('middle_name');
        $user->last_name   = $req->input('last_name');
        $user->father_name = $req->input('father_name');
        $user->cnic  = $req->input('cnic');
        $user->email_address  = $req->input('email_address');
        $user->permanent_address  = $req->input('permanent_address');
        $user->current_address  = $req->input('current_address');
        $user->city  = $req->input('city');
        $user->postal_address    = $req->input('postal_address');
        $user->mobile_number     = $req->input('mobile_number');
        $user->office_phone_number      = $req->input('office_phone_number');
        $user->alternate_number  = $req->input('alternate_number');
        $user->dob               = $req->input('dob');
        $user->religion          = $req->input('religion');
        $user->gender            = $req->input('gender');
        $user->designation_id       = $req->input('designation_id');
        $user->marital_status    = $req->input('marital_status');
        $user->domicile          = $req->input('domicile');
        $user->personal_number   = $req->input('personal_number');
        $user->first_service_entry  = $req->input('first_service_entry');
        $user->bps_id        = $req->input('bps_id');
        $user->service_type  = $req->input('service_type');
        $user->gpf_number    = $req->input('gpf_number');
        $user->user_role     = 3;
        $user->updated_by    = $user_id;
        $user->updated_at    = now();

        if ($req->hasFile('user_img')) {
            $user_image = $req->file('user_img')->store('user_images');
            $user->user_img = substr($user_image, 12);
        }
        if ($req->hasFile('personal_cv')) {
            $user_cv = $req->file('personal_cv')->store('user_cvs');
            $user->personal_cv = substr($user_cv, 9);
        }

        $user->save();
        return redirect()->back()->with('Success', 'User info has been added successfully!');
    }

    public function get_single_information(Request $req)
    {
        $id = $req->input('id');
        if ($id) {
            $rec = User::find($id);
            return response()->json($rec);
        }
    }

    public function update_information(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $user = User::find($id);
            $user->first_name  = $req->input('first_name');
            $user->middle_name = $req->input('middle_name');
            $user->last_name   = $req->input('last_name');
            $user->father_name = $req->input('father_name');
            $user->cnic  = $req->input('cnic');
            $user->email_address       = $req->input('email_address');
            $user->permanent_address   = $req->input('permanent_address');
            $user->current_address     = $req->input('current_address');
            $user->city                = $req->input('city');
            $user->postal_address      = $req->input('postal_address');
            $user->mobile_number       = $req->input('mobile_number');
            $user->office_phone_number      = $req->input('office_phone_number');
            $user->alternate_number    = $req->input('alternate_number');
            $user->dob                 = $req->input('dob');
            $user->religion            = $req->input('religion');
            $user->gender              = $req->input('gender');
            $user->designation_id      = $req->input('designation_id');
            $user->marital_status      = $req->input('marital_status');
            $user->domicile            = $req->input('domicile');
            $user->personal_number   = $req->input('personal_number');
            $user->first_service_entry  = $req->input('first_service_entry');
            $user->bps_id        = $req->input('bps_id');
            $user->service_type  = $req->input('service_type');
            $user->gpf_number    = $req->input('gpf_number');
            $user->user_role     = 3;
            $user->created_by    = $user_id;
            $user->created_at    = now();

            if ($req->hasFile('user_img')) {
                $user_image = $req->file('user_img')->store('user_images');
                $user->user_img = substr($user_image, 12);
            }
            if ($req->hasFile('personal_cv')) {
                $user_cv = $req->file('personal_cv')->store('user_cvs');
                $user->personal_cv = substr($user_cv, 9);
            }

            $user->save();
            $status = 'Success';
            $msg = "User information updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function qualification()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'qualification';
        $result['qualifications'] = Qualification::get();
        return view('qualification', $result);
    }

    public function add_qualification(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $qualification = new Qualification;
        $qualification->qualification = $req->input('qualification');
        $qualification->employee_id = $req->input('employee_id');
        $qualification->grade_division = $req->input('grade_division');
        $qualification->degree_passing_year = $req->input('degree_passing_year');
        $qualification->last_institute = $req->input('last_institute');
        $qualification->institute_address = $req->input('institute_address');
        $qualification->major_subject = $req->input('major_subject');
        $qualification->Remarks = $req->input('Remarks');
        $qualification->created_by = $user_id;
        $qualification->created_at    = now();

        if ($req->hasFile('degree')) {
            $image = $req->file('degree')->store('user_degrees');
            $qualification->degree = substr($image, 13);
        }
        $qualification->save();
        return redirect()->back()->with('Success', 'Qualification added successfully!');
    }

    public function update_qualification(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $qualification = Qualification::find($id);
            $qualification->qualification       = $req->input('qualification');
            $qualification->employee_id         = $req->input('employee_id');
            $qualification->grade_division      = $req->input('grade_division');
            $qualification->degree_passing_year = $req->input('degree_passing_year');
            $qualification->last_institute      = $req->input('last_institute');
            $qualification->institute_address   = $req->input('institute_address');
            $qualification->major_subject       = $req->input('major_subject');
            $qualification->Remarks             = $req->input('Remarks');
            $qualification->updated_by          = $user_id;
            $qualification->updated_at          = now();

            if ($req->hasFile('degree')) {
                $image = $req->file('degree')->store('user_degrees');
                $qualification->degree = substr($image, 13);
            }

            $qualification->save();
            $status = 'Success';
            $msg = "Qualification updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function get_single_qualification(Request $req)
    {
        $id = $req->input('id');
        if ($id) {
            $rec = Qualification::find($id);
            $employee_name = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name = $employee_name;
            // echo '<pre>';print_r($rec->user);die;
            return response()->json($rec);
        }
    }

    public function transfer()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']   = 'transfer';
        $result['transfers'] = Transfer::get();
        $result['designations'] = Promotion::getAllDesignations();
        return view('transfer', $result);
    }

    public function add_transfer(Request $req)
    {

        $user_id = session()->get('userdata')['user_id'];
        $transfer = new Transfer;
        $transfer->order_number    = $req->input('order_number');
        $transfer->employee_id     = $req->input('employee_id');
        $transfer->designation_id  = $req->input('designation_id');
        $transfer->bps_id          = $req->input('bps_id');
        $transfer->from_department = $req->input('from_department');
        $transfer->to_department   = $req->input('to_department');
        $transfer->from_station    = $req->input('from_station');
        $transfer->to_station      = $req->input('to_station');
        $transfer->worked_from     = $req->input('worked_from');
        $transfer->order_file      = $req->input('order_file');
        $transfer->transfer_date   = date('Y-m-d', strtotime($req->input('transfer_date')));
        $transfer->created_by      = $user_id;
        $transfer->created_at    = now();

        if ($req->hasFile('order_file')) {
            $image = $req->file('order_file')->store('transfer_files');
            $transfer->order_file = substr($image, 15);
        }

        $transfer->save();
        return redirect()->back()->with('Success', 'Transfer added successfully!');
    }

    public function get_single_transfer(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Transfer::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name    = $employee_name;
            $rec->designation_name = !empty($rec->designation->designation_name) ? $rec->designation->designation_name : '';
            return response()->json($rec);
        }
    }

    public function update_transfer(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $transfer = Transfer::find($id);
            $transfer->order_number    = $req->input('order_number');
            $transfer->employee_id     = $req->input('employee_id');
            $transfer->designation_id  = $req->input('designation_id');
            $transfer->bps_id          = $req->input('bps_id');
            $transfer->from_department = $req->input('from_department');
            $transfer->to_department   = $req->input('to_department');
            $transfer->from_station    = $req->input('from_station');
            $transfer->to_station      = $req->input('to_station');
            $transfer->worked_from     = $req->input('worked_from');
            $transfer->order_file      = $req->input('order_file');
            $transfer->transfer_date   = date('Y-m-d', strtotime($req->input('transfer_date')));
            $transfer->updated_by         = $user_id;
            $transfer->updated_at         = now();

            if ($req->hasFile('order_file')) {
                $image = $req->file('order_file')->store('transfer_files');
                $transfer->order_file = substr($image, 13);;
            }

            $transfer->save();
            $status = 'Success';
            $msg = "Transfer updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function acr()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'acr';
        $user_id = session()->get('userdata')['user_id'];
        $result['acrs'] = Acr::get();
        return view('acr', $result);
    }

    public function add_acr(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $acr = new Acr;
        $acr->acr            = $req->input('acr');
        $acr->employee_id    = $req->input('employee_id');
        $acr->acr_detail     = $req->input('acr_detail');
        $acr->created_by     = $user_id;
        $acr->created_at     = now();

        if ($req->hasFile('acr_file')) {
            $image = $req->file('acr_file')->store('acr_files');
            $acr->acr_file = substr($image, 10);
        }

        $acr->save();
        return redirect()->back()->with('Success', 'Acr added successfully!');
    }

    public function get_single_acr(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Acr::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name    = $employee_name;
            return response()->json($rec);
        }
    }

    public function update_acr(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $acr = Acr::find($id);
            $acr->acr            = $req->input('acr');
            $acr->employee_id    = $req->input('employee_id');
            $acr->acr_detail     = $req->input('acr_detail');
            $acr->updated_by     = $user_id;
            $acr->updated_at     = now();

            if ($req->hasFile('acr_file')) {
                $image = $req->file('acr_file')->store('transfer_files');
                $acr->acr_file = substr($image, 13);;
            }

            $acr->save();
            $status = 'Success';
            $msg = "Acr updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function leave()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page']     = 'leave';
        $result['leaves']     = Leave::get();
        $result['deb_leaves']     = DB::table('entities')->where('e_group', 'deb_leave')->get();
        $result['not_deb_leaves'] = DB::table('entities')->where('e_group', 'not_deb_leave')->get();
        return view('leave', $result);
    }

    public function add_leave(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $leave = new Leave;
        $leave->dep_leave     = $req->input('dep_leave');
        $leave->employee_id   = $req->input('employee_id');
        $leave->not_dep_leave = $req->input('not_dep_leave');
        $leave->created_by    = $user_id;
        $leave->created_at    = now();

        if ($req->hasFile('dep_file')) {
            $image = $req->file('dep_file')->store('leave_files');
            $leave->dep_file = substr($image, 12);
        }

        $leave->save();
        return redirect()->back()->with('Success', 'Leave added successfully!');
    }

    public function get_single_leave(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Leave::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name    = $employee_name;
            return response()->json($rec);
        }
    }

    public function update_leave(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $leave = Leave::find($id);
            $leave->dep_leave     = $req->input('dep_leave');
            $leave->employee_id           = $req->input('employee_id');
            $leave->not_dep_leave = $req->input('not_dep_leave');
            $leave->updated_by            = $user_id;
            $leave->updated_at            = now();

            if ($req->hasFile('dep_file')) {
                $image = $req->file('dep_file')->store('leave_files');
                $leave->dep_file = substr($image, 12);
            }


            $leave->save();
            $status = 'Success';
            $msg = "Leave updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function appointment()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'appointment';
        $result['appointments'] = appointment::get();
        return view('appointment', $result);
    }

    public function add_appointment(Request $req)
    {

        $user_id = session()->get('userdata')['user_id'];
        $appointment = new Appointment;
        $appointment->reporting_date       =  date('Y-m-d', strtotime($req->input('reporting_date')));
        $appointment->employee_id          = $req->input('employee_id');
        $appointment->service_status       =  $req->input('service_status');
        $appointment->appointment_date     =  date('Y-m-d', strtotime($req->input('appointment_date')));
        $appointment->age_of_retirement    =  $req->input('age_of_retirement');
        $appointment->cader_service_group  =  $req->input('cader_service_group');
        $appointment->department           =  $req->input('department');
        $appointment->appointment_through  =  $req->input('appointment_through');
        $appointment->created_by  = $user_id;
        $appointment->created_at  = now();

        $appointment->save();
        return redirect()->back()->with('Success', 'Appointment added successfully!');
    }

    public function get_single_appointment(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Appointment::find($id);
            $employee_name = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name = $employee_name;
            return response()->json($rec);
        }
    }

    public function update_appointment(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $appointment = Appointment::find($id);
            $appointment->reporting_date       = date('Y-m-d', strtotime($req->input('reporting_date')));
            $appointment->employee_id          = $req->input('employee_id');
            $appointment->service_status       = $req->input('service_status');
            $appointment->appointment_date     = date('Y-m-d', strtotime($req->input('appointment_date')));
            $appointment->age_of_retirement    = $req->input('age_of_retirement');
            $appointment->cader_service_group  = $req->input('cader_service_group');
            $appointment->department           = $req->input('department');
            $appointment->appointment_through  = $req->input('appointment_through');
            $appointment->created_by          = $user_id;
            $appointment->updated_at          = now();

            $appointment->save();
            $status = 'Success';
            $msg = "Appointment updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function training()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'training';
        $user_id = session()->get('userdata')['user_id'];
        $result['trainings'] = Training::get();
        return view('training', $result);
    }

    public function add_training(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $training = new Training;
        $training->training_name      = $req->input('training_name');
        $training->employee_id = $req->input('employee_id');
        $training->serial_number      = $req->input('serial_number');
        $training->Institute          = $req->input('Institute');
        $training->city               = $req->input('city');
        $training->institute_address  = $req->input('institute_address');
        $training->oblige_sponsor     = $req->input('oblige_sponsor');
        $training->from_date          = date('Y-m-d', strtotime($req->input('from_date')));
        $training->to_date            = date('Y-m-d', strtotime($req->input('to_date')));
        $training->duration           = $req->input('duration');
        // $training->user_id   = $req->input('user_id');
        $training->created_by         = $user_id;
        $training->created_at       = now();

        $training->save();
        return redirect()->back()->with('Success', 'Training added successfully!');
    }

    public function get_single_training(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Training::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name    = $employee_name;
            return response()->json($rec);
        }
    }

    public function update_training(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];

        $id = $req->input('id');

        if ($id) {
            $training = Training::find($id);
            $training->training_name      = $req->input('training_name');
            $training->employee_id        = $req->input('employee_id');
            $training->serial_number      = $req->input('serial_number');
            $training->Institute          = $req->input('Institute');
            $training->city               = $req->input('city');
            $training->institute_address  = $req->input('institute_address');
            $training->oblige_sponsor     = $req->input('oblige_sponsor');
            $training->from_date          = date('Y-m-d', strtotime($req->input('from_date')));
            $training->to_date            = date('Y-m-d', strtotime($req->input('to_date')));
            $training->duration           = $req->input('duration');
            $training->updated_by         = $user_id;
            $training->updated_at         = now();

            $training->save();
            $status = 'Success';
            $msg = "Training updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function family()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'family';
        $user_id = session()->get('userdata')['user_id'];
        $result['maritals'] = Marital::get();
        $result['spouces'] = Spouce::get();
        return view('family', $result);
    }

    public function add_spouce(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $spouce = new Spouce;
        $spouce->spouce             = $req->input('spouce');
        $spouce->employee_id = $req->input('employee_id');
        $spouce->name_of_spouce     = $req->input('name_of_spouce');
        $spouce->dob                = date('Y-m-d', strtotime($req->input('spouce_dob')));
        $spouce->no_of_children     = $req->input('no_of_children');
        $spouce->created_by     = $user_id;
        $spouce->created_at    = now();

        if ($req->hasFile('spouce_file')) {
            $image = $req->file('spouce_file')->store('cnic_files');
            $spouce->spouce_file = substr($image, 11);
        }

        $spouce->save();
        return redirect()->back()->with('Success', 'Spouce info added successfully!');
    }

    public function get_single_spouce(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Spouce::find($id);
            $employee_name = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name = $employee_name;
            // echo '<pre>';print_r($rec->user);die;
            return response()->json($rec);
        }
    }

    public function update_spouce(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $spouce = Spouce::find($id);
            $spouce->spouce       = $req->input('spouce');
            $spouce->employee_id         = $req->input('employee_id');
            $spouce->name_of_spouce      = $req->input('name_of_spouce');
            $spouce->dob                 = date('Y-m-d', strtotime($req->input('spouce_dob')));
            $spouce->no_of_children      = $req->input('no_of_children');
            $spouce->updated_by          = $user_id;
            $spouce->updated_at          = now();

            if ($req->hasFile('spouce_file')) {
                $image = $req->file('spouce_file')->store('cnic_files');
                $spouce->spouce_file = substr($image, 13);;
            }

            $spouce->save();
            $status = 'Success';
            $msg = "Spouce updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function add_martial(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $martial = new Marital;
        $martial->dependency_name   = $req->input('dependency_name');
        $martial->employee_id = $req->input('employee_id');
        $martial->relationship      = $req->input('relationship');
        $martial->dob               = date('Y-m-d', strtotime($req->input('marital_dob')));
        $martial->marital_status    = $req->input('marital_status');
        $martial->created_by     = $user_id;
        $martial->created_at    = now();

        $martial->save();
        return redirect()->back()->with('Success', 'Marital info added successfully!');
    }

    public function get_single_marital(Request $req)
    {
        $id = $req->input('id');
        if ($id) {
            $rec = Marital::find($id);
            $employee_name = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name = $employee_name;
            return response()->json($rec);
        }
    }

    public function update_marital(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $marital = Marital::find($id);
            $marital->dependency_name  = $req->input('dependency_name');
            $marital->employee_id      = $req->input('employee_id');
            $marital->relationship     = $req->input('relationship');
            $marital->marital_status     = $req->input('marital_status');
            $marital->dob              = date('Y-m-d', strtotime($req->input('marital_dob')));
            $marital->updated_by       = $user_id;
            $marital->updated_at       = now();

            $marital->save();
            $status = 'Success';
            $msg = "Marital updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function promotion()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'promotion';
        $user_id = session()->get('userdata')['user_id'];
        $result['promotions']   = Promotion::get();
        $result['designations'] = Promotion::getAllDesignations();
        return view('promotion', $result);
    }

    public function add_promotion(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $promotion = new Promotion;
        $promotion->from_designation   = $req->input('from_designation');
        $promotion->employee_id = $req->input('employee_id');
        $promotion->to_designation     = $req->input('to_designation');
        $promotion->from_bps           = $req->input('from_bps');
        $promotion->to_bps             = $req->input('to_bps');
        $promotion->promotion_date     = date('Y-m-d', strtotime($req->input('promotion_date')));
        $promotion->promotion_number   = $req->input('promotion_number');
        $promotion->department         = $req->input('department');
        $promotion->acting             = $req->input('acting');
        $promotion->remarks            = $req->input('remarks');
        $promotion->created_by         = $user_id;
        $promotion->created_at       = now();

        if ($req->hasFile('notification_file')) {
            $image = $req->file('notification_file')->store('promotions_files');
            $promotion->notification_file = substr($image, 19);
        }

        $promotion->save();
        return redirect()->back()->with('Success', 'Promotion added successfully!');
    }

    public function get_single_promotion(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Promotion::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $from_designation_name = !empty($rec->fromDesignation->designation_name) ? $rec->fromDesignation->designation_name : '';
            $to_designation_name   = !empty($rec->toDesignation->designation_name) ? $rec->toDesignation->designation_name : '';
            $rec->employee_name    = $employee_name;
            $rec->from_designation_name = $from_designation_name;
            $rec->to_designation_name   = $to_designation_name;
            return response()->json($rec);
        }
    }

    public function update_promotion(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $id = $req->input('id');

        if ($id) {
            $promotion = Promotion::find($id);
            $promotion->from_designation   = $req->input('from_designation');
            $promotion->employee_id        = $req->input('employee_id');
            $promotion->to_designation     = $req->input('to_designation');
            $promotion->from_bps           = $req->input('from_bps');
            $promotion->to_bps             = $req->input('to_bps');
            $promotion->promotion_date     = date('Y-m-d', strtotime($req->input('promotion_date')));
            $promotion->promotion_number   = $req->input('promotion_number');
            $promotion->department         = $req->input('department');
            $promotion->acting             = $req->input('acting');
            $promotion->remarks            = $req->input('remarks');
            $promotion->updated_by         = $user_id;
            $promotion->updated_at         = now();

            if ($req->hasFile('notification_file')) {
                $image = $req->file('notification_file')->store('promotions_files');
                $promotion->notification_file = substr($image, 13);;
            }

            $promotion->save();
            $status = 'Success';
            $msg = "Promotion updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function service()
    {
        $_SESSION['header'] = 'hr';
        $_SESSION['page'] = 'service';
        $user_id = session()->get('userdata')['user_id'];
        $result['services'] = Service::get();
        $result['designations'] = Promotion::getAllDesignations();
        return view('service', $result);
    }

    public function add_service(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];
        $service = new Service;
        $service->serv_status        = $req->input('serv_status');
        $service->employee_id = $req->input('employee_id');
        $service->designation_id     = $req->input('designation_id');
        $service->bps_id             = $req->input('bps_id');
        $service->place_of_duty      = $req->input('place_of_duty');
        $service->station            = $req->input('station');
        $service->running_basic_pay  = $req->input('running_basic_pay');
        $service->joining_date       = date('Y-m-d', strtotime($req->input('joining_date')));
        $service->created_by     = $user_id;
        $service->created_at    = now();

        if ($req->hasFile('office_order_file')) {
            $image = $req->file('office_order_file')->store('service_files');
            $service->office_order_file = substr($image, 14);
        }

        $service->save();
        return redirect()->back()->with('Success', 'Service added successfully!');
    }

    public function get_single_service(Request $req)
    {
        $id = $req->input('id');

        if ($id) {
            $rec = Service::find($id);
            $employee_name  = $rec->user->first_name;
            $employee_name .= !empty($rec->user->middle_name) ? ' ' . $rec->user->middle_name : '';
            $employee_name .= !empty($rec->user->last_name) ? ' ' . $rec->user->last_name : '';
            $rec->employee_name    = $employee_name;
            $rec->designation_name = !empty($rec->designation->designation_name) ? $rec->designation->designation_name : '';
            return response()->json($rec);
        }
    }

    public function update_service(Request $req)
    {
        $user_id = session()->get('userdata')['user_id'];

        $id = $req->input('id');

        if ($id) {
            $service = Service::find($id);
            $service->serv_status        = $req->input('serv_status');
            $service->employee_id        = $req->input('employee_id');
            $service->designation_id     = $req->input('designation_id');
            $service->bps_id             = $req->input('bps_id');
            $service->place_of_duty      = $req->input('place_of_duty');
            $service->station            = $req->input('station');
            $service->running_basic_pay  = $req->input('running_basic_pay');
            $service->joining_date       = date('Y-m-d', strtotime($req->input('joining_date')));
            $service->updated_by         = $user_id;
            $service->updated_at         = now();

            if ($req->hasFile('office_order_file')) {
                $image = $req->file('office_order_file')->store('service_files');
                $service->office_order_file = substr($image, 13);;
            }

            $service->save();
            $status = 'Success';
            $msg = "Service updated successfully!";
        } else {
            $status = 'Error';
            $msg = "Something went wrong!";
        }
        return redirect()->back()->with($status, $msg);
    }

    public function global_delete(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');

        switch ($name) {
            case 'qualification':
                $table = 'tbl_qualifications';
                $key = 'qul_id';
                break;
            case 'spouce':
                $table = 'tbl_spouce';
                $key = 'spou_id';
                break;
            case 'acr':
                $table = 'tbl_acr';
                $key = 'acr_id';
                break;
            case 'appointment':
                $table = 'tbl_appointment';
                $key = 'app_id';
                break;
            case 'promotion':
                $table = 'tbl_promotions';
                $key = 'pro_id';
                break;
            case 'service':
                $table = 'tbl_services';
                $key = 'serv_id';
                break;
            case 'training':
                $table = 'tbl_training';
                $key = 't_id';
                break;
            case 'transfer':
                $table = 'tbl_transfers';
                $key = 'tra_id';
                break;
            case 'marital':
                $table = 'tbl_marital';
                $key = 'mar_id';
                break;

            default:
                $table = null;
                $key = null;
                break;
        }

        if (!empty($table) && !empty($key) && !empty($id)) {

            DB::table($table)
                ->where($key, $id)
                ->delete();

            return true;
        } else {
            return false;
        }
    }

    public function admin_signup()
    {
        return view('admin_sign_up');
    }

    // public function create_admin(Request $request)
    // {
    //     $hashedPassword = Hash::make($request->input('psw'));
    //     $adminuser = new AdminUser;
    //     $adminuser->name = $request->input('name');
    //     $adminuser->email = $request->input('email');
    //     $adminuser->username = $request->input('username');
    //     $adminuser->user_role = $request->input('role');
    //     $adminuser->password = $hashedPassword;
    //     $adminuser->save();
    //     echo 'User created successfully';
    // }

    public function get_single_employee(Request $request)
    {
        $searchTerm = $request->get('employee_name');

        $data = User::select('user_id', 'first_name', 'middle_name', 'last_name')->where(function ($query) use ($searchTerm) {
            $query->where('first_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('middle_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
        })->get();

        $result = [];
        foreach ($data as $value) {
            $name = $value['first_name'];
            $name .= !empty($value['middle_name']) ? ' ' . $value['middle_name'] : '';
            $name .= !empty($value['last_name']) ? ' ' . $value['last_name'] : '';
            $result[] = ['id' => $value['user_id'], 'text' => $name];
        }

        return response()->json($result);
    }

    public function employee_detail_cv($user_id)
    {
        $_SESSION['header']       = 'hr';
        $_SESSION['page']         = 'employee_detail_cv';
        $result['details']        = User::where('user_role', 3)->where('user_id',$user_id)->first();
        $result['qualifications'] = Qualification::where('employee_id',$user_id)->get();
        $result['spouces']        = Spouce::where('employee_id',$user_id)->get();
        $result['appointments']   = appointment::where('employee_id',$user_id)->get();
        $result['services']       = Service::where('employee_id',$user_id)->get();
        $result['trainings']      = Training::where('employee_id',$user_id)->get();
        $result['promotions']     = Promotion::where('employee_id',$user_id)->get();
        $result['transfers']      = Transfer::where('employee_id',$user_id)->get();
        $result['acrs']           = Acr::where('employee_id',$user_id)->get();
        $result['leaves']           = Leave::where('employee_id',$user_id)->get();
        return view('employee_detail_cv', $result);
    }
}
