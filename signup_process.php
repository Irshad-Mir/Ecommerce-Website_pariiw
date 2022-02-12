<?php

	
	require_once "./functions/database_functions.php";
	$conn = db_connect();

  $sql = "INSERT INTO users (name,email, password)
VALUES ('$_POST[name]', '$_POST[email]' ,'$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    
 
  
   header("Location: signin.php");
    
                  $message = "Thank You..Your signup process is complete.Please login now..";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
?>