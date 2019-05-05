<?php

namespace App\Http\Models\User;

use App\Http\Models\Image;
use App\Http\Models\Location;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 * @property $id
 * @property $image_id
 * @property $location_id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $last_login
 * @property $created_at
 * @property Image $relImage
 * @package App\Http\Models\User
 */
class User extends Authenticatable
{
    use Notifiable;

    const RELATION_LIST = ['relImage', 'relLocation', 'relRoles', 'relJobs'];

    protected $guarded = [];

    public $timestamps = false;

    public function relImage()
    {
        return $this->hasOne('App\Http\Models\Image', 'id', 'image_id');
    }

    public function relPublishedJobs()
    {
        return $this->hasMany('App\Http\Models\Job\Job',
            'employer_id',
            'id'
        );
    }

    public function relJobs(){
        return $this->hasManyThrough('App\Http\Models\Job\Job',
            'App\Http\Models\Job\Relations\JobUser',
            'user_id',
            'id',
            'id',
            'job_id'
        );
    }

    public function relLocation()
    {
        return $this->hasOne('App\Http\Models\Location', 'id', 'location_id');
    }

    public function relSkills()
    {
        return $this->belongsToMany('App\Http\Models\User\Skill',
            'App\Http\Models\User\Relations\UserSkill',
            'user_id',
            'skill_id',
            'id',
            'id'
        )->withPivot('percentage');
    }

    public function relProfessions()
    {
        return $this->belongsToMany('App\Http\Models\User\Profession',
            'users_professions',
            'user_id',
            'profession_id',
            'id',
            'id'
        )->withPivot('experience', 'description', 'group');
    }

    public function relComments()
    {
        return $this->hasMany('App\Http\Models\User\Comment', 'main_user_id', 'id');
    }

    public function professionsGrouped()
    {
        return $this->relProfessions->groupBy('pivot.group');
    }

    public function relRoles()
    {
        return $this->hasManyThrough('App\Http\Models\User\Role',
            'App\Http\Models\User\Relations\UserRole',
            'user_id',
            'id',
            'id',
            'role_id'
        );
    }

    public function relPortfolio()
    {
        return $this->belongsToMany('App\Http\Models\Image',
            'users_portfolio',
            'user_id',
            'image_id',
            'id',
            'id'
        )->withPivot('description');
    }

    public function modifyOrCreate($data, UploadedFile $image = null)
    {
        if ($image)
            $this->image_id = (new Image())->create($image)->id;

        if($data['password'] == null)
            $data['password'] = $this->password;
        else
            $data['password'] = Hash::make($data['password']);

        $this->fill($data);

        $this->save();

        return $this;
    }

    public function authenticated()
    {
        $this->last_login = time();
        $this->save();
    }

    public function isAdmin()
    {
        if($this->relRoles()->where('users_roles.role_id', '=', '1')->count() == 0)
            return false;

        return true;
    }

    public static function whereEmployer()
    {
        return self::with('relRoles')->whereHas('relRoles', function($query){
            $query->where('roles.id', '=', 2);
        });
    }

    public static function whereCandidate()
    {
        return self::with('relRoles')->whereHas('relRoles', function($query){
            $query->where('roles.id', '=', 3);
        });
    }

    public function hasApplied($id)
    {
        return (bool) $this->relJobs()->where('jobs_users.job_id', '=', $id)->count();
    }

    public function setCache($type)
    {
        switch ($type) {
            case config('cache_items.index_employers'):
                $data = self::whereEmployer()->with(self::RELATION_LIST)->take(config('items.index_employers_count'))->get();
                break;
        }

        Cache::add($type, $data, config('items.date')['day']);

        return $data;
    }

    public function getExperience()
    {
        $sum = 0;
        $professions = $this->relProfessions()->pluck('users_professions.experience');

        foreach ($professions as $profession)
            $sum += $profession;

        return $sum;
    }

    public function location() {

        return isset($this->location_id) ? Location::find($this->location_id) : new Location(['name' => 'some address']);
    }

}
