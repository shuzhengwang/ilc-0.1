<?php 
include("../db.php");

$flag=0;
$errors=array();
if(isset($_POST['save'])){
	
		$token=addslashes($_POST['token']);
		$errors= array();
		$file_name = $_FILES['cert_doc']['name'];
		$file_size =$_FILES['cert_doc']['size'];
		$file_tmp =$_FILES['cert_doc']['tmp_name'];
		$file_type=$_FILES['cert_doc']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['cert_doc']['name'])));
      
		$extensions= array("jpeg","jpg","png","pdf","gif");
		$file_ext=strtolower($file_ext);
		  if(in_array($file_ext,$extensions)=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
		  }
		  
		  if($file_size > 2097152){
			 $errors[]='File size must be excately 2 MB';
		  }
		
		if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/certifications/".$file_name);
			$query="update users set certification_doc='$file_name' where activate_token='$token'";
			$run_q=mysqli_query($db,$query);
         $flag=1;
      }else{
         
      }	
	  
	
}
/*$query="update users set status='1' where activate_token='$token'";
$run_q=mysqli_query($db,$query); */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Activate Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: #cecece none repeat scroll 0 0;" class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b><i></i>Upload Document</b>
	 <div class="login-box-body">
        <p class="login-box-msg"></p>
        <div style="color:red" id="check_user_text"></div>
        <form action="activate_account.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="token" id="token" value="<?php echo $_GET['token']; ?>">
          <div class="row">
            <div class="col-xs-12">
			<div style="color:red"><?php if(count($errors)>0){
				foreach($errors as $val){
					echo $val;
				}
			} ?>
			</div>
			<div style="color:green">
			<?php if($flag==1){
				echo "Your document is submitted for admin approval. We will send you email once admin approve it.";
			}else{ ?>
			
              Please Upload certification document to approve your profile:
			  <input type="file" name="cert_doc" name="cert_doc">
              <br><br><a href="login.php">			  
			  <input name="save" id="save" type="submit" value="Submit" class="btn btn-primary btn-block btn-flat">
			  </a>
			<?php } ?>
               </div>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-5">
			
            </div><!-- /.col -->
          </div>
        </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      
      $(document).ready(function(){
		$(".sign-in").click(function(){  
				  if($( "#username" ).val()==''){
					alert ("Username is required.");
					  $("#username").focus();
					  return false;
				  }

				  if($( "#password" ).val()==''){
					alert ("Password is required.");
					  $("#password").focus();
					  return false;
				  }
				  
				  var dataString = '?username='+ $("#username").val() + '&password=' + $("#password").val();
				  
				  $.ajax({url: "save-admin-login.php"+dataString, success: function(result){
					  if (result==1){
						    window.location="index.php";
					  } else{
						$("#check_user_text").text("Wrong username and password.");
					  }
				  }});
				  
                        return false;
		});                   
      });
    </script>
  </body>
</html>
