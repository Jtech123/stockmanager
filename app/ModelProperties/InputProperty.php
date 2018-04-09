<?php
/**
 * Created by PhpStorm.
 * User: jurri
 * Date: 4/9/2018
 * Time: 7:33
 */

namespace App\ModelProperties;


class InputProperty extends ModelProperty
{
    public static function overview($field) {

    }

    public static function detail($field, $data) {
        $html = "<div class='form-group'>";
        $html .= "<label for='{$field['name']}'>" . __($field['label']) . "</label>";
        $html .= "<input readonly type='" . $field['type'] . "' class='form-control' id='" . $field['name'] . "' name='" . $field['name'] . "' value='" . $data . "'>";
        $html .= "</div>";

        return $html;
    }

    public static function edit($field, $data) {
        $required = (isset($field['required']) && $field['required']) ? 'required' : '';
        $html = "<div class='form-group'>";
        $html .= "<label for='{$field['name']}'>" . __($field['label']) . "</label>";
        $html .= "<input type='" . $field['type'] . "' class='form-control' id='" . $field['name'] . "' name='" . $field['name'] . "' " . $required . " value='" . $data . "'>";
        $html .= "</div>";

        return $html;
    }

    public static function create($field) {

    }
}