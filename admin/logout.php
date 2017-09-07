<?php 
session_start();
session_regenerate_id();
include("../db.php");

unset ($_SESSION['user_id']);
session_destroy();
header("location:".SITEROOT."/login.php");exit;

mysqli_close($db);
?>