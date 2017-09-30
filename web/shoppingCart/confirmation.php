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

    <?php echo "Address: ".$_SESSION["address"];?></br>
    <?php echo "City: ".$_SESSION["city"];?></br>
    <?php echo "State: ".$_SESSION["state"];?></br>
    <?php echo "Zip: ".$_SESSION["zip"];?></br>

  </body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</html>
