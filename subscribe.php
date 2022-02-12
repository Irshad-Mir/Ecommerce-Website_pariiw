<?php
	require_once "./functions/database_functions.php";
	$conn = db_connect();
$result = mysqli_query($conn,"INSERT into `subscribers` (email) values ('".$_POST['email']."')");
?>