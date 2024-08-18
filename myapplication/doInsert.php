<?php 
include "conf.php";

  if (isset($_POST['Submit'])) {
    $first_name = $_POST['firstname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO contact_details(firstname, number, email, msg) 
    VALUES ('$first_name','$number','$email','$msg')";
	  
    $result= mysqli_query($conn,$sql);

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
    mysqli_close($conn); 
  }
  echo "No data received";

?>