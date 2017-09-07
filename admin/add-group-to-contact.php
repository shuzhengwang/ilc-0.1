<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $user_id=$_GET['id'];
	   
	   $query=mysqli_query($db,"delete from gentleman_account where user_id='$user_id'");
	   $query=mysqli_query($db,"delete from gentleman_info where user_id='$user_id'");
	   	
	}
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Group
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
                <!-- form start -->
                <form role="form" name="add_group_to_contact" id="add_group_to_contact" action="" method="post">  
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Select Group</label>
                      <select class="form-control" required name="group_id" id="group_id">
                        <option value="">Select</option>
                        <?php $query=mysqli_query($db,"select * from groups");
                          while($row=mysqli_fetch_assoc($query)){
                            ?>
                              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php 
                          }
                         ?>
                      </select>
                      
                    </div>

                    <div class="form-group">
                      <label for="">Select Contact</label>
                      <select class="form-control" required name="contact_id" id="contact_id">
                        <option value="">Select</option>
                        <?php $query=mysqli_query($db,"select * from contacts");
                          while($row=mysqli_fetch_assoc($query)){
                            ?>
                              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php 
                          }
                         ?>
                      </select>
                      
                    </div>
                                        
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
  
$(document).ready(function (e) { 
$("#add_group_to_contact").on('submit',(function(e) {
e.preventDefault();

$.ajax({
url: "ajax/add_group_to_contact.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,  
   
success: function(data)   // A function to be called if request succeeds
{
  var obj = jQuery.parseJSON(data);
  if( obj.error==1 ){
      alert('Group already assigned to selected contact.');
  }else{
    alert('Group assigned succssfully to selected contact.');
    window.location="contact-list.php";
  }

}
});
return false;
}));
});
</script>