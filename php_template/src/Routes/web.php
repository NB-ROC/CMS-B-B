<?php
use App\Statics\Route;
use App\Controller\UserController;


Route::register_routes([
    "/" => "home",
    "/admin" => "admin",
    "/contact" => "contact",
    "/galerij" => "galerij",
    "/kamers" => "kamers",
    "/login" => "login",
    "/register" => "register",
    "/reserveringen" => "reserveringen",
    "/users" => [UserController::class, "index"],
    "/users/{user}" => [UserController::class, "show"],
    "/uploadFile" => "uploadFile"
]);



