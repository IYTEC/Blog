<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    // public function store($post){
    // 	Comment::create([
    // 		'body' => request('body'),
    // 		'post_id' => $post
    // 	]);
    // 	return back();
    // }

    // Another Style
    // public function store(POST $post){
    // 	COMMENT::create([
    // 			'body' => request('body'),
    // 			'post_id' => $post->id
    // 		]);
    // 	return back();
    // }


    // Yet another style
    public function store(POST $post){
    	$this->validate(request(), ['body'=>'required|min:2']);
    	$post->addComment(request('body'));
    	return back();
    }
}
