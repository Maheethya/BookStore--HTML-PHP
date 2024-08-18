<?php 

include "conf.php";

$sql = "SELECT * FROM contact_details";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>users</h2>
<table class="table"border = "1">
    <thead>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['msg']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
					Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>