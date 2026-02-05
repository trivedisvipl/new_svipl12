<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $table = 'blog';

    protected $fillable = [
        'blog_category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'posted_by_image',
        'posted_by',
        'date',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',

    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }



    public function blogCategory(){

        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }


}
