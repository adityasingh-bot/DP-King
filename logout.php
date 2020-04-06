<?php 
session_start();
unset($_SESSION['USER']);
session_destroy();
header("location:signin.php?logout=You_Are_Logout");


?>