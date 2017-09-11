<?php ob_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "password";
$mysql_database = "ilc";
$prefix = "";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);


define("SITEROOT","http://localhost/ilc");
?>