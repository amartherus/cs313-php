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

require("dbconnect.php");
$db = get_db();

$query = 'INSERT INTO customer(name, password, email, address1, city, state, zip) 
                VALUES(:username, :password, :email, :address, :city, :state, :zip)';
$statement = $db->prepare($query);

$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->bindValue(':email', $email);
$statement->bindValue(':address', $address);
$statement->bindValue(':city', $city);
$statement->bindValue(':state', $state);
$statement->bindValue(':zip', $zip);

$statement->execute();

header("Location: browseItems.php");

die();

?>

</html>
