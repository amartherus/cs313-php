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
          <li class="list-group-item"><img src="../photos/spongebob.png" alt="Spongebob" height="200" width="100">
          <li class="list-group-item"><img src="../photos/Patrick.png" alt="Patrick" height="200" width="100">
          <li class="list-group-item"><img src="../photos/Squidward.png" alt="Squidward" height="200" width="100">
          <li class="list-group-item"><img src="../photos/gary_the_snail.png" alt="Gary the Snail" height="200" width="100">
          <li class="list-group-item"><img src="../photos/Mr_Krabs.png" alt="Mr. Krabs" height="200" width="100">
        </ul>

        <p>Please enter your address:</p></br>
        <ul class="list-group">
          <li class="list-group-item">Address: <input type="text" name="address"></br>
          <li class="list-group-item">City: <input type="text" name="city"></br>
          <li class="list-group-item">State: <input type="text" name="state"></br>
          <li class="list-group-item">Zip: <input type="text" name="zip"></br>
        </ul>

        <input type="submit" value="Complete Order">
      </form>

  </body>
</html>
