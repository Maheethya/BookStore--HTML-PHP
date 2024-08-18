<html>
<body>
<?php 
include "conf.php";
$sql = "SELECT * FROM contact_details";
$result = mysqli_query($conn, $sql);

echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td>First Name</td> 
          <td>Email Address</td> 
          <td>Number</td> 
		  <td>Message</td> 
      </tr>';

      if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstname = $row["firstname"];
            $email = $row["email"];
            $number = $row["number"];
			$msg = $row["msg"];
    
 echo '<tr> 
            <td>'.$firstname.'</td> 
            <td>'.$email.'</td> 
            <td>'.$number.'</td> 
			<td>'.$msg.'</td> 
        </tr>';
    }
} 
?>
</body>
</html>