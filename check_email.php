<?php
require_once "./functions/database_functions.php";
$result = mysqli_query($conn,"SELECT *FROM `subscribers` WHERE `email` = ''".$_POST['email']."''");
$row = mysqli_num_rows($result);
echo $row;
?>