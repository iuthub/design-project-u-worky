<?php


namespace App\Http\Models\User;


use App\Http\Models\CustomModel;
use Illuminate\Support\Facades\Cache;

class Comment extends CustomModel
{
    const RELATION_LIST = ['relAuthor'];
    protected $table = 'comments';

    public function relAuthor()
    {
        return $this->hasOne('App\Http\Models\User\User', 'id', 'user_id');
    }

    public function relImage()
    {
        return $this->relAuthor->relImage;
    }

    public function setCache($type)
    {
        switch ($type) {
            case config('cache_items.index_comments'):
                $data = self::with(self::RELATION_LIST)->take(config('items.index_comments_count'))->get();
                break;
        }

        Cache::add($type, $data, config('items.date')['day']);

        return $data;
    }
}
