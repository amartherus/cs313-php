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

    <ul class="list-group">
      <li class="list-group-item"><img src="../photos/spongebob.png" alt="Spongebob" height="200" width="100">
      </br><?php echo "$".$_SESSION["spongebob_price"];?>
    </br><?php echo "Quantity: ".$_SESSION["spongebob_quantity"];?>
      <li class="list-group-item"><img src="../photos/Patrick.png" alt="Patrick" height="200" width="100">
      </br><?php echo "$".$_SESSION["patrick_price"];?>
    </br><?php echo "Quantity: ".$_SESSION["patrick_quantity"];?>
      <li class="list-group-item"><img src="../photos/Squidward.png" alt="Squidward" height="200" width="100">
      </br><?php echo "$".$_SESSION["squidward_price"];?>
    </br><?php echo "Quantity: ".$_SESSION["squidward_quantity"];?>
      <li class="list-group-item"><img src="../photos/gary_the_snail.png" alt="Gary the Snail" height="200" width="100">
      </br><?php echo "$".$_SESSION["gary_price"];?>
    </br><?php echo "Quantity: ".$_SESSION["gary_quantity"];?>
      <li class="list-group-item"><img src="../photos/Mr_Krabs.png" alt="Mr. Krabs" height="200" width="100">
      </br><?php echo "$".$_SESSION["krab_price"];?>
    </br><?php echo "Quantity: ".$_SESSION["krab_quantity"];?>
    </ul>

  </body>

</html>
