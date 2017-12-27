<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;
use Baum\Node;
use App\Search\CategoryIndexConfigurator;

class Category extends Node
{
    use Searchable;

    protected $indexConfigurator = CategoryIndexConfigurator::class;

    protected $searchRules = [
        //
    ];

    protected $mapping = [
        'dynamic' => false,
        'properties' => [
            'id' => [
                'type' => 'integer'
            ],
            'name' => [
                'type' => 'text'
            ],
            'attributes' => [
                'properties' => [
                    'name' => [
                        'type' => 'keyword'
                    ],
                    'variant' => [
                        'type' => 'keyword'
                    ]
                ]
            ]
        ]
    ];

    // Cast attributes JSON to array
    protected $casts = [
        'category_attributes' => 'array'
    ];

    protected $table = 'categories';

    // A category has many products
    public function products(){

        return $this->hasMany('App\Product');
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

        return ($includeRootNode) ? ['' => _('ROOT')] + $categories : $categories;
    }

}