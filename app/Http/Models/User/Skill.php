<?php


namespace App\Http\Models\User;


use App\Http\Models\CustomModel;
use App\Http\Models\Job\Relations\JobSkill;
use App\Http\Models\User\Relations\UserSkill;

class Skill extends CustomModel
{
    protected $table = 'skills';

    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();

        return $this;
    }

    public function remove()
    {
        JobSkill::where('skill_id', $this->id)->forceDelete();
        UserSkill::where('skill_id', $this->id)->forceDelete();

        $this->forceDelete();
    }
}
