<?php 
include("db.php");
include("includes/header.php"); ?>
<!-- inner Section -->
 <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <section class="overlay overlay-green parallax"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">
                        <h2>Contact</h2>
                        <p>Home. Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="contact-1">
              <div class="container">
                  <div class="section-content">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="contact-item">
                                  <div class="content">
                                      <h5>contact us : </h5>
                                      <p>17 Downtown St, Victoria,<br>Australia</p>
                                  </div>
                                  <span class="icon icon-Starship"></span>
                              </div>
                              <div class="contact-item">
                                  <div class="content">
                                      <h5>call us : </h5>
                                      <p>+(01) 123 456 7896<br>+(01) 123 456 7899</p>
                                  </div>
                                  <span class="icon icon-Phone2"></span>
                              </div>
                          </div>
                          <div class=" col-md-8">
                              <!-- Contact Form -->
                                  <h2>send us <span>message</span> </h2>
                              <form class="contact-form" method="post"  role="form">
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Name *</label>
                                                <input id="name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Phone *</label>
                                                <input id="phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone *" required="required" data-error="Phone number is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <input id="user_email" type="email" name="user_email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Message *</label>
                                                <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
											<div id="check_user_text"></div>
                                            <input type="submit" class="btn btn-success btn-send" value="Send message">
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
     
      
	  function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
      $(document).ready(function(){
		$(".btn-send").click(function(){  
					
				  if($( "#name" ).val()==''){
						alert ("Name is required."); 
						$("#name").focus();
						return false;
					}
					if($( "#phone" ).val()==''){
						alert ("Phone is required."); 
						$("#phone").focus();
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
					
					if($( "#message" ).val()==''){
						alert ("Message is required."); 
						$("#message").focus();
						return false;
					}
				  var dataString = '?name='+ $("#name").val() + '&phone=' + $("#phone").val()+ '&user_email=' + $("#user_email").val()+ '&message=' + $("#message").val();
				  
				  $.ajax({url: "ajax/save-contact.php"+dataString, success: function(result){
					  if (result==1){
							alert("Thank you. We will contact you soon");
						    window.location="contact-us.php";
					  } else{
						$("#check_user_text").text("Something went wrong. Please try again");
						alert("Something went wrong. Please try again");
					  }
				  }});
				  
                        return false;
		});                   
      });
    </script>
	
	
	  <?php include("includes/footer.php"); ?>
  