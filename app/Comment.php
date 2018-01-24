<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'post_id',
        'is_active',
        'author',
        'email',
        'photo',
        'body'
    ];

    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function commentReply() {
        return $this->hasMany('App\CommentReply');
    }
}
