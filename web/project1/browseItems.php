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

    <!-- log in form -->
    <form action="login.php" method="post">

  <div class="login">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required></br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required></br>

    <button type="submit">Login</button>
  </div>
  </form>

   <?php
    $badLogin = $_SESSION["badLogin"];
     if($badLogin)
       echo "<div class='alert alert-danger'><strong>Danger!</strong></div>";

</html>
