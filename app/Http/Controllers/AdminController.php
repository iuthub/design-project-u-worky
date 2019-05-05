<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Job;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    //
    public function getJobsIndex() {
        return view('admin.jobs');
    }

    public function getIndex() {
        return view('admin.main');
    }

    public function postAddJob(Request $request){
        Log::info($request);
        $data = $request->input();

        Job::create([
            'name' => $data['name'],
            'type' => $data['type']
        ]);

        return redirect('/admin');
    }
}
