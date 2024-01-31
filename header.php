<?php include('database.php') ?>
<?php include('config.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vinnex Services | <?php echo isset($page_title) ? $page_title : 'Home';  ?></title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header -->
        <header class="main-header">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="top-bar">
                    <div class="auto-container clearfix">
                        <!--Top Right-->
                        <div class="top-right">
                            <ul class="clearfix">
                                <li><span class="icon flaticon-phone41"></span> <?php echo $settings['site_phone']  ?></li>
                                <li><span class="icon flaticon-mail4"></span> <?php echo $settings['site_email'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="auto-container">
                    <div class="clearfix">

                        <!--Logo-->
                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.php"><img width="100" src="images/vinnexservices_logo.png" alt="" title="Logika"></a></div>
                        </div>


                    </div>
                </div>
            </div>

            <!--Header-Lower-->
            <div class="header-lower">
                <div class="auto-container clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current "><a href="index.php">Home</a>

                                </li>
                                <li><a href="about_us.php">About us</a></li>
                                <li class=""><a href="services.php">Services</a>

                                </li>

                                <li><a href="contact_us.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Get Quote Button-->

                </div>
            </div>

        </header>
        <!--End Main Header -->