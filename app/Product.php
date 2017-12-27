<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Search\ProductIndexConfigurator;

class Product extends Model
{
    use Searchable;

    protected $indexConfigurator = ProductIndexConfigurator::class;

    protected $searchRules = [
        //
    ];

    protected $mapping = [
        'properties' => [
            'id' => [
                'type' => 'integer',
            ],
            'name' => [
                'type' => 'text'
            ],
            'brand_id' => [
                'type' => 'integer',
            ],
            'category_id' => [
                'type' => 'integer',
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
        'attributes' => 'array'
    ];
    protected $table = 'products';

    // Each product has a brand
    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    // Each product has a category
    public function category(){
        // return $this->belongsTo('Category');
        return $this->belongsTo('App\Category');
    }

}