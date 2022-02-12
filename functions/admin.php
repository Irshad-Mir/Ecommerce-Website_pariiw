<?php
	if(!isset($_SESSION['admin']) && $_SESSION['admin'] != true){
		header("Location: admin.php");
	}
?>