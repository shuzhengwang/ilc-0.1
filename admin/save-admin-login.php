<?php 
session_start();
session_regenerate_id();
include("../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $username = filter_var($_GET["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $password = filter_var($_GET["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $_SESSION["S"] = $username;
	$q = "SELECT * FROM users WHERE email = '$username' AND password = md5('$password')";
	$result = mysqli_query($db,$q);
	if (mysqli_num_rows($result)==1) {
		$row=mysqli_fetch_assoc($result);
		$_SESSION['admin_user_id']=$row['user_id'];
		echo 1;
			
	}else{
		echo 0;
	}

mysqli_close($db);
?>