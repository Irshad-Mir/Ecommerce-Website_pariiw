<table border="1" width="98%">
    <tr>
        <th>&nbsp;</th>
    </tr>
    <tr bgcolor="#009933">
 <th>&nbsp;</th>        

<th>Email</th>



<th>Action</th>
    </tr>
 <?php
require_once "./functions/database_functions.php";
$conn = db_connect();

$sql="select * from subscribers";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
	
 

?>

	<tr>
    
    <td>&nbsp;</td>
	
	<td><?php echo $row['email']?></td>
    <td ><a href="mail.php"><input type="submit" value="Send Mail"></a></td>
    </tr>
   

	<?php }  ?>
       </table>