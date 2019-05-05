<?php


namespace App\Http\Models\Job;


use App\Http\Models\CustomModel;
use App\Http\Models\Job\Relations\JobProfession;
use App\Http\Models\Job\Relations\JobSkill;
use App\Http\Models\Job\Relations\JobUser;
use App\Http\Models\User\User;
use App\Http\Models\Location;
use Illuminate\Support\Facades\Cache;

/**
 * Class Job
 * @property $id
 * @property $image_id
 * @property $location_id
 * @property $category_id
 * @property $employer_id
 * @property $salary_id
 * @property $type
 * @property $deadline
 * @property $working_hours
 * @property $description
 * @property $is_featured
 * @property $status
 * @property $created_at
 * @property User $relUser
 * @property Category $relCategory
 * @package App\Http\Models\Job
 */
class Job extends CustomModel
{
    const RELATION_LIST = ['relUser', 'relCategory', 'relLocation'];

    protected $table = 'jobs';

    public function relUser()
    {
        return $this->hasOne('App\Http\Models\User\User', 'id', 'employer_id');
    }

    public function relLocation()
    {
        return $this->hasOne('App\Http\Models\Location', 'id', 'location_id');
    }

    public function relCategory()
    {
        return $this->belongsTo('App\Http\Models\Job\Category', 'category_id', 'id');
    }

    public function relUsers()
    {
        return $this->belongsToMany('App\Http\Models\Job\Job',
            'jobs_users',
            'job_id',
            'user_id'
        );
    }

    public function relImage()
    {
        return $this->relUser->relImage;
    }

    public function relSkills()
    {
        return $this->hasManyThrough('App\Http\Models\User\Skill',
            'App\Http\Models\Job\Relations\JobSkill',
            'job_id',
            'id',
            'id',
            'skill_id'
        );
    }

    public function relProfessions()
    {
        return $this->hasManyThrough('App\Http\Models\User\Profession',
            'App\Http\Models\Job\Relations\JobProfession',
            'job_id',
            'id',
            'id',
            'profession_id'
        );
    }

    public function relSalary()
    {
        return $this->hasOne('App\Http\Models\Job\Salary', 'id', 'salary_id');
    }

    public function modifyOrCreate($data)
    {
        $this->fill($data);

        if (!$this->id)
            $this->relCategory()->increment('count');

        $this->save();

        return $this;
    }

    public function addSkills($skills)
    {
        foreach ($skills as $skill) {
            $data = [
                'skill_id' => (int)$skill,
                'job_id' => (int)$this->id
            ];
            JobSkill::firstOrNew($data)->modifyOrCreate($data);
        }
    }

    public function addProfessions($professions)
    {
        foreach ($professions as $profession) {
            $data = [
                'profession_id' => (int)$profession,
                'job_id' => (int)$this->id,
            ];
            JobProfession::firstOrNew($data)->modifyOrCreate($data);
        }
    }

    public function remove()
    {
        $this->relCategory->decrement('count');

        JobSkill::where('job_id', $this->id)->forceDelete();
        JobUser::where('job_id', $this->id)->forceDelete();

        $this->forceDelete();
    }

    public function whereFeatured()
    {
        return $this->wherePublished()->where('is_featured', '=', 1);
    }

    public function wherePublished()
    {
        return $this->where('status', '=', 1);
    }

    public function setCache($type)
    {
        switch ($type) {
            case config('cache_items.index_recent_jobs'):
                $data = $this->wherePublished()->with(self::RELATION_LIST)->orderBy('id', 'DESC')->take(config('items.index_job_count'))->get();
                break;
            case config('cache_items.index_featured_jobs'):
                $data = $this->whereFeatured()->with(self::RELATION_LIST)->orderBy('id', 'DESC')->take(config('items.index_job_count'))->get();
                break;
        }

        Cache::add($type, $data, config('items.date')['day']);

        return $data;
    }

    public function employer() {
        return User::find($this->employer_id);
    }

    public function location() {
        return Location::find($this->location_id);
    }
}
