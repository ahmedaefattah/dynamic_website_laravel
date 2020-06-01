<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $posts =  Post::all();
        return view('mng_posts', compact('posts'));
    }
    
     public function show_post()
    {
         $posts = Post::where('post_type', 'post')->get();
        return view('show_post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {  

        $validator = Validator::make($request->all(), [
            'title' =>   'required|max:100',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('create_post')
                        ->withErrors($validator)
                        ->withInput();
        }
        if($request->hasFile('featured_image')) {
       
         $path = Storage::disk('public')->putFile('uploads', $request->file('featured_image'));
                         
        } else {
            $path = NUll;
        }

        $post = new Post;
        $post->title             = $request->title;
        $post->content           = $request->content;
        $post->featured_image    = $path;
        $post->userID                = Auth::user()->id;
        $post->save();
        return redirect('mng_posts')->with('success', 'Post created successfully.');
    }

   
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $post = Post::find($id);
            return View('edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $validator = Validator::make($request->all(), [
            'title' =>   'required|max:100',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator);
        }
         $post = Post::find($id);
         if($request->hasFile('featured_image')) {
                   
            $path = Storage::disk('public')->putFile('uploads', $request->file('featured_image'));
                    Storage::disk('public')->delete($post->featured_image);
           
        } else {

            $path = $post->featured_image;
        }
            
            $post->title             = $request->title;
            $post->content           = $request->content;
            $post->featured_image    = $path;
            $post->userID                = Auth::user()->id;
            $post->save();
            return redirect('mng_posts')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::disk('public')->delete($post->featured_image);
        $post->delete();
      return redirect('mng_posts')->with('success','Post deleted successfully.');
        
    }
}
