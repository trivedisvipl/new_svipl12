<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    //

    protected $table = 'blog_category';

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }

    public function blog(){

        return $this->hasMany(Blog::class, 'blog_category_id');
    }
}
