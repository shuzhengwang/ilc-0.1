<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
		require_once("includes/left.php");
		
		$user_id=$_GET['user_id'];
		$query=mysqli_query($db,"select * from users where user_id='$user_id'");
		$row=mysqli_fetch_assoc($query);
		
		
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           View User Details
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
                 <form id="update_user"  method="post">
				 <input type="hidden" name="user_id" id="user_id" value="<?php echo $_GET['user_id']; ?>">
          <div class="form-group ">
             <label>First Name</label>:<?php echo $row['fname']; ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  <div class="form-group "> <label>Last Name</label>
            :<?php echo $row['lname']; ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>User Type</label>:
					  <?php if($row['user_type']==1)echo "General User"; ?>
					  <?php if($row['user_type']==2)echo "Patient"; ?>
					  <?php if($row['user_type']==3)echo "Doctor"; ?>
					  <?php if($row['user_type']==4)echo "Researcher"; ?>
                     
                    </div>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
		  <label>Email</label>:<?php echo $row['email']; ?>
            
            
          </div>

		 
		  <div class="form-group ">
					<div class="form-group">
                      <label>Security Question</label>:<?php echo $row['security_question']; ?>
                      
                    </div>
          </div>
		   <div class="form-group">
		   <label>Security Answer</label>:<?php echo $row['security_answer']; ?>
           
          </div>
		 <?php $file_name="../upload/certifications/".$row['certification_doc']; ?>
		  <div class="form-group ">
					<div class="form-group">
                      <label>Certification Document</label>:
					  <?php if($row['certification_doc']!=''){ ?>
					  <a href="lib/download.php?filename=<?php echo $file_name; ?>" class="links">Download</a>
					  <?php }else{
						  echo "Not uploaded";
					  } ?>
                      
                    </div>
          </div>
         
      

                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit"  class="btn btn-primary">Update</button>
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>
<!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
	
	 <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        
      });
    </script>
<script type="text/javascript">
  function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	
$(document).ready(function (e) { 
	$("#update_user").on('submit',(function(e) {
		e.preventDefault();
		
					if($( "#first_name" ).val()==''){
						alert ("First name is required."); 
						$("#first_name").focus();
						return false;
					}
					if($( "#last_name" ).val()==''){
						alert ("Last name is required."); 
						$("#last_name").focus();
						return false;
					}
					if($( "#user_email" ).val()==''){
						alert ("Email is required."); 
						$("#user_email").focus();
						return false;
					}
					if (!validateEmail($( "#user_email" ).val())) {
						$("#user_email").focus();
						alert("Please enter valid email address");
						return false;
					}

					if($( "#password" ).val()!=$( "#confirm_password" ).val()){
						alert ("Password and confirm password should be same.");
						$("#confirm_password").focus();
						return false;
					}

				$.ajax({
				url: "ajax/admin-update-user.php", // Url to which the request is send
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
					 alert("Updated successfully"); 
					 window.location="user-list.php";
				  }

				}
				});
		return false;
	}));
});
</script>