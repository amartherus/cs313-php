<?php
session_start();

//for the purchase table
$total = $_SESSION["hoverboard_price"]*$_SESSION["hoverboard_quantity"] +
        $_SESSION["iphonex_price"]*$_SESSION["iphonex_quantity"] +
        $_SESSION["timemachine_price"]*$_SESSION["timemachine_quantity"];

echo "total: ".$total."<br>";
echo $_SESSION["username"]."<br>";

//$username = $_SESSION["username"];
//$username = mysql_real_escape_string($username);

//for the purchaseLine table
//$purchaseid

//$quantity

require("dbconnect.php");
$db = get_db();

  //select statements for the 3 products
  foreach($db->query('SELECT * from product') as $hoverboardid)
  {
    print "$hoverboardid[0]";
  }
  foreach($db->query($iphonexid = 'SELECT productid from product where name=\'iphonex\'') as $iphonexid)
  {
    print "2";
  }
  foreach($db->query($timemachineid = 'SELECT productid from product where name=\'timemachine\'') as $timemachineid)
  {
    print "3";
  }

/*  print "hoverboardid: ".$hoverboardid."</br>";
  print "iphonexid: ".$iphonexid."</br>";
  print "timemachineid: ".$timemachineid."</br>";

  //get the customerid
  $db->query("SELECT customerid from customer where name='$username'") as $customerid;
  echo "customerid: ".$customerid."</br>";

  $insertPurchase = 'INSERT INTO purchase(customerid, totalamount)
                    VALUES(:customerid, :total)';

  $statement = $db->prepare($insertPurchase);

  $statement->bindValue(':customerid', $customerid);
  $statement->bindValue(':total', $total);
  */

?>
