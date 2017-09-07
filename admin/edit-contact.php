<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	  $contact_id=addslashes($_GET['id']);
	  $query=mysqli_query($db,"select * from contacts where id='$contact_id'");
    $row=mysqli_fetch_assoc($query);
	  
	   	
	}
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update Contact
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
                <form role="form" name="update_contact" id="update_contact" action="" method="post">
                <input type="hidden" name="contact_id" id="contact_id" value="<?php echo $contact_id; ?>">  
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Name*</label>
                      <input value="<?php echo $row['name']; ?>" type="text" required class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                     <div class="form-group">
                      <label for="">Email*</label>
                      <input value="<?php echo $row['email']; ?>" type="email" required class="form-control" id="email" name="email" placeholder="Name">
                    </div>

                    <div class="form-group">
                      <label for="">Contact Number*</label>
                      <input value="<?php echo $row['contact_number']; ?>" type="text" required class="form-control" id="conatct_number" name="conatct_number" placeholder="Conatct Number">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea  name="address" id="address" class="form-control" rows="3" placeholder="Address"><?php echo $row['address']; ?></textarea>
                    </div>

                    
                    <div class="form-group">
                      <label for="">Photo</label>
                      <input name="file" id="file" type="file" id="exampleInputFile">
                      <p class="help-block">Profile Picture</p>
                      <p>
                        <?php if($row['photo']) ?>
                        <img width="100px" height="100px" src="upload/<?php echo $row['photo']; ?>">
                        <?php ?>
                      </p>
                    </div>

                    <div class="form-group">
                      <label for="">Skype User Name</label>
                      <input value="<?php echo $row['skype_name']; ?>" type="text" class="form-control" id="skype_name" name="skype_name" placeholder="Skype Name">
                    </div>

                     <div class="form-group">
                      <label for="">Facebook Link</label>
                      <input value="<?php echo $row['facebook_link']; ?>" type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Facebook Link">
                    </div>

                     <div class="form-group">
                      <label for="">Twitter Link</label>
                      <input value="<?php echo $row['twitter_link']; ?>" type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter Link">
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
  
$(document).ready(function (e) { 
$("#update_contact").on('submit',(function(e) {
e.preventDefault();

$.ajax({
url: "ajax/update-contact.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,  
   
success: function(data)   // A function to be called if request succeeds
{
  var obj = jQuery.parseJSON(data);
  if( obj.error==1 ){
      $(".error").html(obj.msg);
  }else{
    window.location="contact-list.php";
  }

}
});
return false;
}));
});
</script>