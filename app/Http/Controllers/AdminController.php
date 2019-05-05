<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Models\Job\Category;
use App\Http\Models\Job\Job;
use App\Http\Models\Job\Salary;
use App\Http\Models\User\Profession;
use App\Http\Models\User\Skill;
use App\Http\Models\User\User;
use DateTime;
use Illuminate\Http\Request;
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
        $data = $request->input();
        $skills = $data['skills'];

        $salary = ['from' => $data['salary_id_from'], 'to' => $data['salary_id_to']];

        $data['salary_id'] = Salary::firstOrNew($salary)->modifyOrCreate($salary)->id;
        $data['created_at'] = time();
        $data['deadline'] = DateTime::createFromFormat("d M, Y", $data['deadline'])->getTimestamp();
        $data['is_featured'] = $data['is_featured'] === "on" ? 1 : 0;

        unset($data['_token']);
        unset($data['skills']);
        unset($data['salary_id_from']);
        unset($data['salary_id_to']);

        $data['employer_id'] = Auth::user()->id;

        $job = Job::create($data);

        // $job->addSkills($skills);

        return redirect('/admin');
    }
}
