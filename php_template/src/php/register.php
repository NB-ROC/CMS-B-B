<?php
require_once("../AutoLoad.php");
use App\Controller\DatabaseController;

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php?page=register');
    exit();
}

$un = $_POST["username"];
$pw = $_POST["password"];
$fn = $_POST["firstname"];
$ln = $_POST["lastname"];
$em = &$_POST["email"];

$dbcontrol = new DatabaseController();

$dbcontrol->registerUser($un, $pw, $fn, $ln, $em);

header('Location: ../index.php?page=login');
exit();
