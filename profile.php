<?php
$page = "Profile";
include "./components/header_alt.php";
?>

    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-5">
            <div class="row">
                
            <?php include "./components/sidebar.php"; ?>

                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <h1 class="h3 mb-0">Profile</h1>
                    </div>
                    <form>
                        <div class="card bg-transparent p-0">
                            <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                <h6 class="mb-0">Personal Information</h6>
                            </div>

                            <div class="card-body px-0">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['firstName']; ?>" placeholder="First name">
                                            <input type="text" class="form-control" value="<?php echo $_SESSION['lastName']; ?>" placeholder="Last name">
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" placeholder="Enter your email id">
                                    </div>
            
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile number</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION['phone']; ?>" placeholder="Enter your mobile number">
                                    </div>
                                    
                                    <div class="col-12 text-end">
                                        <a href="request" class="btn btn-primary mb-0">Request a Changes</a>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include "./components/footer.php"; ?>