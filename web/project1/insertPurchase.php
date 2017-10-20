<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";

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
  foreach ($db->query('SELECT customerid
                      from customer
                      where name=$_SESSION["username"]
                      AND password=$_SESSION["password"]') as $customerid);
  {
    echo "customerid: ".$customerid."</br>";
  }

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
