<?php
  session_start();


  $username = $_POST["userName4"];
  $oldPassword = $_POST["oldPassword4"];
  $newPassword = $_POST["newPassword4"];

  require("dbconnect.php");
  $db = get_db();

  try {
    $query = 'UPDATE customer SET password=:newPassword
              WHERE name=:username AND password=:oldPassword'
    $statement = $db->prepare($query);

    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $hashedPassword);
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
  	echo "Error with DB. Details: $ex";
  	die();
  }
?>
