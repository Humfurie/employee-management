<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use Tabuna\Breadcrumbs\Trail;

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

Route::get('/', function () {
    return view('admin.employee');
});

/**
 * routes for admin
 */
Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {
    Route::get('/', [EmployeeController::class, 'index'])
        ->name('index');

    Route::get('create', [EmployeeController::class, 'create'])
        ->name('create');

    Route::post('/', [EmployeeController::class, 'store'])
        ->name('store');

    Route::group(['prefix' => '{employee}'], function () {
        Route::get('/', [EmployeeController::class, 'show'])
            ->name('show');

        Route::get('edit', [EmployeeController::class, 'edit'])
            ->name('edit');

        Route::update('/', [EmployeeController::class, 'update'])
            ->name('update');

        Route::delete('/', [EmployeeController::class, 'delete'])
            ->name('delete');
    });
});
