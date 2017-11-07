<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Category extends Node
{
    protected $table = 'categories';

    
    // A category has many products
    public function products(){
        //return $this->hasMany('Product');
        return $this->belongsToMany('Product', 'products_categories');
    }



}
