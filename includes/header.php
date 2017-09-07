<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>International Library Of Cannabinoids</title>
<!-- Stylesheets -->
<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
<link href="<?php echo SITEROOT; ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo SITEROOT; ?>/	css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="<?php echo SITEROOT; ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo SITEROOT; ?>/css/responsive.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<!--Change Class in body to change color Scheme for Homepages  ie theme-green , theme-green -->

<body class="theme-green">
<div class="page-wrapper"> 
  
  <!-- start preloader -->
  <div class="preloader"></div>
  <!-- end preloader --> 
  
  <!-- Main Header / Style One-->
  <header class="main-header header-style-one"> 
    <!-- Header Top -->
    <div class="header-top">
      <div class="container clearfix ptn pbn"> 
        <!--Top Left-->
        <div class="top-left pull-left">
          <ul class="info-nav clearfix">
            <li> 
              <!--Social Links-->
              <div class="social-links pull-left"> <span class="text-theme-color">Follow Us</span> : <a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-linkedin"></span></a> </div>
            </li>
            <li><a href="mailto:yourmail@gmail.com"><span class="icon icon-Mail mr10"></span>Opening Hours</a></li>
          </ul>
        </div>
        <!--Top Right-->
        <div class="top-right pull-right clearfix"> 
          <!--Lang Bar-->
          <ul class="info-nav clearfix">
            <li><a href="#"><i class="icon icon-Phone mr10 text-theme-color"></i><span class="ml5">Emergency Line</span> (+123) 2456 987</a></li>
			<?php if(isset($_SESSION['admin_user_id'])){
				?>
				 <li><a href="<?php echo SITEROOT; ?>/admin/index.php" class="text-uppercase appoinment"> Dashboard</a></li>
				<li><a href="<?php echo SITEROOT; ?>/admin/logout.php" class="text-uppercase appoinment"> Logout</a></li>
			<?php 	
			}else{		?>
            <li><a href="<?php echo SITEROOT; ?>/login.php" class="text-uppercase appoinment"> Login</a></li>
			<li><a href="<?php echo SITEROOT; ?>/admin/register.php" class="text-uppercase appoinment"> Register</a></li>
			<?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- Header Top End --> 
    
    <!--Header-Main Box-->
    <div class="header-mainbox">
      <div class="container ptn pbn">
        <div class="clearfix">
          <div class="pull-left">
            <div class="logo"> <a href="index-mp-layout1.html"><img src="images/logo/logo.png" alt="" title="Green"></a> </div>
          </div>
          <div class="outer-box clearfix"> 
            <!-- Main Menu -->
            <nav class="main-menu logo-outer">
              <div class="navbar-header"> 
                <!-- Toggle Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li class="current dropdown"> <a href="<?php echo SITEROOT; ?>/index.php">Home</a>
                    </li>
                  <li class="dropdown"> <a href="<?php echo SITEROOT; ?>/about-us.php">About us</a>
                   </li>
                  
                  <li class="dropdown"> <a href="<?php echo SITEROOT; ?>/blog.php">Blog</a>
                    
                  </li>
                  <li class="dropdown"> <a href="<?php echo SITEROOT; ?>/contact-us.php">Contact Us</a>
                    
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Main Menu End--> 
          </div>
        </div>
      </div>
    </div>
    <!--Header Main Box End--> 
  </header>
  <!--End Main Header --> 