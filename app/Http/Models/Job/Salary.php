<?php


namespace App\Http\Models\Job;


use App\Http\Models\CustomModel;

class Salary extends CustomModel
{
    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();

        return $this;
    }
}
