<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Andrew Martherus' Assignments Page</title>
    <link rel="stylesheet" href="shoppingcart.css">
    <script src="shoppingcart.js"></script>
  </head>
  <h1>Get the best electronics at the lowest prices!</h1>
  <body>
    <form action="cart.php" method="post">
      <ul class="list-group">
        <li class="list-group-item"><img src="photos/hoverboard.jpg" alt="hoverboard" height="200" width="100">
        </br><p name="hoverboard_price">$100.00</p>
      </br><input type="number" name="hoverboard_price"></li>
        <li class="list-group-item"><img src="../photos/iphonex.jpg" alt="iphonex" height="200" width="100">
        </br><p name="iphonex_price">$998.00</p>
      </br><input type="number" name="iphonex_price"></li>
        <li class="list-group-item"><img src="/photos/timemachine.jpg" alt="time machine" height="200" width="100">
        </br><p name="timemachine_price">$14.00</p>
      </br><input type="number" name="timemachine_price"></li>

      </ul>
    </br>

    <?php
    //price values need to be saved
    $_SESSION["hoverboard_price"] = 100.00;
    $_SESSION["iphonex_price"] = 998.00;
    $_SESSION["timemachine_price"] = 14.00;

     ?>

      <input type="submit" value="Click to view your cart">
    </form>
  </br>

  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</html>
