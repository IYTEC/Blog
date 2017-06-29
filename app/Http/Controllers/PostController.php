<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	$posts = POST::latest()->get();
		return view('post.index', compact('posts'));
	}
	
	public function create(){
		return view('post.create');
	}
	
	public function store(){
////		dd(request(['title', 'body']));
//		//	Create a new post
//		$post = new POST;
//		$post->title = request('title');
//		$post->body = request('body');
//		//	Save the post
//		$post->save();
//		//	Redirect the user to a page
//		return redirect('/post');
		
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required',
			]);
		
		
		$post = POST::create([
			'title' => request('title'),
			'body'	=> request('body')
		]);
		
		return redirect('/post');
	}

	public function show($id){
		$post = POST::find($id);
		return view('post.show', compact('post'));
	}
}
