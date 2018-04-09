<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name'];

    public static $title = 'supplier.title';

    public static $overviewRoute = "/suppliers/";
    public static $detailRoute = "/suppliers/detail/";
    public static $editRoute = "/suppliers/edit/";
    public static $deleteRoute = "/suppliers/delete/";
    public static $createRoute = "/suppliers/add";
    public static $insertRoute = "/suppliers/create";

    public static $fields = [
        [
            'name' => 'name',
            'property' => ModelProperties\InputProperty::class,
            'type' => 'text',
            'label' => 'supplier.name',
            'required' => true,
            'detail' => true,
            'edit' => true,
            'create' => true
        ]
    ];
}
