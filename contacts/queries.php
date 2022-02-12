<?php

	
	require_once "../functions/database_functions.php";
	$conn = db_connect();

  $sql = "INSERT INTO queries (name,email,subject,phone,text)
VALUES ('$_POST[name]','$_POST[email]', '$_POST[subject]' ,'$_POST[phone]','$_POST[text]')";

if ($conn->query($sql) === TRUE) {
    
 $message = "Thank You for yoyr feedback. We will get back to you shortly";
 echo "<script type='text/javascript'>alert('$message');</script>";
  
   header("Location: ../index.php");
    
                  
                
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
?>