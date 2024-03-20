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


        Route::group(['prefix' => 'qualification'], function () {
            Route::get('/', [Home::class, 'qualification']);
            Route::post('/create', [Home::class, 'add_qualification']);
            Route::post('/update', [Home::class, 'update_qualification']);
            Route::get('/single', [Home::class, 'get_single_qualification']);
        });

        Route::group(['prefix' => 'transfer'], function () {
            Route::get('/', [Home::class, 'transfer']);
            Route::post('/create', [Home::class, 'add_transfer']);
            Route::post('/update', [Home::class, 'update_transfer']);
            Route::get('/single', [Home::class, 'get_single_transfer']);
        });

        Route::group(['prefix' => 'acr'], function () {
            Route::get('/', [Home::class, 'acr']);
            Route::post('/create', [Home::class, 'add_acr']);
            Route::post('/update', [Home::class, 'update_acr']);
            Route::get('/single', [Home::class, 'get_single_acr']);
        });

        Route::group(['prefix' => 'leave'], function () {
            Route::get('/', [Home::class, 'leave']);
            Route::post('/create', [Home::class, 'add_leave']);
            Route::post('/update', [Home::class, 'update_leave']);
            Route::get('/single', [Home::class, 'get_single_leave']);
        });


        Route::group(['prefix' => 'training'], function () {
            Route::get('/', [Home::class, 'training']);
            Route::post('/create', [Home::class, 'add_training']);
            Route::post('/update', [Home::class, 'update_training']);
            Route::get('/single', [Home::class, 'get_single_training']);
        });

        Route::group(['prefix' => 'promotion'], function () {
            Route::get('/', [Home::class, 'promotion']);
            Route::post('/create', [Home::class, 'add_promotion']);
            Route::post('/update', [Home::class, 'update_promotion']);
            Route::get('/single', [Home::class, 'get_single_promotion']);
        });

        Route::group(['prefix' => 'service'], function () {
            Route::get('/', [Home::class, 'service']);
            Route::post('/create', [Home::class, 'add_service']);
            Route::post('/update', [Home::class, 'update_service']);
            Route::get('/single', [Home::class, 'get_single_service']);
        });

        Route::group(['prefix' => 'appointment'], function () {
            Route::get('/', [Home::class, 'appointment']);
            Route::post('/create', [Home::class, 'add_appointment']);
            Route::post('/update', [Home::class, 'update_appointment']);
            Route::get('/single', [Home::class, 'get_single_appointment']);
        });

        Route::group(['prefix' => 'family'], function () {
            Route::get('/', [Home::class, 'family']);
            Route::post('/create_spouce', [Home::class, 'add_spouce']);
            Route::post('/create_marital', [Home::class, 'add_martial']);
            Route::post('/update_spouce', [Home::class, 'update_spouce']);
            Route::get('/single_spouce',  [Home::class, 'get_single_spouce']);
            Route::post('/update_marital', [Home::class, 'update_marital']);
            Route::get('/single_marital', [Home::class, 'get_single_marital']);
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


    Route::get('/', [Home::class, 'information']);
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

// Route::get('/', function () {
//     return view('index');
// });

Route::POST('/login', [Users::class, 'login']);