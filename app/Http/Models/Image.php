<?php


namespace App\Http\Models;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

/**
 * Class Image
 * @package App\Http\Models
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $ext
 * @property int $created_at
 */

class Image extends CustomModel
{
    protected $table = 'images';

    private function getPath()
    {
        return "$this->path/$this->name.$this->ext";
    }

    /** May delete */
    /**
     * @return string
     */
    public function getUrl()
    {
        return asset(config('items.img_public_path') . $this->getPath());
    }

    protected function getStoragePath()
    {
        return  config('items.img_storage_path') . $this->getPath();
    }

    public function create(UploadedFile $file)
    {
        if ($file != null) {
            $this->path = 'images/' . date('Y/m/d');

            if (!file_exists(config('items.img_storage_path') . $this->path))
                $this->makePath();

            $time = time();
            $this->created_at = $time;
            $this->name = md5($time);
            $this->ext = $file->getClientOriginalExtension();

            $this->save();

            $file->move(config('items.img_storage_path') . $this->path, "$this->name.$this->ext");
        }
        return $this;
    }

    private function makePath()
    {
        if (!is_dir(config('items.img_storage_path') . $this->path)) {
            mkdir(config('items.img_storage_path') . $this->path, 0777, true);
//            @chown(storage_path(self::STORAGE_URL . $this->path), 'www-data');
//            @chgrp(storage_path(self::STORAGE_URL . $this->path), 'www-data');
        }
    }

    public function remove()
    {
        if (isset($this)) {
            $this->deleteFile();
            $this->forceDelete();
        }
    }

    private function deleteFile()
    {
        if (File::exists($this->getStoragePath()))
            File::delete($this->getStoragePath());
    }
}
