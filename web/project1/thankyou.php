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
$zip = $_POST["inputZip"];

echo 'username: '.$username;
echo 'password: '.$password;
echo 'email: '.$email;
echo 'address: '.$address;
echo 'city: '.$city;
echo 'state: '.$state;
echo 'zip: '.$zip;

require("confirmation.php");
$db = get_db();

$query = 'INSERT INTO purchase(name, password, email, address1, city, state, zip) VALUES(:username, :password, :email, :address, :city, :state, :zip)';
$statement = $db->prepare($query);


?>

</html>
