<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
       protected $table = 'client';
     protected $fillable = [
        'name',
        'image',
        'position',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }


}
