<?php
$page = "Dashboard";
include "./components/header_alt.php";
?>

    <section class="pt-sm-7">
        <div class="container pt-3 pt-xl-5">
            <div class="row">
                
                <?php include "./components/sidebar.php"; ?>

                <div class="col-lg-8 col-xl-9 ps-lg-4 ps-xl-6">
                    <div class="d-flex justify-content-between align-items-center mb-5 mb-sm-6">
                        <h1 class="h3 mb-0">Dashboard</h1>
                    </div>
                    
                    <div class="card bg-transparent p-0">

                        <div class="card-body px-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/weekly-report.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Weekly Activity Report</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/daily-inspection.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Daily Inspection</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/site-report.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Daily Site Report</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/vehicle.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Vehicle Movement Register</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/request.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Vehicle Maintenance Request</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/vehicle-log.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Vehicle Maintenance Log</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 pb-3">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="assets/images/checklist.jpg"/>
                                                <div class='newsCaption px-4 mb-2 bottom-0 start-0'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h6 class='newsCaption-title text-white m-0'>Monthly Vehicle Maintenance Checklist</h6> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>
                            
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>