<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Models\Job\Category;
use App\Http\Models\Job\Job;
use App\Http\Models\Job\Salary;
use App\Http\Models\User\Profession;
use App\Http\Models\User\Skill;
use App\Http\Models\User\User;
use App\Http\Models\Location;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


use App\Http\Models\Job\Relations\JobSkill;


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

        //=============TESTING AREA===================//
        
        //=============================================//

        $salary = ['from' => $data['salary_id_from'], 'to' => $data['salary_id_to']];

        $data['salary_id'] = Salary::firstOrNew($salary)->modifyOrCreate($salary)->id;
        $data['created_at'] = time();
        $data['deadline'] = DateTime::createFromFormat("d M, Y", $data['deadline'])->getTimestamp();
        $data['is_featured'] = isset($data['is_featured']) ? 1 : 0;

        if(isset($data['location-name'])){
            $location = ['name' => $data['location-name'], 'lat' => $data['lat'], 'lng' => $data['lng']];
            $data['location_id'] = Location::firstOrNew($location)->modifyOrCreate($location)->id;

        }else{
            $location = ['name' => NULL, 'lat' => NULL, 'lng' => NULL];
            $data['location_id'] = NULL;
        }

        $skill_id = $data['skill'];


        unset($data['lat']);
        unset($data['lng']);
        unset($data['location-name']);
        unset($data['_token']);
        unset($data['search']);
        unset($data['skill']);
        unset($data['salary_id_from']);
        unset($data['salary_id_to']);

        $data['employer_id'] = Auth::user()->id;

        $job_id = $job = Job::create($data)->id;
        $skill = ['job_id' => $job_id, 'skill_id' => $skill_id];
        JobSkill::firstOrNew($skill)->modifyOrCreate($skill); 

        return redirect('/admin');
    }
}
