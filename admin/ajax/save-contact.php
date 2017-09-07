<?php  	require("../../db.php");


$msg='';
$error=0;

$photo='';	
if(isset($_FILES["file"]["type"]) && $_FILES["file"]["name"]!='')
{
          $validextensions = array("jpeg", "jpg", "png","JPEG","JPG","PNG");
          $temporary = explode(".", $_FILES["file"]["name"]);
          $file_extension = end($temporary);

          if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
          ) && ($_FILES["file"]["size"] < 2097152 )//Approx. 2mb files can be uploaded.
          && in_array($file_extension, $validextensions)) {
                  if ($_FILES["file"]["error"] > 0)
                  {
                     
                      $error=1;
                      $msg="Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
                  }
                  else
                  {
                        if (file_exists("../upload/" . $_FILES["file"]["name"])) {
                            $error=1;
                            $msg=$_FILES["file"]["name"] . "already exists";
                        }
                        else
                        {
                              $photo=$_FILES["file"]["name"];
                              $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                              $targetPath = "../upload/".$_FILES['file']['name']; // Target path where file is to be stored
                              move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                             
                        }
                  }
          }
          else
          {
            $error=1; 
            $msg="Invalid file Size Max size:2MB or Type";
          }
}

if($error){
  $arr = array('error' => "1",'msg'=>$msg,"success"=>'0');
  mysqli_close($db);
  echo json_encode($arr);return true;
}else{
  $name=addslashes($_POST['name']);
  $email=addslashes($_POST['email']);
  $conatct_number=addslashes($_POST['conatct_number']);
  $address=addslashes($_POST['address']);

  $photo=$photo;
  $skype_name=addslashes($_POST['skype_name']);
  $facebook_link=addslashes($_POST['facebook_link']);
  $twitter_link=addslashes($_POST['twitter_link']);

  $query="insert into contacts(name,email,contact_number,address,photo,skype_name,facebook_link,twitter_link,added_date)
  values('$name','$email','$conatct_number','$address','$photo','$skype_name','$facebook_link','$twitter_link',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

}?>
  
