
<?php 

require('include/db_config.php');

if(isset($_POST['submit']))
{
$p = $_FILES['file']['name'];
$q = $_POST['img-cat'];
$r = $_POST['img-author'];
$s = $_POST['img-date'];

	
$query="insert into love_images(image_name, image_date, image_author, image_category)
 values('$p', '$s', '$r', '$q')";
	
 $name=$_FILES['file']['name'];
 $type=$_FILES['file']['type'];
 $size=$_FILES['file']['size'];
 $tmp=$_FILES['file']['tmp_name'];
 
  	$run=mysqli_query($con,$query);

 	 move_uploaded_file($tmp,"images/".$q ."/" .$_FILES['file']['name']);

	header('location:upload.php?success=Picture__Added');
	
	
}
	

else
{

	header('location:upload.php?con_error=Connection_Lost!!!');

}

?>
