<?php

//Code derived from:
//https://github.com/byui-burton/cs313-course-dev/blob/master/week07/ta-solution/signIn.php

// Start the session
session_start();

if (isset($_POST['username']) && isset($_POST['password']))
{
	// they have submitted a username and password for us to check
  $username = $_POST["username"];
  $password = $_POST["password"];
  $_SESSION["username"] = $_POST["username"];
  $_SESSION["password"] = $_POST["password"];

	// Connect to the DB
	require("dbconnect.php");
	$db = get_db();
	$query = 'SELECT password FROM customer WHERE name=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
      echo "here1";
			//header("Location: browseItems.php");
			//die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
      $_SESSION[badLogin] = $badLogin;
      echo "here2";
      //header("Location: browseItems.php");
      ///die(); // we always include a die after redirects.
		}
	}
	else
	{
		$badLogin = true;
    $_SESSION[badLogin] = $badLogin;
    echo "here3";
    //header("Location: browseItems.php");
    //die(); // we always include a die after redirects.
	}
}
?>
