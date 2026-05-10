<?php
require_once("App/Statics/databaseSingleton.php");

use App\Statics\DatabaseSingleton;

DatabaseSingleton::makeCon();

$conn = DatabaseSingleton::$conn;

print("connection established");