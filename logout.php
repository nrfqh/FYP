<?php
session_start();

if (isset($_SESSION['userId'])) {
    session_destroy();
    $_SESSION = array();
}
$msg = "You have logged out. <br/> <a href='login.php'>Login?</a>";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Logout-Crispicay</title>
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
            .login-container {
                max-width: 400px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .login-form {
                text-align: left;
            }

            .login-form h2 {
                margin-bottom: 20px;
                color: #333;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            button {
                width: 100%;
                padding: 10px;
                background-color: #ff0000;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #cc0000;
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
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Order Now</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li> 
                </ul>
            </nav>
        </header>
        <p>
        <?php
        echo $msg;
        ?>
        </p>

        <hr style="color: white">
        <div class="bottom-section">
            <br/>
            <div class="social-icons" style=" font-size: 25px">
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-square-x-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>

            <hr style="color: white">
            <p>&copy; <?php echo date("Y"); ?> Chicken Food Website</p>
        </div>

    </body>
</html>