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
        return $this->belongsToMany('App\Product', 'products_categories');
    }

    // Static Methods ==============================================================

    /**
     * Get all categories in a unidimensional array, ideal for being used in a form select dropdown.
     *
     * @param  boolean
     * @return array
     */
    public static function dropdown($includeRootNode = true)
    {
        $categories = self::getNestedList('name', null, '--');

        return ($includeRootNode) ? ['' => _('Root')] + $categories : $categories;
    }



}
