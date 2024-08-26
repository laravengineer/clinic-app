<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'patient'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/doctor/dashboard', [DoctorController::class,'loadDoctorDashboard'])
    ->middleware('doctor')
    ->name('doctor-dashboard');

Route::group(['prefix'=> 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard',       [AdminController::class,'loadAdminDashboard'    ])->name('admin-dashboard');
    Route::get('/doctors',         [AdminController::class,'loadDoctorListing'     ])->name('admin-doctors');
    Route::get('/specialities',    [AdminController::class,'loadSpecialityListing' ])->name('admin-specialities');
    Route::get('/form/doctor',     [AdminController::class,'loadDoctorForm'        ])->name('admin-form-doctor');
    Route::get('/form/speciality', [AdminController::class,'loadSpecialityForm'    ])->name('admin-form-speciality');
});

require __DIR__.'/auth.php';
