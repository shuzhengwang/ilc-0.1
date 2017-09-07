<?php 
require("../db.php");
require_once("includes/header.php");
require_once("includes/left.php");

?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

      <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
            <b></b>
         
          <?php if(checkPermissions($_SESSION['admin_user_id'],array(5))){  ?>
          <div class="row">
        <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">

		    <?php
			$query=mysqli_query($db,"select * from users ");
			$total=mysqli_num_rows($query);
		    ?>

                  <h3><?php echo $total; ?></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <?php 
                  $query1=mysqli_query($db,"select * from users where user_type='3'");
                  $count_groups=mysqli_num_rows($query1);
                ?>
                  <h3><?php echo $count_groups; ?></h3>
                  <p>Doctors</p>
                </div>
                <div class="icon">
                  <img src="dist/img/icon_reviews.png">
                </div>
                <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			
			<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                <?php 
                  $query1=mysqli_query($db,"select * from users where user_type='2'");
                  $count_groups=mysqli_num_rows($query1);
                ?>
                  <h3><?php echo $count_groups; ?></h3>
                  <p>Patients</p>
                </div>
                <div class="icon">
                  <img src="dist/img/icon_reviews.png">
                </div>
                <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
          </div><!-- /.row -->
		  <?php } ?>
      
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">



            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php require_once("includes/footer.php"); ?>