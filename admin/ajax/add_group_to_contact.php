<?php  	require("../../db.php");


$msg='';
$error=0;

  $group_id=addslashes($_POST['group_id']);
  $contact_id=addslashes($_POST['contact_id']);

  $query=mysqli_query($db,"select * from group_contacts where contact_id='$contact_id' and group_id='$group_id'");
  $total=mysqli_num_rows($query);

  if($total>0){
    mysqli_close($db);
    $arr = array('error' => "1",'msg'=>'error',"success"=>'0');
    echo json_encode($arr);return true;
 }else{
    $query="insert into group_contacts(contact_id,group_id,added_date)
    values('$contact_id','$group_id',now())";
    $exe_q=mysqli_query($db,$query);
    mysqli_close($db);
    $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
    echo json_encode($arr);return true;
  }
  
  

?>
  
