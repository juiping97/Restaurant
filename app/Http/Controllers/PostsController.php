<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Profile::whereIn('user_id',$users)->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');  //views
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        $imagePath=request('image')->store('uploads','s3'); //照片存在storage->app>public->uploads

        #$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        #$image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Models\Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
