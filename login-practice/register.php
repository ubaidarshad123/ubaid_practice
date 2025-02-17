<?php
session_start();
include "layouts/header.php";
if (empty($_SESSION['csrf_token'])) {
  //Generte csrf-token
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfSession = $_SESSION["csrf_token"];
$encrypted_session = base64_encode($csrfSession);

?>

<div class="container-fluid register-bg">
  <div class="card border-0">
    <div class="card-header border-0">
      <h1 class="text-center">Register Form</h1>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
          <div class="form-control border-0">
            <form class="row g-3 needs-validation" action="./controller/RegistserController.php" method="post"
              novalidate>
              <h1>Register Form</h1>
              <?php
              if (!empty($_GET['SubmitForm'])) { ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $_GET['SubmitForm']; ?> </div>
              <?php
              }
              ?>
          
               <?php
              if (!empty($_GET['MainError'])) { ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_GET['MainError']; ?> </div>
              <?php
              }
              ?>
              
              <input type="hidden" name="csrf_token" value="<?php echo $encrypted_session; ?>">
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="firstName" class="mb-1 form-label">First Name:</label>
                  <input type=" text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          } ?>" id="firstName" name="firstName"
                    placeholder="First name">
                  <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="mb-1">Last Name:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          } 
                                                          if(!empty($GET['EmailFilterError'])){
                                                            echo 'is-invalid';
                                                          }
                                                          if(!empty($GET['duplicateEmailError'])){
                                                            echo 'is-invalid';
                                                          }?>" name="lastName" placeholder="Last name"
                    aria-label="Last name">

                    <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if(!empty($_GET['EmailFilterError'])) { ?>
                  <div class="invalid-feedback">
                      <?php
                      echo $_GET['EmailFilterError'];
                      ?>
                  </div>
                  <?php } ?>
                  <?php
                  if(!empty($_GET['duplicateEmailError'])) { ?>
                  <div class="invalid-feedback">
                      <?php
                      echo $_GET['duplicateEmailError'];
                      ?>
                  </div>
                  <?php } ?>


                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                  
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="" class="mb-1">Username:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          }
                                                          if (!empty($_GET['duplicateUsernameError'])) {
                                                            echo 'is-invalid';
                                                          } ?>" placeholder="username" name="username" aria-label="username">
                 <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">
                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['duplicateUsernameError'])) {
                  ?>
                    <div class="invalid-feedback">
                      <?php
                      echo $_GET['duplicateUsernameError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                 

                </div>
                <div class="col-md-6">
                  <label for="" class="mb-1">Phone No:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          } 
                                                          if (!empty($_GET['duplicatePhoneError'])) {
                                                            echo 'is-invalid';
                                                          }?>" placeholder="Phone" name="phoneNo" aria-label="Phone">
                  <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>

                  <?php
                  if (!empty($_GET['duplicatePhoneError'])) {
                  ?>
                    <div class="invalid-feedback">

                    <?php echo $_GET['duplicatePhoneError']; ?>

                    </div>
                  <?php } ?>
                  
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                  
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label for="" class="mb-1">E-mail:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          } 
                                                          if (!empty($_GET['duplicateEmailError'])) {
                                                            echo 'is-invalid';
                                                          } ?>" placeholder="E-mail" name="email" aria-label="E-mail">
                 <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['duplicateEmailError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['duplicateEmailError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                 
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label for="" class="mb-1">Address</label>
                  <div class="">
                    <textarea class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          } ?>" placeholder="Enter Your Address" name="address"></textarea>
                  </div>
                  <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <label for="" class="mb-1">Password:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          }
                                                          if (!empty($_GET['passwordStrength'])) {
                                                            echo 'is-invalid';
                                                          } ?>" placeholder="Enter Your Password" name="password"
                    aria-label="Password">
                    <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['passwordStrength'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['passwordStrength'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                </div>
                <div class="col-md-6">
                  <label for="" class="mb-1">Confirm Password:</label>
                  <input type="text" class="form-control <?php if (!empty($_GET['FieldError'])) {
                                                            echo 'is-invalid';
                                                          }
                                                          if (!empty($_GET['PasswordError'])) {
                                                            echo 'is-invalid';
                                                          }
                                                          ?>" placeholder="Confirm Password" name="cPassword"
                    aria-label="Confirm Password">
                    <?php
                  if (!empty($_GET['FieldError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['FieldError'];
                      ?>
                    </div>
                  <?php } ?>
                  <?php
                  if (!empty($_GET['PasswordError'])) {
                  ?>
                    <div class="invalid-feedback">

                      <?php
                      echo $_GET['PasswordError'];
                      ?>
                    </div>
                  <?php } ?>
                  
            
                  <?php
                  if (!empty($_GET['Ok'])) {
                  ?>
                    <div class="valid-feedback">
                      <?php
                      echo $_GET['ok'];
                      ?>
                    </div>
                  <?php } ?>
                  
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-8 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary border-0 shadow">Submit</button>
                  <a href="./login.php" class="text-decoration-none text-end link">If you Already Register Please
                    Login</a>
                </div>
              </div>
            </form>
          </div>
          <div class="img-con d-none d-lg-block">
            <img src="./public/images/registrationImg.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
include "layouts/footer.php";
?>