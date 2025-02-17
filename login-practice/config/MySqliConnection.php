<?php
$serverName = "Localhost";
$ServerUsername = "root";
$ServerPassword = "";
$dataBaseName = "blogsWebsite";

$ServerConnect = new mysqli($serverName, $ServerUsername, $ServerPassword);
if ($ServerConnect->connect_error) {
  die("Connection Failed:" . $ServerConnect->connect_error);
}
else{
  echo "server connect";
}
// Create DATABASE
// $createDatabaseQuery = "CREATE DATABASE blogsWebsite";
$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $dataBaseName";

//Execute Query
if ($ServerConnect->query($createDatabaseQuery) !== TRUE) {
  echo "Error creating database:" . $ServerConnect->error;
}
else{
  echo "database created";
}

// if (mysqli_query($ServerConnect, $createDatabaseQuery) === TRUE) {
// }

//Connect Database with Server
$DataBaseConnection = new mysqli($serverName, $ServerUsername, $ServerPassword, $dataBaseName);
if ($ServerConnect->connect_error) {
  die("Connection Failed:" . $ServerConnect->connect_error);
}
else{
  echo "database connect to the srever";
}
