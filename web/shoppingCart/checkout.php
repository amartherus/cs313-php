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

<?php
//quantity values need to be saved
$_SESSION["spongebob_quantity"] = $_POST["spongebob_quantity"];
$_SESSION["patrick_quantity"] = $_POST["patrick_quantity"];
$_SESSION["squidward_quantity"] = $_POST["squidward_quantity"];
$_SESSION["gary_quantity"] = $_POST["gary_quantity"];
$_SESSION["krab_quantity"] = $_POST["krab_quantity"];
?>

    <form action="confirmation.php" method="post">
        <ul class="list-group">
          <li class="list-group-item"><img src="../photos/spongebob.png" alt="Spongebob" height="200" width="100">
          </br><?php echo "$".$_SESSION["spongebob_price"];?>
        </br><?php echo "Quantity: ".$_POST["spongebob_quantity"];?>
          <li class="list-group-item"><img src="../photos/Patrick.png" alt="Patrick" height="200" width="100">
          </br><?php echo "$".$_SESSION["patrick_price"];?>
        </br><?php echo "Quantity: ".$_POST["patrick_quantity"];?>
          <li class="list-group-item"><img src="../photos/Squidward.png" alt="Squidward" height="200" width="100">
          </br><?php echo "$".$_SESSION["squidward_price"];?>
        </br><?php echo "Quantity: ".$_POST["squidward_quantity"];?>
          <li class="list-group-item"><img src="../photos/gary_the_snail.png" alt="Gary the Snail" height="200" width="100">
          </br><?php echo "$".$_SESSION["gary_price"];?>
        </br><?php echo "Quantity: ".$_POST["gary_quantity"];?>
          <li class="list-group-item"><img src="../photos/Mr_Krabs.png" alt="Mr. Krabs" height="200" width="100">
          </br><?php echo "$".$_SESSION["krab_price"];?>
        </br><?php echo "Quantity: ".$_POST["krab_quantity"];?>
        </ul>

        <p>Please enter your address:</p></br>
        <ul class="list-group">
          <li class="list-group-item">Address: <input type="text" name="address"></br>
          <li class="list-group-item">City: <input type="text" name="city"></br>
          <li class="list-group-item">State: <input type="text" name="state"></br>
          <li class="list-group-item">Zip: <input type="text" name="zip"></br>
        </ul>

        <?php
        $_SESSION["address"] = $_POST["address"];
        $_SESSION["city"] = $_POST["city"];
        $_SESSION["state"] = $_POST["state"];
        $_SESSION["zip"] = $_POST["zip"];
        ?>

        <input type="submit" value="Complete Order">
      </form>

  </body>
</html>
