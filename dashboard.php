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
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="https://source.unsplash.com/1600x900/?background"/>
                                                <div class='newsCaption px-4'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h5 class='newsCaption-title text-white m-0'>Title Examples</h5> <i class="fas fa-arrow-right "></i>
                                                    </div>
                                                    <div class='newsCaption-content d-flex '>
                                                        <p class="col-10 py-3 px-0">Lorem ipsum description examples. </p>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>
                            
                            
                                    <div class="col-lg-4">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="https://source.unsplash.com/1600x900/?background"/>
                                                <div class='newsCaption px-4'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h5 class='newsCaption-title text-white m-0'>Title Examples</h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                    </div>
                                                    <div class='newsCaption-content d-flex '>
                                                        <p class="col-10 py-3 px-0">Lorem ipsum description examples. </p>
                                                    </div>
                                                </div>
                                                <span class="overlay"></span>
                                            </figure>
                                        </a>
                                    </div>
                            
                                    <div class="col-lg-4">
                                        <a href='#' class="url-box" >
                                            <figure class='newsCard news-Slide-up '>
                                                <img src="https://source.unsplash.com/1600x900/?background"/>
                                                <div class='newsCaption px-4'>
                                                    <div class="d-flex align-items-center justify-content-between cnt-title">
                                                        <h5 class='newsCaption-title text-white m-0'>Title Examples</h5> <i class="fas fa-arrow-alt-circle-right "></i>
                                                    </div>
                                                    <div class='newsCaption-content d-flex '>
                                                        <p class="col-10 py-3 px-0">Lorem ipsum description examples. </p>
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