<?php
include 'components/adminheader.php';
require_once 'auth/account.php';
?>

    <div class="offcanvas-wrap">

        <section class="py-8 bg-light">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">
                        <div class="card overflow-hidden bg-primary mb-0">
                            <div class="card-body inverted level-3">
                                <div class="row mb-5">
                                    <div class="col-lg-10">
                                        <span class="text-white eyebrow mb-1" id="greet"></span>
                                        <h2>Welcome, <?php echo $_SESSION['firstName']; ?>!</h2>
                                    </div>
                                </div>
                            </div>
                            <img class="position-absolute top-100 start-100 translate-middle"
                            src="./assets/images/svg/pattern.svg" alt="Image">
                        </div>

                        <div class="card">
                            <div class="card-header pt-5 pb-5 p-0">
                                <div class="row g-2 g-xl-5 align-items-center">
                                    <div class="col-md-6">
                                        <a href="archive" class="btn btn-with-icon btn-primary">
                                            <i class="bi bi-arrow-left"></i> Go Back to Archive
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-md-end text-primary">
                                        <h3 class="fs-6">2024 Applications</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section>
                            <div class="col-xl-12">
                                <div class="tab-content" id="component-1-content">
                                    <div class="tab-pane fade show active" id="component-1-1" role="tabpanel"
                                        aria-labelledby="component-1-1-tab">
                                        <div class="row g-3 g-xl-5">

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2024" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Weekly Activity Report</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Daily Inspection</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Daily Site Report</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Vehicle Movement Register</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Vehicle Maintenance Request</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Vehicle Maintenance Log</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-6" data-aos-delay="100">
                                                <a href="2023" class="card equal-md-4-3 card-hover-border bg-white">
                                                    <div class="card-wrap text-center">
                                                        <div class="card-header pb-0">
                                                            <img src="./assets/images/airchive.svg" alt="Logo" class="mb-2 w-40">
                                                        </div>
                                                        <div class="card-footer pt-0 mt-auto">
                                                            <h4 class="card-title fw-light">Monthly Vehicle Maintenance Checklist</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="../assets/js/vendor.js"></script>
    <script src="../assets/js/index.js"></script>

    <script>
        //Greet User
        var time = new Date().getHours();
        if (time < 4) {
            greeting = "You should be in bed 🙄!";
        }  else if (time < 12) {
            greeting = "Good morning, wash your hands 🌤";
        } else if (time < 16) {
            greeting = "It's lunch 🍛 time, what's on the menu!";
        } else {
            greeting = "Good Evening 🌙, how was your day?";
        }
        document.getElementById("greet").innerHTML = greeting;
    </script>

</body>

</html>