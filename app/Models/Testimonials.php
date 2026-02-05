<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    //

    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'country',
        'position',
        'description',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }
}
