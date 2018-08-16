<?php

namespace MyBlog\Http\Controllers;

use MyBlog\Post;
use MyBlog\Comment;

class CommentsController extends Controller
{
	public function store(Post $post)
	{
		
		$this->validate(request(),['body' => 'required|min:2']);	
		
		$post->addComment(request('body'));
			
		return back ();
	}
}
