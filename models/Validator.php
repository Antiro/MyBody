<?php

namespace app\models;

session_start();

class Validator
{
    public static function preProcessing($data)
    {
        return htmlspecialchars(trim($data));
    }

    public static function validLength($name, $data, $field, $minLength = 3, $maxLength = 50)
    {
        if (mb_strlen($data) < $minLength) {
            $_SESSION['errors'][$field] = "В поле указано не мении $minLength символов \n";

            return false;
        }
        if (strlen($data) > $maxLength) {
            $_SESSION['errors'][$field] = "В поле указано не более $minLength символов \n";

            return false;
        }
        unset ($_SESSION['errors'][$field]);
        return true;
    }
}

