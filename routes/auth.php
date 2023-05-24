<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use Domain\Employee\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/employee', [EmployeeController::class, 'index'])
        ->name('employee');

    // Route::get('search', function () {
    //  ;
    //     }
    //     return view('admin.dashboard', compact('employees'));
    // })->name('search');
    /**
     * routes for employee
     */
    Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {

        Route::get('create', [EmployeeController::class, 'create'])
            ->name('create');

        Route::post('store', [EmployeeController::class, 'store'])
            ->name('store');

        Route::get('showTrashed', [EmployeeController::class, 'showTrashed'])
            ->name('showTrashed');

        Route::group(['prefix' => '{employee}'], function () {
            Route::get('/', [EmployeeController::class, 'show'])
                ->name('show');

            Route::get('edit', [EmployeeController::class, 'edit'])
                ->name('edit');

            Route::patch('/', [EmployeeController::class, 'update'])
                ->name('update');

            Route::get('showDelete', [EmployeeController::class, 'showDelete'])
                ->name('showDelete');

            Route::put('softDelete', [EmployeeController::class, 'softDelete'])
                ->name('softDelete');

            Route::get('showRestore', [EmployeeController::class, 'showRestore'])
                ->withTrashed()
                ->name('showRestore');

            Route::put('restore', [EmployeeController::class, 'restore'])
                ->withTrashed()
                ->name('restore');

            Route::get('showForceDelete', [EmployeeController::class, 'showForceDelete'])
                ->name('showForceDelete');

            Route::delete('/', [EmployeeController::class, 'forceDelete'])
                ->name('forceDelete');
        });
    });

    /**
     * routes for position
     */
    Route::get('/position', [PositionController::class, 'index'])
        ->name('position');

    Route::group(['prefix' => 'position', 'as' => 'position.'], function () {
        Route::get('create', [PositionController::class, 'create'])
            ->name('create');

        Route::post('store', [PositionController::class, 'store'])
            ->name('store');

        Route::get('showTrash', [PositionController::class, 'showTrash'])
            ->name('showTrash');

        Route::group(['prefix' => '{position}'], function () {
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
});
