<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
      protected $table = 'career';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'skills',
        'notice_period',
        'experience',
        'resume',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }

}
