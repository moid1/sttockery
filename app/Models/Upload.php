<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function disLikes(){
        return $this->hasMany(Dislike::class);
    }
}
