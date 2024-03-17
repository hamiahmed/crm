<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Role, Permission};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Users extends Controller
{
    public function login(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->passes()) {

            $user = User::select('tbl_users.*', 'roles.id as role_id', 'roles.name as role')
                ->join('roles', 'roles.id', '=', 'tbl_users.user_role')
                ->where('username', $req->input('username'))
                ->first();

               

            if (!empty($user)) {

                $hashcheck = Hash::check($req->input('password'), $user->password);

                if (!empty($hashcheck)) {

                    $user_array = [
                        'user_id'   => $user['user_id'],
                        'username'  => $user['first_name'] . ' ' . $user['last_name'],
                        'email'     => $user['email_address'],
                        'role'      => $user['role_id'],
                        'role_name' => $user['role']
                    ];

                    
                    $module_permissions = Permission::select('permissions.*', 'modules.module_name')->join('modules', 'modules.id', '=', 'permissions.module_id')->where('role_id', $user['role_id'])->get();

                    foreach ($module_permissions as $module_permission) {
                        $permissions[$module_permission['module_name']] = json_decode($module_permission['details'], true);
                    }
                    
                    session()->put('userdata', $user_array);
                    session()->put('permissions', $permissions);

                    return redirect('/');
                } else {
                    return redirect('login')->with('error', 'Username or Password is incorrect!');
                }
            } else {
                return redirect('login')->with('error', 'Username or Password is incorrect!');
            }
        } else {
            return redirect('login')->withErrors($validator)->withInput();
        }
    }
}
