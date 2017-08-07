<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/';
    protected $fillable = ['file'];

    public function getFileAttribute($photo) {
        return asset('images/') . $this->uploads . $photo;
    }
}
