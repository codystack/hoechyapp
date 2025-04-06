<?php
//Connect Database
include ('./config/db.php');

session_start();

if (!isset($_SESSION['email'])) {
    header('location: logout');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}

require_once "./auth/userinfo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Hoechy Development LTD™</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Technology and Corporate Bootstrap Theme">

	<link rel="shortcut icon" href="assets/images/favicon.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/swiper/swiper-bundle.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/card.css">

</head>

<body>

    <header class="header-sticky header-absolute">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand me-0" href="./">
                    <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
                </a>

                <ul class="nav align-items-center dropdown-hover ms-sm-2">
                    <li class="nav-item me-2">
                        <a href="logout" class="btn btn-sm btn-primary mb-0"><i class="bi bi-box-arrow-left me-1"></i>Log Out</a>
                    </li>

                    <li class="nav-item">
                        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <span class="navbar-toggler-animation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

<main>