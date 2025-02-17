<?php
include "./layouts/navbar.php";
?>
<div id="content" class="content">
    <div class="main-content">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card p-4 shadow">
                        <h3 class="text-center">Register</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="First name"
                                        required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Last name"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Username</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Username"
                                        required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone No:</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Phone no"
                                        required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Email"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Address"
                                    required />
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Password"
                                        required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Confirm password"
                                        required />
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>