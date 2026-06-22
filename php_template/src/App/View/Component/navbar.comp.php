<?php
use App\Statics\Route;
?>

<header class="w-full h--[100px] bg-white flex items-center px-[120px] border-b border-[#e0e0e0]" >
    <div class="w-[150px] h-[100px] object-contain">
        <img  src="/images/imagegroot.png" alt="Calm Corner hotel">
    </div>

    <nav>
        <?php 
            foreach($pages as $page){
                echo("<a href='". Route::linkTo($page)."'>$page</a>");
            }
        ?>
    </nav>
</header>
