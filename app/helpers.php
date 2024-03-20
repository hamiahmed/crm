<?php

function checkPermission($action = null, $module = null)
{
    if (empty($module)) {
        $details = getDetails();
        $module = $details['module'];
    }
    if (empty($action)) {
        $action = $details['action'];
        // $action = getAction();
    }
    $permissions = session()->get('permissions');
    $index = actionDetail($action);
    if (!empty($permissions[$module]) && $permissions[$module][$index] == 1) {
        return true;
    } else {
        return false;
    }
}

function getDetails()
{

    $module_details = [
        // Make
        'dashboard_new' => ['module' => 'HR', 'action' => 'read'],
    ];
    $url = isset(Request()->segments()[0]) ? Request()->segments()[0] : '';

    if (isset($module_details[$url])) {
        return $module_details[$url];
    } elseif ($url == 'roles') {
        return ['module' => 'Roles', 'action' => getAction()];
    } else {
        return ['module' => 'null', 'action' => 'null'];
    }
}

function getAction()
{
    $segment = Request()->segments();
    if (empty($segment[1])) {
        $action = 'read';
    } else if ($segment[1] == 'create') {
        $action = 'create';
    } else if ($segment[1] == 'read') {
        $action = 'read';
    } else if ($segment[1] == 'update') {
        $action = 'update';
    } else if ($segment[1] == 'delete') {
        $action = 'delete';
    } else {
        $action = 'read';
    }
    return $action;
}

function actionDetail($action)
{
    if ($action == 'create') {
        $index = 0;
    } else if ($action == 'read') {
        $index = 1;
    } else if ($action == 'update') {
        $index = 2;
    } else if ($action == 'delete') {
        $index = 3;
    } else {
        $index = 0;
    }
    return $index;
}

// function checkPermission($action = null, $module = null)
// {
//     if(empty($module)){
//         $module = ucfirst(Request()->segments()[0]);
//     }
//     if(empty($action)){
//         $action = getAction();
//     }
//     $permissions = session()->get('permissions');
//     $index = actionDetail($action);
//     if(!empty($permissions[$module]) && $permissions[$module][$index] == 1){
//         return true;
//     } else {
//         return false;
//     }
// }

// function getAction(){
//     $segment = Request()->segments();
//     if(empty($segment[1])){
//         $action = 'read';
//     }else if($segment[1] == 'create'){
//         $action = 'create';
//     }else if($segment[1] == 'read'){
//         $action = 'read';
//     }else if($segment[1] == 'update'){
//         $action = 'update';
//     }else if($segment[1] == 'delete'){
//         $action = 'delete';
//     }else{
//         $action = 'read';
//     }
//     return $action;
// }

// function actionDetail($action){
//     if($action == 'create'){
//         $index = 0;
//     }else if($action == 'read'){
//         $index = 1;
//     }else if($action == 'update'){
//         $index = 2;
//     }else if($action == 'delete'){
//         $index = 3;
//     }else{
//         $index = 0;
//     }
//     return $index;
// }
