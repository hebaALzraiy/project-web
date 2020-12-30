<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['title','body','category_id','auther_email','code'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
