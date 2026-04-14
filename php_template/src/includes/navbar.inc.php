<?php
    use App\Controller\GeneralController;
?>

<div class="logo">
    <img src="images/imagegroot.png" alt="Calm Corner hotel">
</div>

<nav>
    <?php 
        $pages = [
            "kamers" => "/kamers",
            "galerij",
            "reserviring",
            "contact",
            "login"
        ];
        
        echo "<a href='index.php'>Home</a>";

        foreach($pages as $page){
            echo("<a href=". GeneralController::linkTo($page)."> $page </a>");
        }
    ?>
</nav>