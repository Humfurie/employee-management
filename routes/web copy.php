<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
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

Route::get('/employee', [EmployeeController::class, 'index'])
    ->name('employee');

/**
 * routes for employee
 */
Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {

    Route::get('create', [EmployeeController::class, 'create'])
        ->name('create');

    Route::post('store', [EmployeeController::class, 'store'])
        ->name('store');

    Route::get('showTrash', [EmployeeController::class, 'showTrash'])
        ->name('showTrash');

    Route::group(['prefix' => '{employee}'], function () {
        Route::get('show', [EmployeeController::class, 'show'])
            ->name('show');

        Route::get('edit', [EmployeeController::class, 'edit'])
            ->name('edit');

        Route::put('/', [EmployeeController::class, 'update'])
            ->name('update');

        Route::get('showDelete', [EmployeeController::class, 'showDelete'])
            ->name('showDelete');

        Route::put('softDelete', [EmployeeController::class, 'softDelete'])
            ->name('softDelete');

        Route::get('showRestore', [EmployeeController::class, 'showRestore'])
            ->name('showRestore');

        Route::put('restore', [EmployeeController::class, 'restore'])
            ->name('restore');

        Route::get('permaDelete', [EmployeeController::class, 'permaDelete'])
            ->name('permaDelete');

        Route::delete('/', [EmployeeController::class, 'destroy'])
            ->name('delete');
    });
});

/**
 * routes for position
 */

Route::get('/position', [PositionController::class, 'index'])
    ->name('position');

Route::group(["prefix" => "position", "as" => "position."], function () {
    Route::get('create', [PositionController::class, 'create'])
        ->name('create');

    Route::post('store', [PositionController::class, 'store'])
        ->name('store');

    Route::get('showTrash', [PositionController::class, 'showTrash'])
        ->name('showTrash');

    Route::group(["prefix" => "{position}"], function () {
        Route::get('show', [PositionController::class, 'show'])
            ->name('show');

        Route::get('edit', [PositionController::class, 'edit'])
            ->name('edit');

        Route::get('showDelete', [PositionController::class, 'showDelete'])
            ->name('showDelete');

        Route::put('/', [PositionController::class, 'update'])
            ->name('update');

        Route::put('softDelete', [PositionController::class, 'softDelete'])
            ->name('softDelete');

        Route::get('showRestore', [PositionController::class, 'showRestore'])
            ->name('showRestore');

        Route::put('restore', [PositionController::class, 'restore'])
            ->name('restore');

        Route::get('permaDelete', [PositionController::class, 'permaDelete'])
            ->name('permaDelete');

        Route::delete('/', [PositionController::class, 'destroy'])
            ->name('delete');
    });
});
