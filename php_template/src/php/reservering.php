<?php
require_once("../AutoLoad.php");

use App\Controller\DatabaseController;

$checkin= $_POST["checkIn"];
$checkOut = $_POST["checkOut"];
$persons = $_POST["persons"];

print($checkin);
print($checkOut);
print($persons);

