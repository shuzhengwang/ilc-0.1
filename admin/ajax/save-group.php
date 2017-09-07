<?php  	require("../../db.php");


$msg='';
$error=0;


  $name=addslashes($_POST['name']);
 
  $query="insert into groups(name,added_date)
  values('$name',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  
