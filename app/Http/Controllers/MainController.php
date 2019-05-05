<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    //

    public function getIndex() {
        return view('dashboard.index');
    }

    public function getEmployers() {
        return view('dashboard.employers');
    }

    public function getCandidates() {
        return view('dashboard.candidates');
    }

    public function getJobs() {
        return view('dashboard.jobs');
    }
}
