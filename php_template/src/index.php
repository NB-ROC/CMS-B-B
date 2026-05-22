<?php
require_once("AutoLoad.php");

use App\Controller\DatabaseController;
use App\Controller\UserController;
use App\Statics\Route;

session_start();

$DatabaseController = new DatabaseController();

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
    "/users/{user}" => [UserController::class, "show"]
]);

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
                "login"
            ]
        ]);
        ?>
    </header>
    <main>
        <?php
        Route::render($request);
        ?>
    </main>
    <footer>

    </footer>
</body>

</html>