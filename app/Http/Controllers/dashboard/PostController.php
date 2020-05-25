<?php

namespace App\Http\Controllers\dashboard;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;

class PostController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function _construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        
        return view ('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/post/post", ['post' => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        //dd($request->validated());

       // echo "Hola mundo ".$request->title."<br>";
       // echo "\rHola mundo ".$request->url_clean."<br>";
       // echo "\rHola mundo ".$request->content."<br>";

       Post::create($request->validated());

       return back()->with('status','Post created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
            return view('dashboard/post/show', ['post'=> $post]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard/post/edit', ['post'=> $post]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());
       return back()->with('status','Post updated succesfully');
    }

    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image'=> 'required|mimes:jpeg,bmp,png|max:10240'
        ]);
        $filename = time() .".".$request->image->extension();
        //echo $filename;
        $request->image->move(public_path(),$filename);
       return back()->with('status','Post updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return back()->with('status','Post deleted succesfully');
    }



}
