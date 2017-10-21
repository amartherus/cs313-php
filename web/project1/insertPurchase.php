<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";
echo $_SESSION["username"]."<br>";

$username = $_SESSION["username"];
$username = mysql_real_escape_string($username);

//for the purchaseLine table
//$purchaseid



echo $hoverboardid;
//$quantity

require("dbconnect.php");
$db = get_db();

try {

  //select statements for the 3 products
  $db->query("SELECT productid from product where name='hoverboard'") as $hoverboardid
  $db->query($iphonexid = "SELECT productid from product where name='iphonex'") as $iphonexid
  $db->query($timemachineid = "SELECT productid from product where name='timemachine'") as $timemachineid
  echo "hoverboardid: ".$hoverboardid."</br>";
  echo "iphonexid: ".$iphonexid."</br>";
  echo "timemachineid: ".$timemachineid."</br>";

  //get the customerid
  $db->query("SELECT customerid from customer where name='$username'") as $customerid;
  echo "customerid: ".$customerid."</br>";

  $insertPurchase = 'INSERT INTO purchase(customerid, totalamount)
                    VALUES(:customerid, :total)';

  $statement = $db->prepare($insertPurchase);

  $statement->bindValue(':customerid', $customerid);
  $statement->bindValue(':total', $total);
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

?>
