<?php
session_start();
if(!isset($_SESSION['USER']))
{
  header('location:signin.php?session_error');   
}		
  
?>
<?php 
require('include/db_config.php');

if(isset($_POST['submit']))
{
echo print_r($_POST);
$p=$_POST['user'];
$q=$_POST['password'];

$que="select * from admin where binary user='$p' and binary pass='$q'";
$run=mysqli_query($con,$que);
//echo"serial ckeck";
   if(mysqli_num_rows($run)>=1)

    {
	$sql="SELECT * FROM admin where binary user='$p'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
 
		   $_SESSION['USER']=$_POST['user'];
		    header('location:upload.php'); 
		 
		 }


	
        else
          {
		  
		header('location:signin.php?login_error=OOPs...E-Mail_or_Password_Invalid !!!');

	
	}
}
else{

	
	header('location:signin.php?error=WrongData!!!');


}
?>
