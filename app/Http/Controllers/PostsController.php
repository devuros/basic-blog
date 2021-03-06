<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {


        /*  Making a new instance of repository class

            $posts = (new \App\Repositories\Posts)->all();

        */

        /*  Metoda moze da primi Posts $posts,
            Dependency injection -> passing arguments to a function

            $posts = $posts->all();

        */

        // $posts = Post::all();


    	$posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();


    	return view('posts.index', compact('posts'));

    }

    public function show($id)
    {
    	$post = Post::find($id);

    	return view('posts.show', compact('post'));

    }

    public function create()
    {

    	return view('posts.create');

    }

    public function store()
    {

    	// die and dump
    	
    	// dd(request()->all());
    	// dd(request(['title', 'body']));
    	// dd(request('title'));

    	/*
    	$post = new Post;

    	$post->title = request('title');
    	$post->body = request('body');

    	$post->save();
    	*/

    	$this->validate(request(),[

    		'title'=> 'required',
    		'body'=> 'required'

		]);

    	Post::create([

            'title'=> request('title'),
            'body'=> request('body'),
            'user_id'=> auth()->user()->id

        ]);

        session()->flash('message', 'Your post has now been published!');

    	return redirect()->home();

    }

}
