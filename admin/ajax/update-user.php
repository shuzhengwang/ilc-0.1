<?php  	session_start();
include("../../db.php");

    $user_id=$_SESSION['admin_user_id'];
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
		$error_msg='';
		$errors= array();
		$file_name = $_FILES['profile_pic']['name'];
		$file_size =$_FILES['profile_pic']['size'];
		$file_tmp =$_FILES['profile_pic']['tmp_name'];
		$file_type=$_FILES['profile_pic']['type'];
		$file_ext=strtolower(end(explode('.',$_FILES['profile_pic']['name'])));
      
		$extensions= array("jpeg","jpg","png","pdf","gif");
		$file_ext=strtolower($file_ext);
		  if(in_array($file_ext,$extensions)=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
		  }
		  
		  if($file_size > 2097152){
			 $errors[]='File size must be excately 2 MB';
		  }
		
		if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../upload/profiles/".$file_name);
			$query="update users set photo='$file_name' where user_id='$user_id'";
			$run_q=mysqli_query($db,$query);
         $flag=1;
      }else{
		  foreach($errors as $val){
			  $error_msg=$val;
		  }
          $arr = array('error' => "1",'msg'=>$error_msg,"success"=>'0');
		  echo json_encode($arr);
		 return false;
      }	

    $uid = md5(uniqid(time()));
    $fname = filter_var(addslashes($_POST["first_name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $lname = filter_var(addslashes($_POST["last_name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$user_type = filter_var(addslashes($_POST["user_type"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$user_email = filter_var(addslashes($_POST["user_email"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$password = filter_var(addslashes($_POST["password"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$dob = filter_var(addslashes($_POST["dob"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$security_question = filter_var(addslashes($_POST["security_question"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$security_answer = filter_var(addslashes($_POST["security_answer"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$query="update users set fname='$fname',lname='$lname',email='$user_email ',user_type='$user_type',security_question='$security_question',security_answer='$security_answer',dob='$dob' where user_id='$user_id'";
	$run_q=mysqli_query($db,$query);
	
	if($password!=''){
		mysqli_query($db,"update users set password=md5('$password') where user_id='$user_id'");
	}

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  
