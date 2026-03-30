<?php
require_once("../AutoLoad.php");
use App\Controller\DatabaseController;

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php?page=login');
    exit();
}

$un = $_POST["username"];
$pw = $_POST["password"];

$dbcontrol = new DatabaseController();

$activeuser = $dbcontrol->login($un, $pw);

if ($activeuser !== null) {
    $_SESSION["activeuser"] = $activeuser;
    header('Location: ../index.php?page=home');
    exit();
} else {
    header('Location: ../index.php?page=login');
    exit();
}