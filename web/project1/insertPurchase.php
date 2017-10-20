<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";
echo $_SESSION["username"];

//for the purchaseLine table
//$purchaseid
$hoverboardid = getProductID($_SESSION["hoverboard"]);
$iphonexid = getProductID($_SESSION["iphonex"]);
$timemachineid = getProductID($_SESSION["timemachine"]);
//$quantity

require("dbconnect.php");
$db = get_db();

try {

  //I'll have to write a select statement to get this value

  $query = 'INSERT INTO purchase(customerid, totalamount)
                  VALUES(:customerid, :total)';
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

?>
