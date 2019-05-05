<?php


namespace App\Http\Models\Job\Relations;


use App\Http\Models\CustomModel;

class JobProfession extends CustomModel
{
    protected $table = 'jobs_professions';

    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();
    }
}
