<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Category;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('id', 'DESC')->get();
        return view ('post.index',['posts' => $posts]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Post; 
        
        if($request->hasFile('photo')) 
        {
        $image = $request->file('images');
        $new_name = $image->getClientOriginalName();
        $image->move(public_path('images'), $new_name);   
        $store->images = $new_name; 
        }
        
        $store->title = $request['title'];
        $store->content = $request['content'];
        
        $store->user_id = Auth::id();
        $store->save();     
        return redirect('posts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $show = Post::find($id);

        return view('post.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Post::find($id);

        $image = $request->file('images');
        $new_name = $image->getClientOriginalName();
        $image->move(public_path('images'), $new_name);  
        
        $update->title = $request['title'];
        $update->content = $request['content'];
        $update->images= $new_name;
        $update->save();

        return redirect('posts/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $destroy = Post::find($id);

        $destroy->delete();

        return redirect('posts/index');
    }
}
