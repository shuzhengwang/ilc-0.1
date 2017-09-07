<?php  	session_start();
include("../../db.php");

    
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $user_id = filter_var(addslashes($_GET["user_id"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $status = filter_var(addslashes($_GET["status"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	
	$query="update users set status='$status' where user_id='$user_id'";
	$run_q=mysqli_query($db,$query);
	
   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
	echo json_encode($arr);return true;

?>
  
