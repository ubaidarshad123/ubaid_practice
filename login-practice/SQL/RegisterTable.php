<?php
include "../config/MySqliConnection.php";

$CreateRegisterTable = "CREATE TABLE IF NOT EXISTS register (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  address TEXT NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY unique_email (email),
  UNIQUE KEY unique_username (username),
  UNIQUE KEY unique_number (phone)
)";

if ($DataBaseConnection->query($CreateRegisterTable) !== TRUE) {
  echo "ERROR" . $ServerConnect->error;
}
else{
  echo "table created";
}

//CHECK IF COLUMNS ALREADY EXIST
$AddVerifyAndStatusColumns = "ALTER TABLE register ADD COLUMN verification_token VARCHAR(100) AFTER email,ADD COLUMN status TINYINT DEFAULT 1 AFTER verification_token";
if ($DataBaseConnection->query($AddVerifyAndStatusColumns) !== TRUE) {
  die("ERROR ADDING COLUMNS:" . $DataBaseConnection->error);
}
else{
  echo "alter table created";
}
