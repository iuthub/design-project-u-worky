<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getJobsIndex() {
        return view('admin.jobs');
    }

    public function getIndex() {
        return view('admin.main');
    }
}
