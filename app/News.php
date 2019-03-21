<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'main_photo', 'category_id', 'photos'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
