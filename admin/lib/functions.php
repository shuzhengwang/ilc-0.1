<?php 
function checkPermissions($user_id,$permissions){
	global $db;
	$flag=1;
	foreach($permissions as $val){
		
		$query=mysqli_query($db,"select * from users where user_id='$user_id' and user_type='$val'");
		$total=mysqli_num_rows($query);
		if($total<1){
			$flag=0;break;
		}
	}
	if($flag==1)
		return 1;
	else return 0;
}
?>