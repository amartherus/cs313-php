<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Andrew Martherus' Assignments Page</title>
  </head>
  <body>

    <h1>Your Order has been placed!</h1>

    <?php echo "Address: ".$_POST["address"];?></br>
    <?php echo "City: ".$_POST["city"];?></br>
    <?php echo "State: ".$_POST["state"];?></br>
    <?php echo "Zip: ".$_POST["zip"];?></br>

  </body>

</html>
