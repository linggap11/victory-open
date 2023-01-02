<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard UKT Taekwondo Bandung">
    <meta name="keywords" content="Dashboard UKT Taekwondo Bandung">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <title>Victory Taekwondo Club Bandung</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont/icofont.css">
    

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/themify/themify-icons.css">


    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css" />

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>
<style> 
    th {
        text-align: center;
    }

    .footer-heart{text-align:center;font-family: open sans, sans-serif;}

    .footer-heart a{border-bottom: 1px solid #453886;color: #453886;padding-bottom: .25em; text-decoration: none;}

    .footer-heart a:hover{color:#2196f3; background-image: url("data:image/svg+xml;charset=utf8,%3Csvg id='squiggle-link' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:ev='http://www.w3.org/2001/xml-events' viewBox='0 0 20 4'%3E%3Cstyle type='text/css'%3E.squiggle{animation:shift .3s linear infinite;}@keyframes shift {from {transform:translateX(0);}to {transform:translateX(-20px);}}%3C/style%3E%3Cpath fill='none' stroke='%23453886' stroke-width='2' class='squiggle' d='M0,3.5 c 5,0,5,-3,10,-3 s 5,3,10,3 c 5,0,5,-3,10,-3 s 5,3,10,3'/%3E%3C/svg%3E");
        background-position: bottom;
        background-repeat: repeat-x;
        background-size: 20%;
        border-bottom: 0;
        padding-bottom: .3em;
        text-decoration: none;}

    .emoji{vertical-align: middle;}
</style>
<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header" data-intro="This is header">
        <div class="main-header-left" style="margin-left: 5%">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img src="assets/images/victory-logo.png" class="image-dark" alt="" style="margin: 0" />
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="search"  class="form-control-plaintext" placeholder="Search.." >
                                <span class="d-sm-none mobile-search">
                                </span>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                            <img class="align-self-center pull-right mr-2" src="assets/images/browser.png" alt="header-browser">
                        </a>
                    </li>
                    
                    <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <img class="align-self-center pull-right mr-2" src="assets/images/notification.png" alt="header-notification">
                            <span class="badge badge-pill badge-primary notification">2</span>
                        </a>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>Notification <span class="badge badge-pill badge-secondary text-white text-uppercase pull-right">2 New</span></li>
                            
                            <li>
                                <div class="media">
                                    <i class="align-self-center notification-icon icofont icofont-download-alt bg-success"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success">Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>5 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="align-self-center notification-icon icofont icofont-recycle bg-danger"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger">250 MB trush files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span><i class="icofont icofont-clock-time p-r-5"></i>25 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">You have Check <a href="#">all</a> notification  </li>
                        </ul>

                    </li>
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="assets/images/user.png" alt="header-user"/>
                            <div class="media-body">
                                
                            </div>
                        </div>                        
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">

        <!--Page Sidebar Start -->
        <div class="page-sidebar custom-scrollbar" data-intro="This is sidebar">
            <ul class="sidebar-menu">
                <li>
                    <div class="sidebar-title">Victory's Dashboard</div>
                    <a href="index.php" class="sidebar-header">
                        <i class="icon-notepad"></i> <span>Dashboard<span class="badge badge-danger ml-3">LIVE</span></span>
                    </a> 
                    <a href="peserta.php" class="sidebar-header">
                        <i class="icon-themify-favicon"></i> <span>Peserta</span>
                    </a> 
                    <a href="penguji.php" class="sidebar-header">
                        <i class="icon-user"></i> <span>Penguji</span>
                    </a> 
                    <a href="anggota.php" class="sidebar-header">
                        <i class="icon-user"></i> <span>Anggota</span>
                    </a> 
                </li>     
            </ul>
            <div class="sidebar-widget text-center">
                <div class="sidebar-widget-top">
                    <h6 class="mb-2 fs-14">Find us on :)</h6>
                    <i class="fa fa-instagram"></i>
                </div>
                <div class="sidebar-widget-bottom p-20 m-20">
                    <p><a href="http://instagram.com/victorytkdbdg" target="_blank">@victorytkdbdg</a>
                        <br>victorytaekwondo.id
                    </p>
                </div>
                
            </div>
            <footer>
                <p class="footer-heart">
                Made with <g-emoji class="g-emoji" alias="heart" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png">
                <img class="emoji" alt="heart" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/2764.png"></g-emoji> by <a href="#">Victory Taekwondo Club</a>
                </p>
            </footer>
        </div>
        <!--Page Sidebar End -->

        <div class="page-body">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6" data-intro="This is page title">
                            <h3>Dashboard <small>User panel</small></h3>
                        </div>
                        <div class="col-lg-6" data-intro="This is breadcrumb">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 xl-100">
                        <div class="row">                            
                            <div class="col-sm-6 xl-25">
                                <div class="card">
                                    <div class="business-top-widget card-body">
                                        <div class="media d-inline-flex">
                                            <div class="media-body">
                                                <span class="mb-2">Peserta</span>
                                                
                                                <h2 class="total-value m-0 counter">2</h2>
                                            </div>
                                            <i class="icofont icofont-presentation-alt font-info align-self-center"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 xl-25">
                                <div class="card">
                                    <div class="business-top-widget card-body">
                                        <div class="media d-inline-flex">
                                            <div class="media-body">
                                                <span class="mb-2">Penguji</span>
                                                <h2 class="total-value m-0 counter">2</h2>
                                            </div>
                                            <i class="icofont icofont-users-alt-3 font-primary align-self-center"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 xl-25">
                                <div class="card">
                                    <div class="business-top-widget card-body">
                                        <div class="media d-inline-flex">
                                            <div class="media-body">
                                                <span class="mb-2">Dojang</span>
                                                <h6>Gor Vapor</h6>
                                            </div>
                                            <i class="icofont icofont-olympic-logo font-info align-self-center"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 xl-25">
                                <div class="card">
                                    <div class="business-top-widget card-body">
                                        <div class="media d-inline-flex">
                                            <div class="media-body">
                                                <span class="mb-2">Tanggal</span>
                                                <h6><?= date('d-m-Y') ?></h6>
                                            </div>
                                            <i class="icofont icofont-calendar font-danger align-self-center"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 xl-100">
                        <div class="card" data-intro="This is card showing profile">
                            <div class="business-card card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-12 align-self-center">
                                        <div class="text-center">
                                            <img src="assets/images/arie.png" class="logo" alt="u-logo">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-sm-12 b-l-light pt-3 pt-md-0">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
              
            </div>
            <!-- Container-fluid Ends -->

        </div>
                                            
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="assets/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap/popper.min.js" ></script>
<script src="assets/js/bootstrap/bootstrap.js" ></script>


<!-- owlcarousel js-->
<script src="assets/js/owlcarousel/owl.carousel.js" ></script>

<!-- Sidebar jquery-->
<script src="assets/js/sidebar-menu.js" ></script>



<!--Height Equal Js-->
<script src="assets/js/height-equal.js"></script>

<!-- Theme js-->
<script src="assets/js/script.js" ></script>
<!--Dashboard business js-->
<!--button tooltip custom js -->
<script src="assets/js/button-tooltip-custom.js" ></script>
<!--Datatable js-->
<script src="assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/datatables/datatable.custom.js"></script>


</body>

</html>
