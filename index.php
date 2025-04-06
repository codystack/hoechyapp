<?php
include "./components/header.php";
require_once "./auth/account.php";
?>
		<div class="row g-0">
			<div class="col-lg-7 vh-100 d-none d-lg-block">
				<div class="swiper h-100" data-swiper-options='{
					"pagination":{
						"el":".swiper-pagination",
						"clickable":"true"
					}}'>

					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card rounded-0 h-100" data-bs-theme="dark" style="background-image:url(assets/images/hero.jpg); background-position: center center; background-size: cover;">
								<div class="bg-overlay bg-dark opacity-5"></div>

								<div class="card-img-overlay z-index-2 p-7">
									<div class="d-flex flex-column justify-content-end h-100">
										<h4 class="fw-light">"Teamwork makes the dream work – but a vision becomes a nightmare when the leader has a big dream and a bad team."</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-lg-5 d-flex m-auto vh-100">
				<div class="row w-100 m-auto">
					<div class="col-sm-10 my-5 m-auto">

						<a href="index.html"><img src="assets/images/logo.svg" class="h-50px mb-4" alt="logo"></a>

						<h2 class="mb-0">Welcome back</h2>
						<p class="mb-5">please enter your login details</p>

                        <?php
                            if (isset($_SESSION['error_message'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-message text-center">
                                        <span class="fe fe-alert-triangle"></span> <?php echo $_SESSION['error_message'];?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['error_message']);
                            }
                        ?>
                        <?php
                            if (isset($_SESSION['success_message'])) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-message text-center">
                                        <span class="fe fe-check-circle"></span> <?php echo $_SESSION['success_message']; ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['success_message']);
                            }
                        ?>
					
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

							<div class="input-floating-label form-floating mb-4">
								<input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
								<label for="floatingInput">Email address</label>
							</div>

							<div class="input-floating-label form-floating mb-4 position-relative">
								<input type="password" class="form-control fakepassword pe-6" name="password" id="psw-input" placeholder="Enter your password">
								<label for="floatingInput">Password</label>
								<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
									<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
								</span>
							</div>

							<div class="align-items-center mt-0">
								<div class="d-grid">
									<button class="btn btn-primary mb-0" name="user_login">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php include "./components/footer.php"; ?>