<?php session_start();

include("lib/functions.php");

if(!isset($_SESSION['admin_user_id'])){
    header("location:".SITEROOT."/login.php");exit;
}

$user_id=$_SESSION['admin_user_id'];
$query=mysqli_query($db,"select * from users where user_id='$user_id'");
$user_data=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">

function update_view(){

      $.ajax({url: "update-view.php", success: function(result){
           $('.update_view').text('0');
	}});
      }
function marknotiread(){
       $.ajax({url: "noti-mark-all-read.php", success: function(result){
           $('.update_noti_view').text('0');
	}});
}
</script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">




    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
		
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i></i></b>A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><i>Welcome</i></b>&nbsp;<?php echo $user_data['fname']; ?></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
		  
		  <div style="float:left" class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- Notifications: style can be found in dropdown.less -->
				<li>
				 
                      <a href="<?php echo SITEROOT ?>" class="btn btn-default btn-flat">Home</a>
                   
              </li>
			  <li>
				 
                      <a href="<?php echo SITEROOT ?>/about-us.php" class="btn btn-default btn-flat">About Us</a>
                   
              </li>
			  <li>
				 
                      <a href="<?php echo SITEROOT ?>/blog.php" class="btn btn-default btn-flat">Blog</a>
                   
              </li>
			  <li>
				 
                      <a href="<?php echo SITEROOT ?>/contact-us.php" class="btn btn-default btn-flat">Contact Us</a>
                   
              </li>
			</ul>
		</div>	
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
             
              <!-- Notifications: style can be found in dropdown.less -->
				
              <!-- Tasks: style can be found in dropdown.less -->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-fw fa-angle-double-down"></i>
                  <span class="hidden-xs"><?php echo $user_data['fname'].' '.$user_data['lname']; ?></span>
                </a>
				
                <ul class="dropdown-menu">
                  <!-- User image -->
                 
                  <!-- Menu Footer-->
				   <li class="user-footer">
				   
				  
                   
                    <div class="pull-right">
                      <a href="edit-profile.php" class="btn btn-default btn-flat">Edit Profile</a>
                    </div>
                  </li>
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>
      