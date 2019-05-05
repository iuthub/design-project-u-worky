<?php


namespace App\Http\Models\Job\Relations;


use App\Http\Models\CustomModel;

class JobSkill extends CustomModel
{
    protected $table = 'jobs_skills';

    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();
    }
}
