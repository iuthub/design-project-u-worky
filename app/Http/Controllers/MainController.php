<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Models\Job\Category;
use App\Http\Models\Job\Job;
use App\Http\Models\Job\Relations\JobSkill;
use App\Http\Models\User\User;

class MainController extends Controller {
    //

    public function getIndex() {
        $categories = Category::all();
        $recent_jobs = Job::orderBy('created_at', 'desc')->get();
        $featured_jobs = Job::where('is_featured', 1)->get();
        return view('dashboard.index', ['categories' => $categories, 'recent_jobs' => $recent_jobs, 'featured_jobs' => $featured_jobs]);
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

    public function postJobs(Request $request){
        $data = $request->input();
        $jobs_id = JobSkill::where('skill_id', $data['keyword'])->pluck('job_id');
        $jobs = new Job();
        $jobs = $jobs->where('category_id', '=', $data['category']);
        $jobs = $jobs->whereIn('id', $jobs_id)->get();
        return view('dashboard.jobs', ['jobs' => $jobs]);
    }

    public function jobsByCategory($id){
        $jobs = new Job();
        $jobs = $jobs->where('category_id', '=', $request);
        return view('dashboard.jobs', ['jobs' => $jobs]);
    }
}
