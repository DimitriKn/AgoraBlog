<?php

namespace MyBlog;



class Comment extends Model
{
    // $comment->post;
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
