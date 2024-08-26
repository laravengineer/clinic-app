<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function loadDoctorListing()
    {
        return view('admin.doctor-listing');
    }

    public function loadDoctorForm()
    {
        return view('admin.doctor-form');
    }

    public function loadSpecialityListing()
    {
        return view('admin.speciality-listing');
    }

    public function loadSpecialityForm()
    {
        return view('admin.speciality-form');
    }
}
