<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class); //the relationship between profile and user
    }

    public function profileImage(){

        $imagePath = ($this->image) ? $this->image : 'profile/G4wxjVO1ohyRXa0cjzF1nVqch9Ho13kBm758OW5X.jpg';
        return $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
