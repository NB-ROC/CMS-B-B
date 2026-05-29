<?php
use App\Statics\Route;
?>

<header class="header">
    <div class="logo">
        <img src="/images/imagegroot.png" alt="Calm Corner hotel">
    </div>

    <nav>
        <?php 
            foreach($pages as $page){
                echo("<a href='". Route::linkTo($page)."'>$page</a>");
            }
        ?>
    </nav>
</header>
