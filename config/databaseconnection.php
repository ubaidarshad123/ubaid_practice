<?php
   $Server_Name = "localhost";
   $Server_Username = "root";
   $Server_Password ="";
   $Database_Name ="loginsystem";
 
    // SERVER CONNECTION
   $Server_Connection = new mysqli($Server_Name, $Server_Username,$Server_Password);
   if($Server_Connection->connect_error){
    die(" server connection error");
   }
//    else{
//     echo " server connect <br>";
//    }

    // CREATE DATABASE 
   $createdatabasequery = "CREATE DATABASE IF NOT EXISTS $Database_Name";
   
    //    QUERY RUN
    if($Server_Connection->query($createdatabasequery) !== TRUE){
        die("database creation error");
    }
    // else{
    //     echo "Database Create <br>";
    // }


    // DATABASE CONNECTION
   $database_Connection = new mysqli($Server_Name, $Server_Username,$Server_Password,$Database_Name);
   if($database_Connection->connect_error){
    die("database connection error");
   }
//    else{
//     echo "database connect";
//    }








?>