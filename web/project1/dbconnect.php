<?php

// default Heroku Postgres configuration URL

function get_db() {
  $db = NULL;
  $dbUrl = getenv('DATABASE_URL');

  if (empty($dbUrl)) {
    echo "I have an empty dburl!!!";
  }

  $dbopts = parse_url($dbUrl);

  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');

  try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }
  catch (PDOException $ex) {
    print "<p>error: $ex->getMessage() </p>\n\n";
    die();
  }

  return $db;
}

?>
