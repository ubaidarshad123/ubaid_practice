<?php
include "./layouts/navbar.php";
?>

<body>
    <!-- Page content -->
    <div id="content" class="content">
        <!-- Boxes -->
        <div class="container mt-5">
            <div class="row">
                <!-- Total Users Box -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-center text-light">
                                <i class="fas fa-users"></i> Total Users
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="text-center">1,250</p>
                        </div>
                    </div>
                </div>

                <!-- Total Admins Box -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h4 class="text-center text-light">
                                <i class="fas fa-user-shield"></i> Total Admins
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="text-center">5</p>
                        </div>
                    </div>
                </div>

                <!-- Total Blogs Box -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h4 class="text-center text-light">
                                <i class="fas fa-blog"></i> Total BLogs
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="text-center">50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table  -->

        <div class=" table table-responsive mt-3">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Shoaib</td>
                        <td>abc123@gamil.com</td>
                        <td>Admin</td>
                        <td class="action-btn">
                            <a class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-warning text-light" href="#"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Mudassir</td>
                        <td>xyz123@gamil.com</td>
                        <td>Admin</td>
                        <td class="action-btn">
                            <a class="btn btn-primary" href="#"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-warning text-light" href="#"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>
   
</html>