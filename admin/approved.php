	<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $review_id=$_GET['id'];
	   
	   $query=mysqli_query($db,"delete from review where id='$review_id'");
     header("location:unapproved.php");
	   	
	}
?>
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
                 <div style="display: none" class="alert alert-warning alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <h4><i class="icon fa fa-warning"></i> Review Approved successfully</h4>
                    
                  </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Approved Reviews 
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
                        <th>Review</th>
                        <th>Added Date</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select * from review where approved='1' order by id desc");
while($row1=mysqli_fetch_assoc($query1)){
?>

<tr><td><?php echo substr($row1['review'],0,100);if(strlen($row1['review'])>100)echo '...'; ?></td>
<td><?php echo $row1['added_date']; ?></td>
<td><a href="view_review.php?id=<?php echo $row1['id']; ?>">
<button style="width: auto;" class="btn-primary various" name="view">View</button></a>

<a onclick="return confirm('Are you sure?')" href="approved.php?id=<?php echo $row1['id']; ?>">
<button style="width: auto;" class="btn-danger" name="Delete">Delete</button></a>
</td>
</tr>
<?php } ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<script type="text/javascript">
function update_status(id){
      var dataString = '?id='+ id;
      $.ajax({url: "update-review-status.php"+dataString, success: function(result){
                    $(".alert-warning").show();
                     $("html, body").animate({ scrollTop: 0 }, "slow"); 
                     setTimeout(
                        function() 
                        {
                         window.location="unapproved.php";
                        }, 5000);
                    
		}});
      }

</script>      
      
<?php require_once("includes/footer.php"); ?>