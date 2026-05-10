<?php
use App\Statics\Route;
?>

<div class="logo">
    <img src="/images/imagegroot.png" alt="Calm Corner hotel">
</div>

<nav>
    <?php 
        foreach($pages as $page){
            echo("<a href=". Route::linkTo($page)."> $page </a>");
        }
    ?>
</nav>