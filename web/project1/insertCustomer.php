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

try {
  echo "here1\n";

$query = "INSERT INTO customer(name, password, email, address1, city, state, zip)
                VALUES(:username, :password, :email, :address, :city, :state, :zip)";
echo "here2\n";
$statement = $db->prepare($query);
echo "here3\n";

$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->bindValue(':email', $email);
$statement->bindValue(':address', $address);
$statement->bindValue(':city', $city);
$statement->bindValue(':state', $state);
$statement->bindValue(':zip', $zip);

$statement->execute();

}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB.";
	die();
}

header("Location: browseItems.php");

die();

?>
