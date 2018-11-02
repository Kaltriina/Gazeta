<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    public function user()
    {   // Post -> i perket ( user)-menyra implicite
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}