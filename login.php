<?php 
include("db.php");
include("includes/header.php"); ?>
 <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
 <!-- inner Section -->
    <section class="overlay overlay-green parallax"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2>Login</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="contact-1">
              <div class="container">
                  <div class="section-content">
                      <div class="row">
                         
                          <div class=" col-md-8">
                              <!-- Contact Form -->
                                  <h2>Login <span></span> </h2>
								  <div style="color:red" id="check_user_text"></div>
                              <form class="contact-form" method="post"  role="form">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Email *</label>
                                                <input id="email_id" type="text" name="name" class="form-control" placeholder="Please enter your Email *" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Paswword *</label>
                                                <input id="password" type="password" name="phone" class="form-control" placeholder="Please enter your password *" required="required" data-error="Phone number is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
										<div class="col-md-12">
                                            <input type="submit" class="btn btn-success btn-send sign-in" value="Login">
                                        </div>
                                    </div>

                                </div>
                              </form> 
                          </div>
                      </div>
                  </div>
              </div>
    </section>
	<script type="text/javascript">
    
      
      $(document).ready(function(){
		$(".sign-in").click(function(){  
				  if($( "#email_id" ).val()==''){
					alert ("Email is required.");
					  $("#email_id").focus();
					  return false;
				  }

				  if($( "#password" ).val()==''){
					alert ("Password is required.");
					  $("#password").focus();
					  return false;
				  }
				  
				  var dataString = '?username='+ $("#email_id").val() + '&password=' + $("#password").val();
				  
				  $.ajax({url: "admin/save-admin-login.php"+dataString, success: function(result){
					  if (result==1){
						    window.location="admin/index.php";
					  } else{
						$("#check_user_text").text("Wrong username and password.");
					  }
				  }});
				  
                        return false;
		});                   
      });
    </script>
 <?php include("includes/footer.php"); ?>