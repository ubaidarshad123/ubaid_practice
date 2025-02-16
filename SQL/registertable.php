<?php  include("../config/databaseconnection.php") ;
 
  
$creatRegistertable = "CREATE TABLE IF NOT EXISTS register(
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  city VARCHAR(255)  NOT NULL,
  address VARCHAR(255) NOT NULL

)";
  

if($database_Connection->query($creatRegistertable) !==TRUE){
    die("table creation error");
}
else {
    echo "table created";
}


?>