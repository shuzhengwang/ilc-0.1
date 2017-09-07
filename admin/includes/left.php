      <link rel="shortcut icon" type="image/x-icon" href="https://secretivepleasures.com/images/favicon.ico">
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              
            </div>
            
          </div>
          <!-- search form -->
        
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<?php 
			if($user_data['photo']!=''){ ?>
					<li><img style="width:90%" src="upload/profiles/<?php echo $user_data['photo']; ?>"></li> 
			<?php } ?>
           <li class="treeview">
              <a href="index.php">
         <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
          </li>  
		  
		  <?php if(checkPermissions($_SESSION['admin_user_id'],array(5))){ ?>
            <li class="treeview">
              <a href="#">
	      <i class="ion ion-person-add"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="add-user.php"><i class="fa fa-circle-o"></i> Add User</a></li>
                <li><a href="user-list.php"><i class="fa fa-circle-o"></i> all Users</a></li>
               
              </ul>
            </li>
		<?php } ?>

          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

     