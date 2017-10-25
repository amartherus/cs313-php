<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";
echo $_SESSION["username"]."<br>";

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
  //select statement for username
  $username = 'SELECT customerid from customer where name=:username';
  $statement = $db->prepare($username);
  $statement->bindValue(':username', $username);
	$result = $statement->execute();

  $insertPurchase = 'INSERT INTO purchase(customerid, totalamount)
                    VALUES(:customerid, :total)';

  $statement = $db->prepare($insertPurchase);

  $statement->bindValue(':customerid', $customerid);
  $statement->bindValue(':total', $total);

  $i = 0;
  foreach($db->query('SELECT * from purchase') as $test)
  {
    echo "$test[$i]";
    $i = $i+1;
  }

}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

//header("Location: confirmation.php");

//die();

?>
