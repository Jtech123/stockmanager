<?php
/**
 * Created by PhpStorm.
 * User: jurri
 * Date: 4/9/2018
 * Time: 7:50
 */

namespace App\ModelProperties;


abstract class ModelProperty
{
    public abstract static function overview($field);

    public abstract static function detail($field, $data);

    public abstract static function edit($field, $data);

    public abstract static function create($field);
}