<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

use MyBlog\Post;

use Carbon\Carbon;

class PostController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index','show']);
		
	}
	
	
	
	
	
	public function index()
	{
		$posts = Post::latest()
		->filter(request(['month','year']))
		->get();
/*		if($month = request('month')){
			$posts->whereMonth('created_at',Carbon::parse($month)->month);
		}
		
		if($year= request('year')){
			$posts->whereYear('created_at',$year);
		}
*/		
//		$archives =Post::archives();
		 
		
		
		return view('posts.index', compact('posts'));
	}
	
	public function show(Post $post)
	{
		
		
		return view('posts.show',compact('post'));
	}
	
	public function create()
	{
		return view('posts.create');
	}
	
	//Validation für Form
	
	public function store()
	{
		$this ->validate(request(),[
				'title' => 'required',
				'body' => 'required'
		]);
		
		auth()->user()->publish(
				new Post(request(['title','body']))
						
						);
		
		session()->flash('message', 'Ihre Post ist veröffentlicht.');
				
		
		return redirect('/');
		
		//Array mit POST Daten anzeigen
		//dd(request()->all());
	}
}	
