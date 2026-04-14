<div>
    Check In <?php echo $_POST["checkIn"]; ?>
    <br>
    Check Out 
    <?php 
        if($_POST["checkOut"] == ""){
            echo "empty field";
        }else{
            echo $_POST["checkOut"]; 
        }
    ?>
    <br>
    Total persons<?php echo $_POST["persons"]; ?>
</div>

<?php
require_once("../AutoLoad.php");

use App\Controller\DatabaseController;

$_POST["checkIn"];
$_POST["checkOut"];
$_POST["persons"];