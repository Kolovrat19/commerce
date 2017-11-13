<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Cast attributes JSON to array
    protected $casts = [
        'attributes' => 'array'
    ];

    protected $table = 'products';

    // Each product has a brand
    public function brand(){
        return $this->belongsTo('Brand');
    }

    // Each product has a category
    public function category(){
       // return $this->belongsTo('Category');
        return $this->belongsToMany('App\Category', 'products_categories');
    }
}
