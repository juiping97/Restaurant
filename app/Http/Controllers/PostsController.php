<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        //$this -> middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Profile::whereIn('user_id',$users)->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $path = $_SERVER['HTTP_REFERER'];
        $path = pathinfo($path);
        $path = $path['basename'];

        return view('posts.create',compact('path'));  //views
        //return view('posts.create');
    }

    /*
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath=request('image')->store('uploads','public'); //照片存在storage->app>public->uploads
        $image = Image::make("https://restaurantbucket.s3.amazonaws.com/{$imagePath}")->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }
    */

    public function store(Request $request)
    {
        $data = $request->validate([

            'caption' => 'required',
            'image' => ['required'],
        ]);

        $imagePath=$request->file('image')->store('uploads','s3');

         Post::create([
             'user_id' => intval($request->path),
             'caption' => $data['caption'],
             'image' => $imagePath]);
        /*
         * auth()->user()->posts()->create([
            'user_id' => $request->path,
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);
        */

        return redirect('/profile/'.intval($request->path));
    }


    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function destroy(Post $post){

        $post->delete();

        return redirect('/profile/'.auth()->user()->id);
    }

    public function edit($post){

        $post = Post::find($post);
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request){

        $post = Post::find($request->id);
        $post->caption=$request->caption;
        $post->save();
        return redirect('/post/'.$request->id);
    }
}
