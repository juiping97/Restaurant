<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows= (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        return view('profiles/index ',compact('user', 'follows'));
    }

    public function edit(User $user){
        $this ->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user){

        $this-> authorize('update',$user->profile);

        $data = request()->validate([
            'restaurant_name' => '',
            'restaurant_address' => '',
            'restaurant_url' => 'url',
            'open_time' => '',
            'restaurant_info' => '',
            'restaurant_country' => '',
            'restaurant_phone' => '',
            'restaurant_avg_level' => '',
            'image' => '',
        ]);

        if(request('image')){

            #$imagePath=request('image')->store('profile','public'); //照片存在storage->app>public->uploads
            #$image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            #$image->save();
            $imagePath=request('image')->store('profile','s3'); //照片存在storage->app>public->uploads

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        //不是每個人都可以修改

        return redirect("/profile/{$user->id}");
    }
    public function destroy(User $user){

        $user->delete();
        return view('welcome');
    }

    public function taiwan(){
        $data = Profile::where('restaurant_country','=','Taiwan')->get()->paginate(10);
        return view('taiwan',['profiles' => $data]);

    }

    public function indoessia(){
        $data = Profile::all();
        return view('taiwan',['profiles' => $data]);
    }

}
