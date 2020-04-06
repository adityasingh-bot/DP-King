<?php //to connect with mysqli
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
//to select the database
$db=mysqli_select_db($con,"dp-king")or die(mysqli_error());

?>