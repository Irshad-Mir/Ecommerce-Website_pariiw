<?php

//connection
require_once "./functions/database_functions.php";
$conn = db_connect();

//varaible to get data
$email = $_POST['email'];
$password = $_POST['password'];
//session_start();
$result=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email' && `password`='$password';");
$count=mysqli_num_rows($result);
if($count==1)
{
 
    
    //$_SESSION['admin'] = true;
    header("refresh:0;url=checkout.php");
}

else
{
    
	header("refresh:0;url=signin");
}
?>