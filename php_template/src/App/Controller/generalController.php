<?php

namespace App\Controller;

class GeneralController
{
    public static function linkToAction(string $action)
    {
        return "php/$action.php";
    }

    public static function linkTo(string $location)
    {
        return "index.php?page=$location";
    }


}

