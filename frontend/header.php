<?php
//starting the session for accessing the login details
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>UIU ALUMNI ASSOCIATION</title>


    <!--tine mce-->
    <script src='../assets/frontend/assets/js/tinymce/tinymce.min.js'></script>
    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon"  href="../assets/frontend/assets/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="../assets/frontend/assets/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/frontend/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/frontend/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/frontend/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/frontend/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/frontend/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/frontend/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/frontend/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/frontend/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/frontend/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/frontend/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/frontend/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/frontend/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/frontend/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/frontend/assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/frontend/assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../assets/frontend/assets/img/favicon.ico" />

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
    <script src="../assets/frontend/assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/navbar/bootstrap-4-navbar.css" />

    <!--Animate css -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/animate/animate.css" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/fontawesome/css/font-awesome.min.css" />

    <!--owl carousel css -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/owl-carousel/owl.carousel.css" media="all" />

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/magnific/magnific-popup.css" media="all" />

    <!--Nice Select css -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/nice-select/nice-select.css" media="all" />

    <!--Offcanvas css -->
    <link rel="stylesheet" href="../assets/frontend/assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

    <!-- MODERNIZER  -->
    <script src="../assets/frontend/assets/vendor/modernizr/modernizr-custom.js"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="../assets/frontend/assets/css/style-default.min.css" media="all" />
    <!-- sweet alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<header id="header-area">

    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@construc.com"><strong>Email:</strong> info@construc.com</a>
                        <a href="mailto:info@construc.com"><strong>Hotline:</strong> 880 454 5477</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <?php
//                                echo '<pre>';
//                                print_r($_SESSION);
//                                echo '/<pre>';
                        #
                        if(isset($_SESSION['user_details']) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']== true){
                                echo '<a  class="btn-auth btn-auth-rev" >';
                                echo $_SESSION['user_details']->name;
                                echo '</a>';

                                echo '<a  class="btn-auth btn-auth-rev" href="logout.php" >';
                                echo "Logout";
                                echo '</a>';
                        }
                        else{
                            echo ' <a title="Login" class="btn-auth btn-auth-rev" href="register.php">Login</a>
                                    <a title="Register" class="btn-auth btn-auth" href="register.php">Signup</a>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="../assets/frontend/assets/img/logo.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="event.html">Event</a></li>
                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" role="button">Success Story</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="successStory.php">Success Story</a></li>
                                        <li class="nav-item"><a class="nav-link" href="addSuccessStory.php">Add Success Story</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>