<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'buy_price', 'sell_price', 'article_number', 'quantity'];

    public static $title = 'product.title';

    public static $overviewRoute = "/products/";
    public static $detailRoute = "/products/detail/";
    public static $editRoute = "/products/edit/";
    public static $deleteRoute = "/products/delete/";
    public static $createRoute = "/products/add";

    public static $fields = [
        [
            'name' => 'name',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'text',
            'label' => 'product.name',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'description',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'text',
            'label' => 'product.description',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'buy_price',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'number',
            'label' => 'product.buy_price',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'sell_price',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'number',
            'label' => 'product.sell_price',
            'required' => false,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'article_number',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'number',
            'label' => 'product.article_number',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'supplier',
            'property' => ModelProperties\DropDownProperty::class,
            'model' => Supplier::class,
            'type' => 'supplier',
            'label' => 'product.supplier',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ],
        [
            'name' => 'quantity',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'number',
            'label' => 'product.stock',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ]
    ];
}
