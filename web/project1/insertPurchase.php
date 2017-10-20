<?php
session_start();

//for the purchase table
//$customerid
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";

//for the purchaseLine table
//$purchaseid
//$productid
//$quantity


require("dbconnect.php");
$db = get_db();
?>
