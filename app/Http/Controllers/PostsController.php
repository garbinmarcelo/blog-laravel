<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostsController extends Controller
{
	public function index(){
		// Title
		$title = 'The Laravel 5.3 Blog';

		$posts = \App\Post::all();

		return view('posts.index', compact('title', 'posts'));
	}
}
