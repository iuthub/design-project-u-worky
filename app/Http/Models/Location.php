<?php


namespace App\Http\Models;


class Location extends CustomModel
{
    protected $table = 'locations';

    public function modifyOrCreate($data)
    {
        $this->fill($data);
        $this->save();

        return $this;
    }
}
