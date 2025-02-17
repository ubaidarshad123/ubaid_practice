<?php
include "layouts/header.php";
?>
<div class="container-fluid register-bg">
  <div class="card border-0">
    <div class="card-header border-0">
      <h1 class="text-center">Login Form</h1>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
          <div class="form-control border-0">
            <form action="./controller/LoginController.php" class="bg-primary-subtle py-5 border-0 rounded">
              <div class="logo-con">
                <img src="./public/images/loginBg.png" alt="">
              </div>
              <div class="row mt-3">
                <div class="col-md-12 p-4">
                  <label for="" class="mb-1">Username:</label>
                  <input type="text" class="form-control p-3" placeholder="Username" aria-label="First name">
                </div>
                <div class="col-md-12 px-4">
                  <label for="" class="mb-1">Password:</label>
                  <input type="text" class="form-control p-3" placeholder="Password" aria-label="Last name">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12 ps-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="img-con d-none d-lg-block">
            <img src="./public/images/secure-login.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include "layouts/footer.php";
?>