<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $recevied_value = base64_decode($_POST['csrf_token']);
  if (!isset($recevied_value) || $recevied_value !== $_SESSION['csrf_token']) {
    die("INVALID CSRF TOKEN");
  }

  // Sanitize input
  //trim() function spaces ko remove karne ke liye use hota hai.
  $firstName = htmlspecialchars(trim($_POST["firstName"]));
  $lastName = htmlspecialchars(trim($_POST["lastName"]));
  $username = trim($_POST["username"]);
  $phoneNo = trim($_POST["phoneNo"]);
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $address = trim($_POST["address"]);
  $password = $_POST["password"];
  $confirmPassword = $_POST["cPassword"];




  // Validate required fields
  if (empty($firstName) || empty($lastName) || empty($username) || empty($phoneNo) || empty($email) || empty($address) || empty($password) || empty($confirmPassword)) {
    // urlencode() use kiya taake error message URL-safe ho
    if (!empty($_SESSION['csrf_token'])) {
      header("Location: ../register.php?FieldError=" . urlencode("This fields is required."));
      session_unset();
    }
    exit();
  }
  

  //Validation Email format
  if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
    if (!empty($_SESSION['csrf_token'])) {
      header("Location: ../register.php?EmailFilterError=" . urlencode("Invalid Email Format"));
      session_unset();
    }
    exit();
  }


  // Validate password Strength
  if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
    $passwordStrength = "Password must be at least 8 characters long and include at least one uppercase letter and one number";
    if (!empty($_SESSION['csrf_token'])) {
      header("Location: ../register.php?passwordStrength=" . urlencode($passwordStrength));
      session_unset();
    }
    exit();
  }

  // Validate PASSWORD MATCH
  if ($password !== $confirmPassword) {
    if (!empty($_SESSION['csrf_token'])) {
      header("Location: ../register.php?PasswordError=" . urlencode("Passwords do not match."));
      session_unset();
    }
    exit();
  }

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Include database connection
  include_once "../config/MySqliConnection.php";

  //Generate Veridication Token
  $verifcationEmailToken = bin2hex(random_bytes(50));
  $status = 1;

  // Use prepared statements to prevent SQL injection
  try {
    $preparedRegisterQuery  = $DataBaseConnection->prepare("INSERT INTO register (firstname, lastname, username, email, phone, address, password, verification_token, status) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)");
    $preparedRegisterQuery->bind_param("sssssssss", $firstName, $lastName, $username, $email, $phoneNo, $address, $hashedPassword, $verifcationEmailToken, $status);
    if ($preparedRegisterQuery->execute()) {
      //Email verification
      if (!empty($_SESSION['csrf_token'])) {
        header("Location: ../register.php?SubmitForm=" . urlencode("Form Submitted Successfully"));
        session_unset();
      } else {
        header("Location: ../register.php?ErrorSessoion=" . urlencode("Form Submitted ERROR"));
      }

      exit();
    }
  } catch (mysqli_sql_exception $e) {
    $errorMessage = $e->getMessage();
    $errorParams = [];

    // BOHAT ZIDA STRING MA MAIN DATA OTATA HA  strpos hota ha

    // if(strpos($errorMessage, "unique_number") !== false && strpos($errorMessage, "unique_email") !== false && strpos($errorMessage, "unique_username") !== false){
    //   if (!empty($_SESSION['csrf_token'])) {
    //     $errorParams['duplicatePhoneError'] = "Phone number already in use.";
    //     $errorParams['duplicateEmailError'] = "Email already registered.";
    //     $errorParams['duplicateUsernameError'] = "Username is already register.";
    //     session_unset();
    //   }  
     
    // }
    
    if (strpos($errorMessage, "unique_number") !== false) {
      if (!empty($_SESSION['csrf_token'])) {
        $errorParams['duplicatePhoneError'] = "Phone number already in use.";
        session_unset();
   
      }
    }
    if (strpos($errorMessage, "unique_email") !== false) {
      if (!empty($_SESSION['csrf_token'])) {
        $errorParams['duplicateEmailError'] = "Email already registered.";
        session_unset();
   
      }
    }
    if (strpos($errorMessage, "unique_username") !== false) {
    if (!empty($_SESSION['csrf_token'])) {
        $errorParams['duplicateUsernameError'] = "Username is already register.";
        session_unset();
   
      }
    }
    if (!empty($errorParams)) {
      header("Location: ../register.php?" . http_build_query($errorParams));
     
    } else {
      $MainError  = "Something Wents worng, Please try again";
      header("Location: ../register.php?MainError=" . urlencode($MainError));
     
    }
    exit();
  }
} else {
  echo "ERROR: Invalid request method.";
}
