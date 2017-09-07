<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $user_id=$_GET['id'];
	   
	   $query=mysqli_query($db,"delete from contacts where id='$user_id'");
	  
	   	
	}
	
	 if(!checkPermissions($_SESSION['admin_user_id'],array(5))){ 
		header("location:index.php");
	 }
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User List
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select u.status,u.user_id,u.email,u.fname,u.lname,ut.name from users u inner join user_type ut on u.user_type=ut.id");
while($row1=mysqli_fetch_assoc($query1)){

  if($row1['status']==0){
	  $status_msg='Approve';
	  $temp_status=1;
  }else{
	  $status_msg='DisApprove';
	  $temp_status=0;
  }
?>

<tr><td><?php echo $row1['fname'].' '.$row1['lname']; ?></td>
<td><?php echo $row1['email']; ?></td>
<td><?php echo $row1['name']; ?></td>

<td>
<a href="view-user.php?user_id=<?php echo $row1['user_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View</button></a>
<button id="update-status<?php echo $row1['user_id']; ?>" onclick="return update_status(<?php echo $row1['user_id']; ?>,<?php echo $temp_status; ?>)" style="width: auto;" class="btn-success disabled" name="approved"><?php echo $status_msg; ?></button>
<a href="admin-edit-profile.php?user_id=<?php echo $row1['user_id']; ?>">
<button style="width: auto;" class="btn-success disabled" name="approved">Edit</button>

<a onclick="return confirm('Are you sure?')" href="contact-list.php?id=<?php echo $row1['id']; ?>">
<button style="width: auto;" class="btn-danger" name="Delete">Delete</button></a>
</td>
</tr>
<?php } ?>

<script type="text/javascript">

function update_status(user_id,status){

      var dataString = '?user_id='+ user_id+"&status="+status;

      $.ajax({url: "ajax/update_status.php"+dataString, success: function(result){
					if(status==1){
						$("#update-status"+user_id).text("DisApprove");
					}else{
						$("#update-status"+user_id).text("Approve");
					}
		}});
      }
      
</script>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
<?php require_once("includes/footer.php"); ?>