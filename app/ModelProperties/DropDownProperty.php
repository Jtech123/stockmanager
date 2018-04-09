<?php
/**
 * Created by PhpStorm.
 * User: jurri
 * Date: 4/9/2018
 * Time: 7:50
 */

namespace App\ModelProperties;


class DropDownProperty extends ModelProperty
{
    public  static function overview($field)
    {
        // TODO: Implement overview() method.
    }

    public  static function detail($field, $data)
    {
        $html = "<div class='form-group'>";
        $html .= "<label for='{$field['name']}'>" . __($field['label']) . "</label>";
        $html .= "<input readonly type='text' class='form-control' id='" . $field['name'] . "' name='" . $field['name'] . "' value='" . $data . "'>";
        $html .= "</div>";

        return $html;
    }

    public  static function edit($field, $data)
    {
        $items = $field['model']::all();

        $html = "<div class='form-group'>";
        $html .= "<label for='" . $field['name'] . "'>" . __($field['label']) . "</label>";
        $html .= "<select class='form-control'>";
        foreach ($items as $item) {
            echo "<option value='{$item['id']}'>{$item['name']}</option>";
        }
        $html .= "</select>";
        $html .= "</div>";

        return $html;
    }

    public  static function create($field)
    {
        $html = "<div class='form-group'>";
        $html .= "<label for='" . $field['name'] . "'>" . __($field['label']) . "</label>";
        $html .= "<select class='form-control'>";

        $html .= "</select>";
        $html .= "</div>";
    }
}