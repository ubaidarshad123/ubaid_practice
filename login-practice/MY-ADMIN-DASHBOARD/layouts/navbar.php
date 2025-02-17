<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="./public/js/index.js"></script>
    <!-- bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- link font awesome 5 -->
    <link rel="stylesheet" href="./public/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- link for navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>ADMIN DASHBOARD</title>
</head>

<body>
    <div class="nav">
        <div class="date-time">
            <i onclick="toggle()" class="fa fa-bars toggle-btn"></i>
            <!-- Date  -->
            <p>
                <span id="Date"></span>
                <span>-</span>
                <span id="Month"></span>
                <span>-</span>
                <span id="YEAR"></span>
            </p>
            <!-- Time -->
            <p>
                <span id="Hours"></span>
                <span>:</span>
                <span id="Minutes"></span>
                <span>:</span>
                <span id="Seconds"></span>
                <span>:</span>
                <span id="ampm"></span>
            </p>
        </div>

        <div class="dropdown n-dropdown">
            <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>User Name </a>
            <ul class="dropdown-menu n-dropdown-menu " aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </div>
        
    <!-- The sidebar -->
    <div class="sidebar" id="sidebar">
        <a class="sidebar-a" href="index.php"><i class="fa fa-bars mx-2"></i><span>Dashboard</span></a>
        <a class="sidebar-a" href="#home"><i class="fa fa-home mx-2"></i><span>Home</span></a>
        <a class="sidebar-a" href="user.php"><i class="fa fa-users mx-2"></i><span>Users</span></a>
        <a class="sidebar-a" href="#Blogs"><i class="fa fa-file-alt mx-2"></i><span>Blogs</span></a>
    </div>