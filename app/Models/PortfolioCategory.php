<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    //
    protected $table = 'portfolio_category';

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }

    public function portfolio(){

        return $this->hasMany(Portfolio::class, 'portfolio_category_id');
    }
}
