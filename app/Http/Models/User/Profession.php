<?php


namespace App\Http\Models\User;


use App\Http\Models\CustomModel;
use App\Http\Models\Job\Relations\JobProfession;
use App\Http\Models\User\Relations\UserProfession;

class Profession extends CustomModel
{
    protected $table = 'professions';

    public function relCategory()
    {
        return $this->belongsTo('App\Http\Models\Job\Category', 'category_id', 'id');
    }

    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();

        return $this;
    }

    public function remove()
    {
        JobProfession::where('profession_id', $this->id)->forceDelete();
        UserProfession::where('profession_id', $this->id)->forceDelete();

        $this->forceDelete();
    }
}
