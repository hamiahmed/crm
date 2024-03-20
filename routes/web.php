<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\{user_authentication, rolecheck, logincheck};
use App\Http\Controllers\{Home,Users};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([user_authentication::class])->group(function () {
    Route::middleware([rolecheck::class])->group(function () {

        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', [Home::class, 'dashboard']);
        });   

        // Route::group(['prefix' => 'roles'], function () {
        //     Route::get('/', [Roles::class, 'index']);
        //     Route::post('/create', [Roles::class, 'add_role']);
        //     Route::get('/read', [Roles::class, 'get_single_role']);
        //     Route::post('/update', [Roles::class, 'update_role']);
        // });

        // Route::get('/permissions/{id}', [Roles::class, 'permission']);
        // Route::post('/permissions', [Roles::class, 'save_module_permission']);

    });


    // Route::get('/', [Home::class, 'information']);
    Route::post('/global_delete', [Home::class, 'global_delete']);
    Route::get('/admin_signup', [Home::class, 'admin_signup']);
    Route::post('/admin_signup', [Home::class, 'create_admin']);
    Route::get('/get-single-employee', [Home::class, 'get_single_employee']);

    // Route::get('/', [Home::class, 'index']);
    // Route::get('/logout', [Users::class, 'logout']);

});

Route::middleware([logincheck::class])->group(function () {
    Route::get('/login', function () {
        return view('login');
    });
});

Route::get('/', function () {
    return view('layouts.master');
});

Route::POST('/login', [Users::class, 'login']);