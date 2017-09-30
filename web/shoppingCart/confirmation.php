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

  </body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</html>
