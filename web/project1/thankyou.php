<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<?php

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {

}

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

$db->query(INSERT INTO customer (CustomerID, name, password, email, address1, city, state, zip)
VALUES (1, $_POST["inputuserName4"], $_POST["inputPassword4"], $_POST["inputemail4"], $_POST["inputuserName4"],
$_POST["inputAddress"], $_POST["inputCity"], $_POST["inputState"]);


?>

</html>
