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
        'hr_dashboard' => ['module' => 'HR', 'action' => 'read'],
        'information' => ['module' => 'HR', 'action' => 'read'],
        'information/create' => ['module' => 'HR', 'action' => 'create'],
        'qualification' => ['module' => 'HR', 'action' => 'read'],
        'qualification/create' => ['module' => 'HR', 'action' => 'create'],
        'qualification/single' => ['module' => 'HR', 'action' => 'read'],
        'qualification/update' => ['module' => 'HR', 'action' => 'update'],
        'transfer' => ['module' => 'HR', 'action' => 'read'],
        'transfer/create' => ['module' => 'HR', 'action' => 'create'],
        'acr' => ['module' => 'HR', 'action' => 'read'],
        'acr/create' => ['module' => 'HR', 'action' => 'create'],
        'leave' => ['module' => 'HR', 'action' => 'read'],
        'leave/create' => ['module' => 'HR', 'action' => 'create'],
        'training' => ['module' => 'HR', 'action' => 'read'],
        'training/create' => ['module' => 'HR', 'action' => 'create'],
        'promotion' => ['module' => 'HR', 'action' => 'read'],
        'promotion/create' => ['module' => 'HR', 'action' => 'create'],
        'service' => ['module' => 'HR', 'action' => 'read'],
        'service/create' => ['module' => 'HR', 'action' => 'create'],
        'appointment' => ['module' => 'HR', 'action' => 'read'],
        'appointment/create' => ['module' => 'HR', 'action' => 'create'],
        'family' => ['module' => 'HR', 'action' => 'read'],
        'family/create_spouce' => ['module' => 'HR', 'action' => 'create'],
        'family/create_marital' => ['module' => 'HR', 'action' => 'create'],
        'emp_report' => ['module' => 'HR', 'action' => 'read'],
        'emp_cv' => ['module' => 'HR', 'action' => 'read'],
        'dam_detail' => ['module' => 'HR', 'action' => 'read'],
        'river_detail' => ['module' => 'HR', 'action' => 'read'],
        'stream_detail' => ['module' => 'HR', 'action' => 'read'],
        'fish_farm' => ['module' => 'HR', 'action' => 'read'],
        'general' => ['module' => 'HR', 'action' => 'read'],
        'fishing_Rod' => ['module' => 'HR', 'action' => 'read'],
        'fishing_line' => ['module' => 'HR', 'action' => 'read'],
        'cast_net' => ['module' => 'HR', 'action' => 'read'],
        'dip_net' => ['module' => 'HR', 'action' => 'read'],
        'spear_hand' => ['module' => 'HR', 'action' => 'read'],
        'special_license' => ['module' => 'HR', 'action' => 'read'],
        'daily_not_trout' => ['module' => 'HR', 'action' => 'read'],
        'daily_trout' => ['module' => 'HR', 'action' => 'read'],
        'water_bodies' => ['module' => 'HR', 'action' => 'read'],
        'create_dam' => ['module' => 'HR', 'action' => 'read'],
        'update_dam' => ['module' => 'HR', 'action' => 'read'],
        'single_dam' => ['module' => 'HR', 'action' => 'read'],
        'single_stream' => ['module' => 'HR', 'action' => 'read'],
        'single_river' => ['module' => 'HR', 'action' => 'read'],
        'create_stream' => ['module' => 'HR', 'action' => 'read'],
        'update_stream' => ['module' => 'HR', 'action' => 'read'],
        'single_stream' => ['module' => 'HR', 'action' => 'read'],
        'create_river' => ['module' => 'HR', 'action' => 'read'],
        'update_river' => ['module' => 'HR', 'action' => 'read'],
        'single_river' => ['module' => 'HR', 'action' => 'read'],
        'create_dam_detail' => ['module' => 'HR', 'action' => 'read'],
        'create_dam_license' => ['module' => 'HR', 'action' => 'read'],
        'create_dam_lease' => ['module' => 'HR', 'action' => 'read'],
        'create_river_fish' => ['module' => 'HR', 'action' => 'read'],
        'create_river_license' => ['module' => 'HR', 'action' => 'read'],
        'create_river_lease' => ['module' => 'HR', 'action' => 'read'],
        'create_stream_fish' => ['module' => 'HR', 'action' => 'read'],
        'create_stream_license' => ['module' => 'HR', 'action' => 'read'],
        'create_stream_lease' => ['module' => 'HR', 'action' => 'read'],
        'graphic_report' => ['module' => 'HR', 'action' => 'read'],
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
