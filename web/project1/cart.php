<?php
session_start();

//quantity values need to be saved
$_SESSION["hoverboard_quantity"] = $_POST["hoverboard_quantity"];
$_SESSION["iphonex_quantity"] = $_POST["iphonex_quantity"];
$_SESSION["timemachine_quantity"] = $_POST["timemachine_quantity"];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Project 1 cart</title>
    <link rel="stylesheet" href="shoppingcart.css">
    <script src="shoppingcart.js"></script>
  </head>
  <body>

<form action="checkout.php" method="post">
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

    <button Onclick="window.location.href='browseItems.php'"type="button" class="btn">Go Back to Browsing</button>

    <?php

    ?>

    <input type="submit" value="Click to Check Out">
  </form>


  </body>
</html>
