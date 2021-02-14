 <?php include 'config.php';         include 'database.php';
 ?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $settings['site_meta_title']?>" />
    <meta name="author" content="xWB">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title><?php  ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- chat CSS -->
    <link rel="stylesheet" href="assets/css/chat.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Date picker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
</head>
<body>
  <!-- skiptocontent start ( This section for blind and Google SEO, Also for page speed )-->
  <a id="skiptocontent" href="#maincontent">skip navigation</a>
  <!-- skiptocontent End -->
<header>
    <!-- Header top area start -->
	<div class="header-top-area">
       <div class="container">
          <div class="row">
             <div class="col-12 col-lg-8">
                <div class="top-contact">
                   <a href="#"><i class="fa fa-envelope"></i> <?php echo $settings['site_email']?></a>
                   <a href="#"><i class="fa fa-phone"></i> <?php echo $settings['site_tel']?></a>
                   
                </div>   
             </div>
             <div class="col-12 col-lg-4">
                
             </div>
          </div>
       </div>
    </div>
    <!-- Header top area End -->
    
    <!-- Header area start -->
	<div class="header-area">
      <div class="container"> 
        <!-- Site logo Start --> 
        <div class="logo">
          <a href="index.php" title="W-shipping"><img src="assets/images/image_1.png" alt="W-shipping"/></a>
        </div>
        <!-- Site logo end -->
        <div class="mobile-menu-wrapper"></div>
      
        
        <!-- Main menu start -->
        <nav class="mainmenu">
          <ul id="navigation">
             <li class=""><a href="index.php">Home</a>
            
             </li>
               <li ><a href="about.php">About Us</a>  
             </li>
             <li ><a href="#">Services</a>
                <ul>
                 <?php foreach ($services as $key => $details):?>
                
                   <li ><a href="service.php?service=<?php echo $key ?>"><?php echo $key?></a></li>
                <?php endforeach;?> 
                 
                </ul>
             </li>
           
          
             <li ><a href="contact.php">Contact Us</a></li>
          </ul>
        </nav>
        <!-- Main menu end -->   
      </div>
    </div>
    <!-- Header area End -->
  </header>