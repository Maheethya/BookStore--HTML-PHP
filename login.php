<!DOCTYPE html>
<html>

<head>

</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('magicpattern-65O4Dw6-xLg-unsplash.jpg'); /* Add this line with the correct image file path */
    background-size: cover; /* This property ensures the background image covers the entire viewport */
    background-repeat: no-repeat; /* This property prevents the background image from repeating */
    background-position: center center; /* This property centers the background image */


}
    .container-box {
    background-color: #f9f9f936;
    border: 1px solid #ccc;
    padding: 0px;
    margin: 20px auto;
    max-width: 800px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    
}


.content {
    padding: 20px;
}

h3 {
    font-size: 50px; /* Change the font size for h2 */
    margin-bottom: 5px; /* Add margin to separate h2 and p */
    text-align: center;
    color: transparent; /* Hide text color initially */
    background-image: linear-gradient(to right, #ffffff, #a7afb7); /* Example gradient from orange to pink */
    -webkit-background-clip: text; /* Clip text to the background */
    background-clip: text; /* Clip text to the background */
    animation: animateText 1s infinite alternate; /* Animation name, duration, iteration count, and direction */
    text-transform: uppercase;
}

fieldset {
    border: 1px solid #ccc; /* Border around the fieldset */
    padding: 20px;
    margin-bottom: 20px;
}

legend {
    font-weight: bold;
    color: #fff;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 60%; /* Make text inputs take up full width */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc; /* Border for text inputs */
    border-radius: 5px; /* Rounded corners */
}

input[type="submit"] {
    background-color: #000000; /* Green background color */
    color: white; /* Text color */
    padding: 15px 20px; /* Padding around the submit button */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Cursor style */
}

input[type="submit"]:hover {
    background-color: #f10d0d; /* Darker green color on hover */
}


input[type="button"] {
    background-color: #000000; /* Green background color */
    color: white; /* Text color */
    padding: 15px 20px; /* Padding around the submit button */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Cursor style */
}

input[type="button"]:hover {
    background-color: #f10d0d; /* Darker green color on hover */
}




nav {
    background-color: rgba(0, 0, 0, 0.3); /* Adjust opacity to your preference */
    color: #fff;
    text-align: center;
    padding: 1em 0;
    width: 40%;
    margin: 40px auto 0;
    border-radius: 60px;
    backdrop-filter: blur(10px); /* Adjust blur radius to your preference */
}

/* Base styles for navigation links */
nav a {
    color: #ffffff; /* Default color */
    text-decoration: none;
    margin: 0 15px;
    font-size: 20px;
}

/* Rounded button hover effect */
nav a:hover {
    color: #fff; /* Change text color on hover */
    background-color: #007bff; /* Change background color on hover */
    border-radius: 20px; /* Apply rounded corners */
    padding: 5px 15px; /* Add padding for button appearance */
}


</style>

<body>
    
<nav>
        <a href="/bookstore/home.html">Home</a>
        <a href="/bookstore/aboutUs.html">About</a>
        <a href="/bookstore/index.php">Service</a>
        <a href="/bookstore/myapplication/consheet.html">Contact</a>
    </nav>
    <header>
    </header>
    <blockquote>
        <div class="container-box">
        <div class="container">
            <center>
                <h3>Login</h3>
            </center>
            <form action="checklogin.php" method="post">
                Username:<br><input type="text" name="username" />
                <br><br> Password:<br><input type="password" name="pwd" />
                <br><br>
                <input class="button" type="submit" value="Login" />
                <input class="button" type="button" name="cancel" value="Cancel" onClick="window.location='index.php';" />
            </form>
        </div>
</div>
        <blockquote>

        
    </body>

    </html>
