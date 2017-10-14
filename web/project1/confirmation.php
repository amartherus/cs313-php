<?php
session_start();
?>

<!DOCTYPE html>
<html>
<h1>
  Order Confirmation
</h1>
<body>

<?php

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {

}

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

foreach ($db->query('SELECT * from product
                      inner join purchaseLine on product.productID = purchaseLine.productID
                      inner join purchase on purchaseLine.purchaseID = purchase.purchaseID') as $purchase)
{
  print "$row[0]";
}

foreach ($db->query('SELECT * from customer where name=\'andrew\'') as $customer)
{
}

print "Thank you for your purchase "."$row[1]!";

?>

</body>
</html>
