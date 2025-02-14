<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){


    $firstName = htmlspecialchars(trim($_POST["firstname"]));
    $lastName = htmlspecialchars(trim($_POST["lastname"]));
    $userName = trim($_POST["username"]);
    $email = filter_var(trim($_POST["email"]),FILTER_SANITIZE_EMAIL);
    $cityName = trim($_POST["city"]);
    $address = trim($_POST["address"]);
  

}