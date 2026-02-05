<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    //
       protected $table = 'portfolio_image';

    protected $fillable = [
        'portfolio_id',
        'image',
        'sess_id',
        'disp_order',
        'status'
    ];

    public function scopeActive($query) {

        return $query->whereStatus(1);
    }
     public function portfolio(){

        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }
}
