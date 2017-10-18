<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<h1>
  Thank you for joining us!
</h1>
<?php

$username = $_POST["inputuserName4"];
$password = $_POST["inputPassword4"];
$email = $_POST["inputemail4"];
$address = $_POST["inputAddress"];
$city = $_POST["inputCity"];
$state = $_POST["inputState"];

echo 'username: '.$username;


?>

</html>
