<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
		require_once("includes/left.php");
		
		$user_id=$_SESSION['admin_user_id'];
		$query=mysqli_query($db,"select * from users where user_id='$user_id'");
		$row=mysqli_fetch_assoc($query);
		
		
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update profile details
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
                 <form id="update_user"  method="post" enctype="multipart/form-data">
          <div class="form-group ">
            <input type="text" value="<?php echo $row['fname']; ?>" class="form-control" name="first_name" id="first_name" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group ">
            <input type="text" value="<?php echo $row['lname']; ?>" class="form-control" name="last_name" id="last_name" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group ">
		  <label>Profile Picture</label>
            <input type="file" name="profile_pic" id="profile_pic">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
			<br>
			<?php
				if($row['photo']!=''){
					?>
					<img style="width:40%" src="upload/profiles/<?php echo $row['photo']; ?>">
					<?php
				}
			?>
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>User Type</label>
					  
                      <select name="user_type" id="user_type" class="form-control">
                        <option <?php if($row['user_type']==1)echo "selected"; ?> value="1">General User</option>
                        <option <?php if($row['user_type']==2)echo "selected"; ?> value="2">Patient</option>
                        <option <?php if($row['user_type']==3)echo "selected"; ?> value="3">Doctor</option>
                        <option <?php if($row['user_type']==4)echo "selected"; ?> value="4">Researcher</option>
						
                        
                      </select>
                    </div>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input value="<?php echo $row['email']; ?>" type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input  type="password" class="form-control" name="password" id="password" placeholder="Password">
			<span style="color:red">Note: Only enter if you want to change password</span>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
		  <div class="form-group">
		   <label>Date Of Birth</label>
            <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input value="<?php echo $row['dob']; ?>" type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                    </div><!-- /.input group -->
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>Security Question</label>
                      <select name="security_question" id="security_question" class="form-control">
						
                        <option <?php if($row['security_question']=='selected')echo 'selected'; ?> value="selected">Please select...</option>
						<option <?php if($row['security_question']=='Your mothers maiden name')echo 'selected'; ?> value="Your mothers maiden name">Your mothers maiden name</option>
						<option <?php if($row['security_question']=='Your first pets name')echo 'selected'; ?> value="Your first pets name">Your first pets name</option>
						<option <?php if($row['security_question']=='The name of your elementary school')echo 'selected'; ?> value="The name of your elementary school">The name of your elementary school</option>
						<option <?php if($row['security_question']=='Your elementary school mascot')echo 'selected'; ?> value="Your elementary school mascot">Your elementary school mascot</option>
						<option <?php if($row['security_question']=='Your best friends nickname')echo 'selected'; ?> value="Your best friends nickname">Your best friends nickname</option>
						<option <?php if($row['security_question']=='Your favorite sports team')echo 'selected'; ?> value="Your favorite sports team">Your favorite sports team</option>
						<option <?php if($row['security_question']=='Your favorite writer')echo 'selected'; ?> value="Your favorite writer">Your favorite writer</option>
						<option <?php if($row['security_question']=='Your favorite actor')echo 'selected'; ?> value="Your favorite actor">Your favorite actor</option>
						<option <?php if($row['security_question']=='Your favorite singer')echo 'selected'; ?> value="Your favorite singer">Your favorite singer</option>
						<option <?php if($row['security_question']=='Your favorite song')echo 'selected'; ?> value="Your favorite song">Your favorite song</option>
						<option <?php if($row['security_question']=='The name of the street you grew up on')echo 'selected'; ?> value="The name of the street you grew up on">The name of the street you grew up on</option>
						<option <?php if($row['security_question']=='Make and model of your first car')echo 'selected'; ?> value="Make and model of your first car">Make and model of your first car</option>
						<option <?php if($row['security_question']=='The city where you first met your spouse')echo 'selected'; ?> value="The city where you first met your spouse">The city where you first met your spouse</option>
						<option <?php if($row['security_question']=='other')echo 'selected'; ?> value="other">Other...</option>
                        
                      </select>
                    </div>
					<input value="<?php echo $row['security_answer']; ?>" type="text" class="form-control" name="security_answer" id="security_answer" placeholder="Security Answer">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
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
				url: "ajax/update-user.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,  
				   
				success: function(data)   // A function to be called if request succeeds
				{
				  var obj = jQuery.parseJSON(data);
				  if( obj.error==1 ){
					  alert(obj.msg);
					  $(".error").html(obj.msg);
				  }else{
					 alert("Updated successfully"); 
					 window.location="edit-profile.php";
				  }

				}
				});
		return false;
	}));
});
</script>