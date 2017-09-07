<?php 
session_start();
include("../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    $uid = md5(uniqid(time()));
    $name = filter_var(addslashes($_GET["name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $phone = filter_var(addslashes($_GET["phone"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$user_email = filter_var(addslashes($_GET["user_email"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$message = filter_var(addslashes($_GET["message"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
		$subject="Contact us form request";
		$message="Name: ".$name."<br>";
		$message.="phone: ".$phone."<br>";
		$message.="Email: ".$user_email."<br>";
		$message.="Message: ".$message."<br>";
		
		$email_text = file_get_contents('../email_notification.html');
		$email_text=str_replace("[[SITETITLE]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[sitetitle]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[siteroot]]",SITEROOT,$email_text);
		$email_text=str_replace("[[subject]]",$subject,$email_text);
		$email_text=str_replace("[[message]]",$message,$email_text);
		

		$email_text=str_replace("[[firstname]]",'Admin',$email_text);
		
		
		
	  
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: International Library of Cannabinoids Staff<admin@ilc.com>' . "\r\n";
		$sentEmail = mail("rajendramjadhav@gmail.com", $subject, $email_text, $headers);
		echo 1;
mysqli_close($db);
?>