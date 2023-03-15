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

Route::get('/', [EmployeeController::class, 'index'])
->name('index');

/**
 * routes for admin
 */
Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {


    Route::get('create', [EmployeeController::class, 'create'])
        ->name('create');

    Route::post('store', [EmployeeController::class, 'store'])
        ->name('store');

    Route::group(['prefix' => '{employee}'], function () {
        Route::get('show', [EmployeeController::class, 'show'])
            ->name('show');

        Route::get('edit', [EmployeeController::class, 'edit'])
            ->name('edit');

        Route::put('/', [EmployeeController::class, 'update'])
            ->name('update');

        Route::get('showDelete', [EmployeeController::class, 'showDelete'])
        ->name('showDelete');

        Route::put('deFlag', [EmployeeController::class, 'deFlag'])
            ->name('deFlag');

        Route::delete('/', [EmployeeController::class, 'destroy'])
            ->name('delete');
    });
});
