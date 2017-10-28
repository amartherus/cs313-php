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
require("dbconnect.php");
$db = get_db();

foreach ($db->query('SELECT product.name, purchaseline.quantity, purchase.totalamount from product
                      inner join purchaseLine on product.productID = purchaseLine.productID
                      inner join purchase on purchaseLine.purchaseID = purchase.purchaseID') as $purchase)
{

}

foreach ($db->query('SELECT * FROM customer WHERE name=:username') as $customer)
{
}

print "$purchase[0] "."$purchase[1]</br>";
print "Order Total: "."$purchase[2]</br>";
print "Thank you for your purchase "."$customer[0]!";

?>

</body>
</html>
