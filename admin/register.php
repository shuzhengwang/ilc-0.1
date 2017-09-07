<?php  include("../db.php");
include("../includes/header.php"); ?>

 <section class="overlay overlay-green parallax"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2>Register</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>  
   
 <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
   <section class="contact-1">
              <div class="container">
                  <div class="section-content">
                      <div class="row">
                         
                          <div class=" col-md-8">
						  
    <div class="login-box">
      <div class="login-logo">
        
	 <div class="login-box-body">
        
        
        <form action="index.php" method="post">
           <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
		<div style="color:red" id="check_user_text"></div>
        <form action="../../index.html" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>User Type</label>
                      <select name="user_type" id="user_type" class="form-control">
                        <option value="1">General User</option>
                        <option value="2">Patient</option>
                        <option value="3">Doctor</option>
                        <option value="4">Researcher</option>
                        
                      </select>
                    </div>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
                      <input type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                    </div><!-- /.input group -->
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>Security Question</label>
                      <select name="security_question" id="security_question" class="form-control">
                        <option value="" selected="selected">Please select...</option>
						<option value="Your mothers maiden name">Your mothers maiden name</option>
						<option value="Your first pets name">Your first pets name</option>
						<option value="The name of your elementary school">The name of your elementary school</option>
						<option value="Your elementary school mascot">Your elementary school mascot</option>
						<option value="Your best friends nickname">Your best friends nickname</option>
						<option value="Your favorite sports team">Your favorite sports team</option>
						<option value="Your favorite writer">Your favorite writer</option>
						<option value="Your favorite actor">Your favorite actor</option>
						<option value="Your favorite singer">Your favorite singer</option>
						<option value="Your favorite song">Your favorite song</option>
						<option value="The name of the street you grew up on">The name of the street you grew up on</option>
						<option value="Make and model of your first car">Make and model of your first car</option>
						<option value="The city where you first met your spouse">The city where you first met your spouse</option><option value="other">Other...</option>
                        
                      </select>
                    </div>
					<input type="text" class="form-control" name="security_answer" id="security_answer" placeholder="Security Answer">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat register">Register</button>
            </div><!-- /.col -->
          </div>
        </form>


        <a href="<?php echo SITEROOT; ?>/login.php" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
        </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	
</div>
</div>
</div>
</div>
</div>
	

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
	
	 <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
	
    <script type="text/javascript">
     
      
	  function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
      $(document).ready(function(){
		$(".register").click(function(){  
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

					if($( "#password" ).val()==''){
						alert ("Password is required.");
						$("#password").focus();
						return false;
					}
					
					if($( "#password" ).val()!=$( "#confirm_password" ).val()){
						alert ("Password and confirm password should be same.");
						$("#confirm_password").focus();
						return false;
					}
				  
				  var dataString = '?fname='+ $("#first_name").val() + '&lname=' + $("#last_name").val()+ '&user_type=' + $("#user_type").val()+ '&user_email=' + $("#user_email").val()+ '&password=' + $("#password").val()+ '&dob=' + $("#dob").val()+ '&security_question=' + $("#security_question").val()+ '&security_answer=' + $("#security_answer").val();
				  
				  $.ajax({url: "save-register.php"+dataString, success: function(result){
					  if (result==1){
							alert("Successfully Registered. We have sent you account activate link on your email address.");
						    window.location="../login.php";
					  } else{
						$("#check_user_text").text("Something went wrong. Please try again");
						alert("Something went wrong. Please try again");
					  }
				  }});
				  
                        return false;
		});                   
      });
    </script>
	
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
 <?php include("../includes/register-footer.php"); ?>
