<?php


namespace App\Http\Models\Job;


use App\Http\Models\CustomModel;
use App\Http\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * Class Category
 * @package App\Http\Models
 * @property int $id
 * @property int $count
 * @property int $image_id
 * @property string $name
 * @property string $description
 * @property Image relImage
 * @property Collection relJobs
 * @property Collection relProfessions
 */
class Category extends CustomModel
{
    protected $table = 'categories';

    public function relJobs()
    {
        return $this->hasMany('App\Http\Models\Job\Job', 'category_id', 'id');
    }

    public function relImage()
    {
        return $this->hasOne('App\Http\Models\Image', 'id', 'image_id');
    }

    public function relProfessions()
    {
        return $this->hasMany('App\Http\Models\User\Profession', 'category_id', 'id');
    }

    public function remove()
    {
        if ($this->image_id != null)
            $this->relImage->remove();

        foreach ($this->relJobs as $job)
            $job->remove();

        $this->forceDelete();
    }

    public function modifyOrCreate($data, UploadedFile $image = null)
    {
        if ($image)
            $this->image_id = (new Image())->create($image)->id;

        unset($data['image']);
        $this->fill($data);

        $this->save();

        return $this;
    }

    public function setCache($type)
    {
        switch ($type) {
            case config('cache_items.index_cats'):
                $data = $this::take(config('items.index_cat_count'))->get();
                break;
        }

        Cache::add($type, $data, config('items.date')['day']);

        return $data;
    }
}
