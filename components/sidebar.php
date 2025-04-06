            <div class="col-lg-4 col-xl-3">
				<div class="offcanvas-lg offcanvas-start h-100" tabindex="-1" id="offcanvasSidebar">

					<div class="offcanvas-header bg-light">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
					</div>

					<div class="offcanvas-body p-0">
						<div class="card border p-3 w-100">
							<div class="card-header text-center border-bottom">
									<div class="avatar avatar-xl position-relative mb-2">
										<img class="avatar-img rounded-circle border border-2 border-white" src="assets/images/avatar.png" alt="">
									</div>
									<h6 class="mb-0"><?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?></h6>
									<a href="#" class="text-reset text-primary-hover small"><?php echo $_SESSION['email']; ?></a>
							</div>

							<div class="card-body p-0 mt-4">
								<ul class="nav nav-pills-primary-border-start flex-column">
                                    <li class="nav-item">
										<a class="nav-link <?php if($page=='Dashboard'){echo 'active';}?>" href="dashboard"><i class="bi bi-columns-gap fa-fw me-2"></i>Dashboard</a>
									</li>

									<li class="nav-item">
										<a class="nav-link <?php if($page=='Request'){echo 'active';}?>" href="request"><i class="bi bi-bell fa-fw me-2"></i>Requests</a>
									</li>

                                    <li class="nav-item">
										<a class="nav-link <?php if($page=='Profile'){echo 'active';}?>" href="profile"><i class="bi bi-person fa-fw me-2"></i>My profile</a>
									</li>

                                    <li class="nav-item">
										<a class="nav-link <?php if($page=='Security'){echo 'active';}?>" href="security"><i class="bi bi-shield-lock fa-fw me-2"></i>Security</a>
									</li>

									<li class="nav-item">
										<a class="nav-link text-danger" href="logout"><i class="fas bi-box-arrow-left fa-fw me-2"></i>Sign Out</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>