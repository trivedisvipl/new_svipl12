<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //

    protected $table = 'portfolio';

    protected $fillable = [
        'portfolio_category_id',
        'title',
        'slug',
        'image',
        'short_description',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status'
    ];

    public function scopeActive($query) {
        return $query->whereStatus(1);
    }



    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }


    public function portfolioImages(){

        return $this->hasMany(PortfolioImage::class, 'portfolio_id')->orderBy('disp_order', 'asc');
    }
}
