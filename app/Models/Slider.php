<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
     protected $table = 'slider';

    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }
}
