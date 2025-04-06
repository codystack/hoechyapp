<?php
$page = "Security";
include "./components/header_alt.php";
require_once "./auth/password.php";
?>

    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-5">
            <div class="row">
                
            <?php include "./components/sidebar.php"; ?>

                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <h1 class="h3 mb-0">Security</h1>
                    </div>

                    <?php
                        if (isset($_SESSION['error_message'])) {
                            ?>
                            <div class="alert alert-danger mt-5" role="alert">
                                <div class="alert-message text-center">
                                    <?php
                                    echo $_SESSION['error_message'];
                                    ?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['error_message']);
                        }
                    ?>
                    <?php
                        if (isset($_SESSION['success_message'])) {
                            ?>
                            <div class="alert alert-success mt-5" role="alert">
                                <div class="alert-message text-center">
                                    <?php echo $_SESSION['success_message']; ?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['success_message']);
                        }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="card bg-transparent p-0">
                            <div class="card-header bg-transparent border-bottom px-0">
                                <h6 class="mb-0">Update Password</h6>
                            </div>
                            
                            <div class="card-body px-0">
                                
                                <div class="mb-3">
                                    <label class="form-label">Current password</label>
                                    <input class="form-control" type="password" required id="currentpassword" name="password" placeholder="Enter current password">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Enter new password</label>

                                    <div class="position-relative">
                                        <input type="password" class="form-control fakepassword pe-6" required id="newpassword" name="newPassword" placeholder="Enter your password">
                                        <span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
                                            <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="form-label">Confirm new password</label>
                                    <input class="form-control" type="password" required name="confirmpassword" id="confirmpassword" placeholder="Enter new password">
                                    <span id="message"></span>
                                </div>
                                
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" name="password_change_btn" class="btn btn-primary mb-0">Change password</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

<?php include "./components/footer.php"; ?>