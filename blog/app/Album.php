<?php

namespace MyBlog;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = array('name', 'description', 'cover_image');

    public function photos(){
      return $this->hasMany('MyBlog\Photo');
    }
}
