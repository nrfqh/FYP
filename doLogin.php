<?php
session_start();
// php file that contains the common database connection code
include "dbFunctions.php";

// Check whether session variable 'user_id' is set
if (isset($_SESSION['userId'])) {
    // If the user is already logged in, show a message
    $msg = "You are already logged in. <a href='logout.php'>Logout?</a></p>";
} else { // User is not logged in
    // Check whether form input 'username' and 'password' contain values
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Retrieve form data
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];

        $msg = "";

        $queryCheck = "SELECT * FROM users
          WHERE username='$entered_username'
          AND password ='$entered_password'";

        $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));


        if (mysqli_num_rows($resultCheck) == 1) {
            $row = mysqli_fetch_array($resultCheck);
            $_SESSION['userId'] = $row['userId'];
            $_SESSION['username'] = $row['username'];

            $msg = "<p><i>You are logged in as " . $_SESSION['username'] . "</p>";
            $msg .= "<p><a href='home.php'>Home</a></p> <a href='logout.php'>Logout</a></p>";
            //$msg = "<p> User is in the database </p>";
        } else {
            $msg = "<p>Sorry, you must enter a valid username and password to log in</p>";
            $msg .= "<p><a href='login.php'>Go back to login page</a></p>";
            //$msg = "<p> User is not in the database </p>";
        }
    }
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login-Crispicay</title>
        <script src="https://kit.fontawesome.com/a53342ebb1.js" crossorigin="anonymous"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #000;
                color: #fff;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #000;
                padding: 0;
                text-align: center;
                position: relative; 
            }

            .logo img {
                display: none; /* Hide the logo image */
            }

            .header-image {
                width: 100%; 
                overflow: hidden; 
                position: relative;
            }

            .header-image h1 {
                font-family: 'Segoe Script', cursive; 
                font-size: 55px; 
                color: #fff; 
                margin-bottom: 2px; 
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1;
            }

            .header-image img {
                width: 100%; /* Make the image cover the entire width of its container */
                height: auto; /* Maintain aspect ratio */
                max-height: 300px; /* Limit the maximum height of the image */
                position: relative;
                z-index: 0;
            }

            .navbar {
                background-color: #000;
                padding: 10px;
                text-align:center;
            }

            .navbar ul {
                list-style-type: none;
                padding: 0;
            }

            .navbar ul li {
                display: inline;
                margin: 0 10px;
            }

            .navbar ul li a {
                text-decoration: none;
                color: #fff;
            }

            .navbar ul li a:hover {
                color: #ff0000;
            }

            main {
                padding: 20px;
            }

            h1 {
                text-align: center;
                color: #ff0000;
            }

            .spacer {
                height: 50px; /* Add more space under the last card */
            }
.flex-container {
                display: flex;
                justify-content: space-between;
            }

            .info-box {
                text-align: center;
                flex: 1;
                margin: 0 10px;
            }

            .circle-container {
                width: 300px; /* Adjust the width and height to set the size of the circle */
                height: 300px;
                border-radius: 50%; /* Make it a circle */
                overflow: hidden; /* Hide any overflow content (e.g., if the image is larger than the container) */
                margin: 0 auto;
            }

            .circle-container img {
                width: 100%; /* Make the image fill the circle */
                height: auto; /* Maintain aspect ratio */
            }
            .bottom-section {
                background-color: #222; /* Background color for the bottom section */
                color: #fff;
                padding: 20px; /* Add padding to improve spacing */
                text-align: center; /* Center the content horizontally */
            }

        </style>

    </head>
    <body>
        <header>
            <div class="header-image">
                <a href="home.php"> <h1><b>Crispicay</b></h1> </a>
                <img src="Menu Images/flames header.jpg" alt="Header Image">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Order Now</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </header>
        <br/>

        <p><?php echo $msg; ?></p>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> Chicken Food Website</p>
        </footer> 
    </body>
</html>