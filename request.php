<?php
$page = "Request";
include "./components/header_alt.php";
?>

<!-- =======================
Content START -->
<section class="pt-sm-7">
	<div class="container pt-3 pt-xl-5">
		<div class="row">
            
        <?php include "./components/sidebar.php"; ?>

			<div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
				<div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
					<h1 class="h3 mb-0">Dashboard</h1>
				</div>
				<form>
					<div class="card bg-transparent p-0">
						<!-- Card header -->
						<div class="card-header bg-transparent border-bottom p-0 pb-3">
							<h6 class="mb-0">Personal Information</h6>
						</div>

						<!-- Card body -->
						<div class="card-body px-0">
							<div class="row g-4">
								<!-- Profile photo -->
								<div class="col-12">
									<label class="form-label">Profile picture</label>
									<div class="d-flex align-items-center">
										<label class="position-relative me-2" title="Replace this pic">
											<!-- Avatar place holder -->
											<span class="avatar avatar-xl">
												<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">
											</span>
											<!-- Remove btn -->
											<button class="uploadremove"><i class="bi bi-x text-white"></i></button>
										</label>
										<!-- Upload button -->
										<label class="btn btn-sm btn-dark mb-0">Change</label>
										<input class="form-control d-none" type="file">
									</div>
								</div>
								<!-- Full name -->
								<div class="col-12">
									<label class="form-label">Full name</label>
									<div class="input-group">
										<input type="text" class="form-control" value="Jacqueline" placeholder="First name">
										<input type="text" class="form-control" value="Miller" placeholder="Last name">
									</div>
								</div>
		
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email address</label>
									<input type="email" class="form-control" value="hello@gmail.com" placeholder="Enter your email id">
								</div>
		
								<!-- Mobile -->
								<div class="col-md-6">
									<label class="form-label">Mobile number</label>
									<input type="text" class="form-control" value="222 555 666" placeholder="Enter your mobile number">
								</div>
		
								<!-- Nationality -->
								<div class="col-md-6">
									<label class="form-label">Nationality</label>
									<select class="form-select">
										<option value="">Select your country</option>
										<option>USA</option>
										<option selected>Paris</option>
										<option>India</option>
										<option>UK</option>
									</select>
								</div>
		
								<!-- Gender -->
								<div class="col-md-6">
									<label class="form-label">Select Gender</label>
									<div class="input-group">
										<div class="form-control">
											<div class="form-check radio-bg-light">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
												<label class="form-check-label" for="flexRadioDefault1">
													Male
												</label>
											</div>
										</div>
		
										<div class="form-control">
											<div class="form-check radio-bg-light">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
												<label class="form-check-label" for="flexRadioDefault2">
													Female
												</label>
											</div>
										</div>	
		
										<div class="form-control">
											<div class="form-check radio-bg-light">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
												<label class="form-check-label" for="flexRadioDefault3">
													Others
												</label>
											</div>
										</div>
									</div>
								</div>
		
								<!-- Address -->
								<div class="col-12">
									<label class="form-label">Address</label>
									<textarea class="form-control" rows="3" spellcheck="false">2119 N Division Ave, New Hampshire, York, United States</textarea>
								</div>
		
								<!-- Button -->
								<div class="col-12 text-end">
									<a href="#" class="btn btn-primary mb-0">Save Changes</a>
								</div>
		
							</div>
						</div>
					</div>
				</form>

				<div class="text-center my-5"><i class="bi bi-three-dots"></i></div> <!-- Divider -->

				<!-- Update email -->
				<form>
					<div class="card bg-transparent p-0">
						<!-- Card header -->
						<div class="card-header bg-transparent border-bottom px-0">
							<h6 class="mb-0">Update email</h6>
						</div>

						<!-- Card body -->
						<div class="card-body px-0">
							<!-- Full name -->
							<div class="mb-4">
								<p class="mb-4">Your current email address is <span class="text-primary">example@gmail.com</span></p>
								<label class="form-label">Email address</label>
								<input type="email" class="form-control" value="hello@gmail.com" placeholder="Enter your email id">
							</div>

							<!-- Button -->
							<div class="text-end">
								<a href="#" class="btn btn-primary mb-0">Save Changes</a>
							</div>
						</div>
					</div>
				</form>

				<div class="text-center my-5"><i class="bi bi-three-dots"></i></div> <!-- Divider -->

				<!-- Update password -->
				<form>
					<div class="card bg-transparent p-0">
						<!-- Card header -->
						<div class="card-header bg-transparent border-bottom px-0">
							<h6 class="mb-0">Update password</h6>
						</div>

						<!-- Card body -->
						<div class="card-body px-0">
							<!-- Current password -->
							<div class="mb-3">
								<label class="form-label">Current password</label>
								<input class="form-control" type="password" placeholder="Enter current password">
							</div>
							<!-- New password -->
							<div class="mb-3">
								<label class="form-label">Enter new password</label>

								<div class="position-relative">
									<input type="password" class="form-control fakepassword pe-6" id="psw-input" placeholder="Enter your password">
									<span class="position-absolute top-50 end-0 translate-middle-y p-0 me-2">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
								</div>
							</div>
							<!-- Confirm password -->
							<div>
								<label class="form-label">Confirm new password</label>
								<input class="form-control" type="password" placeholder="Enter new password">
							</div>
							<!-- Button -->
							<div class="d-flex justify-content-end mt-4">
								<button type="button" class="btn btn-primary mb-0">Change password</button>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>
</section>


<?php include "./components/footer.php"; ?>