<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=SITE_PATH?>public/adminassets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=SITE_PATH?>public/adminassets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=SITE_PATH?>public/adminassets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=SITE_PATH?>public/adminassets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=SITE_PATH?>public/adminassets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?php echo SITE_PATH."index.php/dashboard";?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?=SITE_PATH?>public/adminassets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Antony Jees</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo SITE_PATH."index.php/dashboard";?>" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?php echo SITE_PATH."index.php/Manageuser";?>" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Manage User</a>
                    <a href="<?php echo SITE_PATH."index.php/Managerequest";?>" class="nav-item nav-link"><i class="bi bi-envelope"></i>Manage Request</a>
                    <a href="<?php echo SITE_PATH."index.php/Manageconnection";?>" class="nav-item nav-link"><i class="bi bi-cloud-arrow-up-fill"></i>Manage Connection</a>
                    <a href="<?php echo SITE_PATH."index.php/Settings";?>" class="nav-item nav-link"><i class="bi bi-gear"></i>Settings</a>
                    <a href="<?php echo SITE_PATH."index.php/Logout";?>"  class="nav-item nav-link"><i class="bi bi-gear"></i>Log Out</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



       
