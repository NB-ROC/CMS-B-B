<?php
namespace App\Controller;

use App\Models\Users;
use App\Statics\Route;

class UserController
{
    public static function index()
    {
        $users = Users::get();

        return Route::render("users.index", ["Users" => $users]);
    }

    public static function show($user)
    {
        $seluser = Users::get((int)$user);
        return Route::render("users.show", ["Users" => $seluser]);
    }
}