<?php
require_once("AutoLoad.php");

use App\Controller\DatabaseController;
use App\Controller\GeneralController;

session_start();
isset($_GET['page']) ? $page = $_GET['page'] : $page = "home";

if (isset($_SESSION["activeuser"])) {
    var_dump($_SESSION["activeuser"]);
}


$DatabaseController = new DatabaseController();
$GeneralController = new GeneralController();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo ucfirst($page); ?>
    </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="icon" type="image/png" sizes="128x128" href="images/imagelogofavicon.png">

    <!-- Favicon moet hier -->
    <link rel="icon" type="image/png" sizes="128x128" href="images/imagelogofavicon.png">
</head>

<body>
    <header class="header">
        <?php include("includes/navbar.inc.php") ?>
    </header>

    <main>
        <?php include("includes/$page.inc.php") ?>
    </main>

    <footer>
        <p>© 2026 Calm Corner · Contact · Reserveren</p>
    </footer>
</body>

</html>