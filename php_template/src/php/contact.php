<?php
require_once("../AutoLoad.php");

use App\Statics\DatabaseSingleton;

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php?page=contact');
    exit();
}

isset(DatabaseSingleton::$conn) ? : DatabaseSingleton::makeCon();

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["phone"];
$mess = $_POST["message"];

$connHolder = DatabaseSingleton::$conn;

$sql = "INSERT INTO Contact (naam, email, telefoonnummer, bericht) VALUES (:naam, :email, :tel, :mess)";

$stmt = $connHolder->prepare($sql);

$stmt->execute([
    ":naam" => $name,
    ":email" => $email,
    ":tel" => $tel,
    ":mess" => $mess
]);

header('Location: ../index.php?page=contact');
exit();