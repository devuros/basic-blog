<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{

	public function __construct()
	{

		//	Moze da komentarise samo onaj koji je ulogovan!
		$this->middleware('auth');

	}
    
	public function store(Post $post)
	{
		/*
		Comment::create([

			'body'=> request('body'),
			'post_id'=> $post->id

		]);
		*/

		$this->validate(request(), [

			'body'=> 'required|min:2'

		]);

		$body = request('body');
		$user_id = auth()->user()->id;

		// $post->addComment(compact('body', 'user_id'));
		$post->addComment($body, $user_id);

		return back();

	}

}
