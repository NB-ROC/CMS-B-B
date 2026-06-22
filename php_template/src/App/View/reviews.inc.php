<?php
use App\Statics\Route;
use App\Statics\DatabaseSingleton;
?>

<div>


    <?php
    DatabaseSingleton::makeCon();
    $sql = "SELECT name, mess, rating FROM reviews";
    $statement = DatabaseSingleton::$conn->prepare($sql);
    $statement->execute();
    $res = $statement->fetchAll();

    foreach ($res as $result) {
        Route::render_component("review", ["data" => $result]);
    }

    Route::render_component('reviews', [])
        ?>
</div>