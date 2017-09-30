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
  <h1>Welcome to the Spongebob Date page! </br>Buy a date with your favorite Spongebob character!</h1>
  <body>
    <form action="cart.php" method="post">
      <ul class="list-group">
        <li class="list-group-item"><img src="../photos/spongebob.png" alt="Spongebob" height="200" width="100">
        </br><p name="spongebob_price">100.00</p>
        </br><input type="number" name="spongebob_quantity"></li>
        <li class="list-group-item"><img src="../photos/Patrick.png" alt="Patrick" height="200" width="100">
        </br><p name="patrick_price">100.00</p>
          </br><input type="number" name="patrick_quantity"></li>
        <li class="list-group-item"><img src="../photos/Squidward.png" alt="Squidward" height="200" width="100">
        </br><p name="squidward_price">100.00</p>
          </br><input type="number" name="squidward_quantity"></li>
        <li class="list-group-item"><img src="../photos/gary_the_snail.png" alt="Gary the Snail" height="200" width="100">
        </br><p name="gary_price">100.00</p>
          </br><input type="number" name="gary_quantity"></li>
        <li class="list-group-item"><img src="../photos/Mr_Krabs.png" alt="Mr. Krabs" height="200" width="100">
        </br><p name="krab_price">100.00</p>
          </br><input type="number" name="krab_quantity"></li>
      </ul>
    </br>
      <input type="submit" value="Click to view your cart">
    </form>
  </br>

  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</html>
