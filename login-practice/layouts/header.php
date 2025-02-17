<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./public/css/style.css" />
  <link rel="stylesheet" href="./public/fontawesome-free-5.15.4-web/css/all.min.css" />
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navBar-bg navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img height="60px" width="100px" src="./public/images/nav-logo.png"
          alt=""></a>
      <button class="navbar-toggler-custom border-0 mx-3 d-block d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon-custom"><img src="./public/images/more.png" alt="" width="24px"
            hight="24px"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">Contact us</a>
          </li>
        </ul>
        <div class="d-flex text-center">
          <a class="singup" href="./register.php">
            Signup
          </a>
          <a class="login" href="./login.php">
            Login
          </a>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>