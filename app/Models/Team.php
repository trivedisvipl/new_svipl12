<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

     protected $table = 'team';

    protected $fillable = [
        'name',
        'image',
        'position',
        'description',
        'linkedin',
        'mail',
        'instagram',
        'twitter',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }
}
