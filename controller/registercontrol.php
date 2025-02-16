<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){


    $firstName = htmlspecialchars(trim($_POST["firstname"]));
    $lastName = htmlspecialchars(trim($_POST["lastname"]));
    $userName = trim($_POST["username"]);
    $email = filter_var(trim($_POST["email"]),FILTER_SANITIZE_EMAIL);
    $cityName = trim($_POST["city"]);
    $address = trim($_POST["address"]);

    include_once("../config/databaseconnection.php");

    $preparedRegisterQuery = $database_Connection->prepare("INSERT INTO register (firstname,lastname,username,email,city,address) VALUES(?,?,?,?,?,?)");
    $preparedRegisterQuery->bind_param("ssssss",$firstName,$lastName,$userName,$email,$cityName,$address);
    
    if($preparedRegisterQuery->execute()){
        header("LOCATION: ../index.php?SubmitForm=" .urlencode("Form Submit Successfully"));
    }
   
}