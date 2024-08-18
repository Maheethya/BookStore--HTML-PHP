<?php 

include "conf.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $id = $_POST['id'];


        $email = $_POST['email'];

        $number = $_POST['number']; 
		
		$msg = $_POST['msg'];

        $sql = "UPDATE `contact_details` SET `firstname`='$firstname',`email`='$email',`number`='$number',`msg`='$msg'  WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `contact_details` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $email = $row['email'];

            $number = $row['number'];
			
			$msg = $row['msg'];

            $id = $row['id'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Number:<br>

            <input type="text" name="number" value="<?php echo $number; ?>">

            <br>
			 Message:<br>

            <input type="text" name="msg" value="<?php echo $msg; ?>">

            <br>

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 