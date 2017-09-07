<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $id=$_GET['id'];
	   
	   $query=mysqli_query($db,"delete from groups where id='$id'");
	  
	   	
	}
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Group List
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
                        <th>Signup Date</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select * from groups");
while($row1=mysqli_fetch_assoc($query1)){
?>

<tr><td><?php echo $row1['name']; ?></td>
<td><?php echo $row1['added_date']; ?></td>
<td><a href="edit-group.php?id=<?php echo $row1['id']; ?>">
<button style="width: auto;" class="btn-success disabled" name="approved">Edit</button>

<a onclick="return confirm('Are you sure?')" href="group-list.php?id=<?php echo $row1['id']; ?>">
<button style="width: auto;" class="btn-danger" name="Delete">Delete</button></a>
</td>
</tr>
<?php } ?>

<script type="text/javascript">

function update_status(user_id){

      var dataString = '?user_id='+ user_id;

      $.ajax({url: "update-status.php"+dataString, success: function(result){
                     $("#update-status"+user_id).text("Approved");
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