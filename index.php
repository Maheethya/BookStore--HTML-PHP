<html>
<head>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .full-page {
        width: 100%;
        height: 100vh;
        background-color: #f0f0f0; /* Set your desired background color */
    }

    .navbar {
        background-color:#85929E; /* Set your desired background color for the navbar */
        padding: 25px;
        text-align: center;
        display: flex;
        justify-content: space-around;
		
    
    }

    #MenuItems {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #MenuItems li {
        display: inline;
        margin-right: 10px;
    }

    #MenuItems a {
        text-decoration: none;
        color: white; /* Set your desired text color for the navbar links */
        padding: 20px;
        display: inline-block;
		font-size:35px;
    }

    #MenuItems a:hover {
        background-color: #555; /* Set your desired background color for the navbar links on hover */
    }
</style>

<meta http-equiv="Content-Type"'.' content="text/html; charset=utf8"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css"> 
<body>



<?php
session_start();
	if(isset($_POST['ac'])){
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "USE bookstore";
		$conn->query($sql);

		$sql = "SELECT * FROM book WHERE BookID = '".$_POST['ac']."'";
		$result = $conn->query($sql);

		while($row = $result->fetch_assoc()){
			$bookID = $row['BookID'];
			$quantity = $_POST['quantity'];
			$price = $row['Price'];
		}

		$sql = "INSERT INTO cart(BookID, Quantity, Price, TotalPrice) VALUES('".$bookID."', ".$quantity.", ".$price.", Price * Quantity)";
		$conn->query($sql);
	}

	if(isset($_POST['delc'])){
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "USE bookstore";
		$conn->query($sql);

		$sql = "DELETE FROM cart";
		$conn->query($sql);
	}

	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "USE bookstore";
	$conn->query($sql);	

	$sql = "SELECT * FROM book";
	$result = $conn->query($sql);
?>	

<?php
if(isset($_SESSION['id'])){
	echo '<div class="navbar">';
    
	echo '<a href="index.php"><img src="image/Magic Book.png" width="80" height="90"></a>';
	echo '<form class="hf" action="logout.php"><input class="hi" type="submit" name="submitButton" value="Logout" style="color: black; text-decoration: none; font-size: 20px;"></form>';
	echo '<form class="hf" action="edituser.php"><input class="hi" type="submit" name="submitButton" value="Edit Profile" style="color: black; text-decoration: none; font-size: 20px;"></form>';
	echo '<form class="hf" action="home.html"><a href="/bookstore/home.html"style="color: black; text-decoration: none; font-size: 44px;">Home</a></form>';
	
    echo '</div>';
}

if(!isset($_SESSION['id'])){
	echo '<div class="navbar">';
    
	echo '<form class="hf" action="Register.php"><input class="hi" type="submit" name="submitButton" value="Register" style="color: black; text-decoration: none; font-size: 20px;"></form>';
    echo '<form class="hf" action="login.php"><input class="hi" type="submit" name="submitButton" value="Login" style="color: black; text-decoration: none; font-size: 20px;"></form>';
    echo '<form class="hf" action="aboutUs.html"><input class="hi" type="submit" name="submitButton" value="About Us" style="color: black; text-decoration: none; font-size: 20px;"></form>';
	echo '<form class="hf" action="home.html"><a href="/bookstore/home.html"style="color: black; text-decoration: none; font-size: 44px;">Home</a></form>';
	
    echo '</div>';
} 
echo '<blockquote>';
	echo "<table id='myTable' style='width:100%; float:left'>";
$counter = 0;


while ($row = $result->fetch_assoc()) {
    if ($counter % 4 == 0) {
        // Start a new row after every 4 items
        if ($counter > 0) {
            echo "</tr>";
        }
        echo "<tr>";
    }

    echo "<td>";
    echo "<table>";
    echo "<br>";
    echo '<tr><td>'.'<img src="'.$row["Image"].'" width="40%">'.'</td></tr><tr><td style="padding: 5px;">Title: '.$row["BookTitle"].'</td></tr><tr><td style="padding: 5px;">ISBN: '.$row["ISBN"].'</td></tr><tr><td style="padding: 5px;">Author: '.$row["Author"].'</td></tr><tr><td style="padding: 5px;">Type: '.$row["Type"].'</td></tr><tr><td style="padding: 5px;">RS'.$row["Price"].'</td></tr><tr><td style="padding: 5px;">
        <form action="" method="post">
        Quantity: <input type="number" value="1" name="quantity" style="width: 20%"/><br>
        <input type="hidden" value="'.$row['BookID'].'" name="ac"/>
        <input class="button" type="submit" value="Add to Cart"/>
        </form></td></tr>';
    echo "</table>";
    echo "</td>";

    $counter++;

    // Close the last row if it's the last item
    if ($counter % 4 == 0 ) {
        echo "</tr>";
    }
}

// Close any open row at the end
if ($counter % 4 != 0) {
    echo "</tr>";
}

echo "</table>";


	$sql = "SELECT book.BookTitle, book.Image, cart.Price, cart.Quantity, cart.TotalPrice FROM book,cart WHERE book.BookID = cart.BookID;";
	$result = $conn->query($sql);

    echo "<table style='width:40%; float:right;'>";
    echo "<th style='text-align:left;'><i class='fa fa-shopping-cart' style='font-size:45px'></i> Cart <form style='float:right;' action='' method='post'><input type='hidden' name='delc'/><input class='cbtn' type='submit' value='Empty Cart'></form></th>";
    $total = 0;
    while($row = $result->fetch_assoc()){
    	echo "<tr><td>";
    	echo '<img src="'.$row["Image"].'"width="20%"><br>';
    	echo $row['BookTitle']."<br>RS".$row['Price']."<br>";
    	echo "Quantity: ".$row['Quantity']."<br>";
    	echo "Total Price: RS".$row['TotalPrice']."</td></tr>";
    	$total += $row['TotalPrice'];
    }
    echo "<tr><td style='text-align: right;background-color: #f2f2f2;''>";
    echo "Total: <b>RS".$total."</b><center><form action='checkout.php' method='post'><input class='button' type='submit' name='checkout' value='CHECKOUT'></form></center>";
    echo "</td></tr>";
	echo "</table>";
	echo '</blockquote>';
?>
</body>
</html>