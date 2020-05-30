<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

	 public function index() {
        $posts =  Post::all()->where('post_type', '=', 'post');
    	return view('pages.index', compact('posts'));

    }

    public function blog() {
        $posts =  Post::all()->where('post_type', '=', 'post');
        return view('pages.blog',compact('posts'));

    }

    public function about() {
		$post = Post::where('post_type', 'page')->first();
	    return view('pages.about',compact('post'));

    }

    
    public function contact() {
        return view('pages.contact');

    }

    public function post($id) {
        $post = Post::find($id);
        $comments = Post::find($id)->comments;
    	return view('pages.post', compact('post','comments'));

    }
   
}