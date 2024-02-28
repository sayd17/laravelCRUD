<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    // public function like($user = null){
    //     $user = $user ?: auth()->$user();
    //     return $this->likes()->attach($user()); 
    // }

    
    // public function likes(){
    //     return $this->belongsToMany(User::class);
    // }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * Get the post's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }


}
