<!DOCTYPE html>
<html>
  <head>
    <title>Andrew Martherus' Assignments Page</title>
    <link rel="stylesheet" href="shoppingcart.css">
    <script src="shoppingcart.js"></script>
  </head>
  <body>
<form action="checkout.php" method="post">
    <ul class="list-group">
      <li class="list-group-item"><img src="../photos/spongebob.png" alt="Spongebob" height="200" width="100">
        </br><?php echo $_POST["spongebob_quantity"];
        $spongebob_quantity = $_POST["spongebob_quantity"]?>
      <li class="list-group-item"><img src="../photos/Patrick.png" alt="Patrick" height="200" width="100">
        </br><?php echo $_POST["patrick_quantity"]; ?>
      <li class="list-group-item"><img src="../photos/Squidward.png" alt="Squidward" height="200" width="100">
        </br><?php echo $_POST["squidward_quantity"]; ?>
      <li class="list-group-item"><img src="../photos/gary_the_snail.png" alt="Gary the Snail" height="200" width="100">
        </br><?php echo $_POST["gary_quantity"]; ?>
      <li class="list-group-item"><img src="../photos/Mr_Krabs.png" alt="Mr. Krabs" height="200" width="100">
        </br><?php echo $_POST["krab_quantity"]; ?>
    </ul>

    <button Onclick="window.location.href='browseItems.html'"type="button" class="btn">Go Back to Browsing</button>
    <input type="submit" value="Click to Check Out">
  </form>


  </body>
</html>
