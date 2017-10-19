<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Andrew Martherus' Assignments Page</title>
    <link rel="stylesheet" href="shoppingcart.css">
    <script src="shoppingcart.js"></script>
  </head>
  <body>
Does this appear correct?</br>

    <form action="confirmation.php" method="post">
      <ul class="list-group">
        <li class="list-group-item"><img src="photos/hoverboard.jpg" alt="hoverboard" height="400" width="300">
        </br><?php echo "$".$_SESSION["hoverboard_price"];?>
      </br><?php echo "Quantity: ".$_SESSION["hoverboard_quantity"];?>
        <li class="list-group-item"><img src="photos/iphonex.jpg" alt="iphonex" height="400" width="300">
        </br><?php echo "$".$_SESSION["iphonex_price"];?>
      </br><?php echo "Quantity: ".$_SESSION["iphonex_quantity"];?>
        <li class="list-group-item"><img src="photos/timemachine.jpg" alt="time machine" height="400" width="300">
        </br><?php echo "$".$_SESSION["timemachine_price"];?>
      </br><?php echo "Quantity: ".$_SESSION["timemachine_quantity"];?>
      </ul>

        <input type="submit" value="Complete Order">
      </form>

  </body>
</html>
