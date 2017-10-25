<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

$username = $_SESSION["username"];

require("dbconnect.php");
$db = get_db();
try {

  //select statements for the 3 products
  foreach($db->query('SELECT productid from product where name=\'hoverboard\'') as $hoverboardid)
  {
    //echo "$hoverboardid[0]";
  }
  foreach($db->query('SELECT productid from product where name=\'iphonex\'') as $iphonexid)
  {
    //echo "$iphonexid[0]";
  }
  foreach($db->query('SELECT productid from product where name=\'timemachine\'') as $timemachineid)
  {
    //echo "$timemachineid[0]";
  }
  //select statement for customerid
  $query = 'SELECT customerid from customer where name=:username';
  $statement = $db->prepare($query);
  $statement->bindValue(':username', $username);
	$result = $statement->execute();

  //this is now the customerid of a given username
  $customerid = $statement->fetch();
  $customerid = $customerid['customerid'];

  $insertPurchase = 'INSERT INTO purchase(customerid, totalamount)
                    VALUES(:customerid, :total)';

  $statement = $db->prepare($insertPurchase);

  $statement->bindValue(':customerid', $customerid);
  $statement->bindValue(':total', $total);
  $result = $statement->execute();

}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: confirmation.php");

die();

?>
