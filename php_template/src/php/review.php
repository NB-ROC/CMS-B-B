<?php

require_once("../AutoLoad.php");

use App\Statics\DatabaseSingleton;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    isset(DatabaseSingleton::$conn) ?: DatabaseSingleton::makeCon();

    $name = $_POST["name"];
    $mess = $_POST["message"];
    $rating = $_POST["rating"];

    $connHolder = DatabaseSingleton::$conn;

    $sql = "INSERT INTO reviews (naam, bericht, rating) VALUES (:naam, :mess, :rating)";

    $stmt = $connHolder->prepare($sql);

    $stmt->execute([
        ":naam" => $name,
        ":mess" => $mess,
        ":rating" => $rating
    ]);
}
