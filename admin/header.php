<?php
include('../includes/config.php');
if (!isset($_SESSION['loggedin']) == true) {
?>
    <script>
        window.location.href = '../login.php';
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ahkweb['name']; ?> | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../logout.php" class="nav-link">Logout</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://wa.me/9155454555545" target="_blank" class="nav-link">Contact</a>
                </li>
                <button onclick="window.location.href='wallet.php'" class="btn btn-success">Birth Wallet: ₹ <?php echo $wallet_amount; ?></button>
                
                 <li class="nav-item d-none d-sm-inline-block">
                       <a href="" class="nav-link">  </a>
                </li>
                
                  <li class="nav-item d-none d-sm-inline-block">
                <button onclick="window.location.href='walletp.php'" class="btn btn-warning"> PAN Wallet: ₹6757767667 <?php echo $panwallet_amount; ?></button>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fas fa-user"></i></a>
        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          <li><a href="profile.php" class="dropdown-item">Hi <?php echo $_SESSION['name'] ?></a></li>
          <li><a href="../logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout </a></li>
        </ul>
      </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo $ahkweb['name'] ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['name'] . "<br>[" . $_SESSION['usertype'] ?>]</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link 
            <?php
            if ($url == "index.php") {
                echo "active";
            }
            ?>
            ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>
                        <!-- Profile  -->
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link 
            <?php
            if ($url == "profile.php") {
                echo "active";
            }
            ?>
            ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        
                        <!-- users -->
                        
                        
                         <?php
                        if($_SESSION['userid'] == "ADMIN"){
                        
                            ?>
                        
                        <li class="nav-item <?php
                        if($url == "panpaymentreq.php" ||$url == "paymentreq.php" ||  $url == "pendingpan.php" ){
                            echo "menu-open";
                        }
                        ?>
                        ">
                            <a href="#" class="nav-link  <?php
                        if($url == "panpaymentreq.php" ||$url == "paymentreq.php" ||  $url == "pendingpan.php" ){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon fa-sharp fa-solid fa-paper-plane"></i>
                                <p>
                                    Pending Request
                                    <span class="right badge badge-success">New</span>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php
                        if($url == "paymentreq.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="paymentreq.php" class="nav-link <?php
                        if($url == "paymentreq.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payment Requests</p>
                                        <span class="right badge badge-danger">New</span>
                                    </a>
                                </li>
                                  <li class="nav-item <?php
                        if($url == "paymentreq.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="panpaymentreq.php" class="nav-link <?php
                        if($url == "panpaymentreq.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN Payment Requests</p>
                                        <span class="right badge badge-danger">New</span>
                                    </a>
                                </li>
                             
                                     <li class="nav-item">
                                    <a href="pendingpan.php" class="nav-link 
                                    <?php
                        if($url == "pendingpan.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="nav-icon far fa-id-card"></i>
                                        <p>PAN Find Pending</p>
                                        <span class="right badge badge-warning">New</span>
                                    </a>
                                </li>
                              <li class="nav-item">
                                    <a href="pendingpanpdf.php" class="nav-link 
                                    <?php
                        if($url == "pendingpanpdf.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="nav-icon fa-solid fa-file-pdf"></i>
                                        <p>PAN PDF Pending</p>
                                        <span class="right badge badge-warning">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                 
                            
                           
                               
                        <?php
                        }
                        ?>
                       
                             <?php
                        if($_SESSION['userid'] == "ADMIN" OR ""){
                        
                            ?>
                            <li class="nav-item">
                            <a href="users.php" class="nav-link 
                                <?php
                                if ($url == "users.php") {
                                    echo "active";
                                }
                                ?>
                                ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    All Users
                                    <span class="right badge badge-info">New</span>
                                </p>
                            </a>
                        </li>

                            <?php
                        }
                        ?>
                         
                        
                       
                                    <li class="nav-item <?php
                        if($url == "panlist.php" || $url =="panfind.php"){
                            echo "menu-open";
                        }
                        ?>">
                            <a href="#" class="nav-link <?php
                        if($url == "panlist.php" || $url =="panfind.php"){
                            echo "active";
                        }
                        ?>">
                          
                        
                          
                            <i class="fa fa-id-card"></i>
                                <p>
                                    PAN NUMBER Find
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php
                        if($url == "panfind.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="panfind.php" class="nav-link <?php
                        if($url == "panfind.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN Find</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="panlist.php" class="nav-link 
                                    <?php
                        if($url == "panlist.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        
                           

       <li class="nav-item <?php
                        if($url == "panpdflist.php" || $url =="panpdf.php"){
                            echo "menu-open";
                        }
                        ?>">
                            <a href="#" class="nav-link <?php
                        if($url == "panpdflist.php" || $url =="panpdf.php"){
                            echo "active";
                        }
                        ?>">
                          
                        
                          
                            <i class="fa-solid fa-file-pdf"></i>
                                <p>
                                    NSDL PAN PDF Find
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php
                        if($url == "panpdf.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="panpdf.php" class="nav-link <?php
                        if($url == "panpdf.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN PDF Find</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="panpdflist.php" class="nav-link 
                                    <?php
                        if($url == "panpdflist.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN PDF List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        
                        
                       
                        
                        <li class="nav-item <?php
                        if($url == "birthlist.php" || $url == "birthapply.php"){
                            echo "menu-open";
                        }
                        ?>
                        ">
                            <a href="#" class="nav-link  <?php
                        if($url == "birthlist.php" || $url == "birthapply.php"){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Birth certificates
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php
                        if($url == "birthapply.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="birthapply.php" class="nav-link <?php
                        if($url == "birthapply.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Birth Apply</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="birthlist.php" class="nav-link 
                                    <?php
                        if($url == "birthlist.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Birth List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>


                        





                        <li class="nav-item <?php
                        if($url == "deathlist.php" || $url =="deathapply.php"){
                            echo "menu-open";
                        }
                        ?>">
                            <a href="#" class="nav-link <?php
                        if($url == "deathlist.php" || $url =="deathapply.php"){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Death certificates
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="deathapply.php" class="nav-link <?php
                        if($url == "deathapply.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Death Apply</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="deathlist.php" class="nav-link <?php
                        if($url == "deathlist.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Death List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                            <!-- Hospital Add  -->
                            <?php
                            if($_SESSION['userid'] == "ADMIN"){
                                ?>
                                 <li class="nav-item <?php
                        if($url == "death_hospital_add.php" || $url == "birth_hospital_add.php" || $url == "birth_hospital_list.php" || $url == "death_hospital_list.php" ){
                            echo "menu-open";
                        }
                        ?>
                        ">
                            <a href="#" class="nav-link  <?php
                        if($url == "death_hospital_add.php" || $url == "birth_hospital_add.php" || $url == "death_hospital_list.php" || $url == "birth_hospital_list.php" ){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon fas fa-list"></i>
                                <p>
                                Hospital Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>


                            <ul class="nav nav-treeview">
                                
                                <li class="nav-item <?php
                        if($url == "birth_hospital_add.php"  || $url == "birth_hospital_list.php"){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="birth_hospital_add.php" class="nav-link <?php
                        if($url == "birth_hospital_add.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Birth Hospital Add</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="birth_hospital_list.php" class="nav-link 
                                    <?php
                        if($url == "birth_hospital_list.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Birth Hospital List</p>
                                    </a>
                                </li>
                                <!-- death FOrm  -->
                                <li class="nav-item">
                                    <a href="death_hospital_add.php" class="nav-link 
                                    <?php
                        if($url == "death_hospital_add.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Death Hospital Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="death_hospital_list.php" class="nav-link 
                                    <?php
                        if($url == "death_hospital_list.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Death Hospital List</p>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                                <?php

                            }
                            ?>
                            
                              <?php
                        if($_SESSION['userid'] == "ADMIN" OR ""){
                        
                            ?>
                        
                        <li class="nav-item <?php
                        if($url == "mainwalletreport.php"|| $url == "panwalletreport.php"){
                            echo "menu-open";
                        }
                        ?>
                        ">
                            <a href="#" class="nav-link  <?php
                        if($url == "mainwalletreport.php"|| $url == "panwalletreport.php"){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon ion ion-pie-graph"></i>
                                <p>
                                    All Report
                                    <span class="right badge badge-success">New</span>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                     
                               
                                
                                <li class="nav-item">
                                    <a href="mainwalletreport.php" class="nav-link 
                                    <?php
                        if($url == "mainwalletreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>MAIN WALLET Report</p>
                                        <span class="right badge badge-danger">New</span>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="panwalletreport.php" class="nav-link 
                                    <?php
                        if($url == "panwalletreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN WALLET Report</p>
                                        <span class="right badge badge-info">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                        
                     
                             <?php
                        if($_SESSION['userid'] == "ADMIN" OR ""){
                        
                            ?>
                        
                        <li class="nav-item <?php
                        if($url == "birthreport.php" || $url == "deathreport.php"|| $url == "panfindreport.php"|| $url == "panpdfreport.php"){
                            echo "menu-open";
                        }
                        ?>
                        ">
                            <a href="#" class="nav-link  <?php
                        if($url == "birthreport.php" || $url == "deathreport.php"|| $url == "panfindreport.php"|| $url == "panpdfreport.php"){
                            echo "active";
                        }
                        ?>">
                            <i class="nav-icon fa fa-file"></i>
                                <p>
                                    Service Report
                                    <span class="right badge badge-success">New</span>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?php
                        if($url == "birthreport.php" ){
                            echo "menu-open";
                        }
                        ?>">
                                    <a href="birthreport.php" class="nav-link <?php
                        if($url == "birthreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Birth Report</p>
                                        <span class="right badge badge-danger">New</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="deathreport.php" class="nav-link 
                                    <?php
                        if($url == "deathreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Death Report</p>
                                        <span class="right badge badge-warning">New</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="panfindreport.php" class="nav-link 
                                    <?php
                        if($url == "panfindreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN find Report</p>
                                        <span class="right badge badge-danger">New</span>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="panpdfreport.php" class="nav-link 
                                    <?php
                        if($url == "panpdfreport.php"){
                            echo "active";
                        }
                        ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PAN Pdf Report</p>
                                        <span class="right badge badge-info">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                     
                            
                           <!-- Hospital End Here  -->
                       
                        <li class="nav-header">SETTINGS</li>
                       
                       
                           
                        </li>
                        
                        
                        <?php 
                            if($_SESSION['userid'] == "ADMIN"){
                                ?>
                                <li class="nav-item">
                            <a href="settings.php" class="nav-link <?php 
                            if($url == 'settings.php'){
                                echo 'active';
                            }
                            ?>">
                                <i class="nav-icon fa fa-gear"></i>
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                                <p>
                                    Settings
                                 
                                </p>
                            </a>
                           
                        </li>

                                <?php
                            }
                        ?>
                        

                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                 
                                </p>
                            </a>
                           
                        </li>
                       
                        
                        
                        
                       
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>