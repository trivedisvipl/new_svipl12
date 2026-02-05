<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    //

    protected $table = 'expertise';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
         'meta_title',
        'meta_keywords',
        'meta_description',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }
}
