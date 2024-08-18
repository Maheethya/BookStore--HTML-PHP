<?php 
include "conf.php";
$sql = "SELECT * FROM contact_details";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<body>
<table border = "1">
<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Email</th>
	<th>Number</th>
	<th>Message</th>
	<th>Action</th>
</tr>
	<?php
		if(mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
	?>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['firstname']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['number']; ?></td>
	<td><?php echo $row['msg']; ?></td>
	<td><a href="update.php?id=<?php echo $row['id']; ?>"> Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>                       
	<?php       }
		}
	?>                
</table>
</body>
</html>