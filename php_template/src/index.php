<?php
require_once("AutoLoad.php");

use App\Controller\DatabaseController;
use App\Controller\UserController;
use App\Controller\UploadImageController;
use App\Statics\Route;
use App\Statics\Settings;
use App\Statics\Storage;

require_once("Routes/web.php");

Settings::init_settings();

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
    "/uploadFile" => "uploadFile",
    "/processUpload"=> [UploadImageController::class,"index"],

$DatabaseController = new DatabaseController();
$Storage = new Storage();

$request = Route::get_uri();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/tailwind.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <title><?php echo $request ?></title>
</head>

<body class="bg-gray-700 text-white">
    <header>
        <?php
        Route::render_component("navbar", [
            "pages" => [
                "home",
                "kamers",
                "galerij",
                "reserveringen",
                "contact",
                "register",
                "login",
                "uploadFile"
            ]
        ]);
        ?>
    </header>
    <main>
        <?php
        Route::render($request, ["Storage" => $Storage]);
        ?>
    </main>
    <footer>
        <?php
        Route::render_component("reviews", []);
        ?>
    </footer>
</body>

</html>