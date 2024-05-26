<?php
session_start();

// Check if user is logged in
$isGuest = !isset($_SESSION['username']);
$username = $isGuest ? "Guest" : $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Crispicay</title>
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
            position: relative; /* Ensure proper positioning of the header image */
        }

        .logo img {
            display: none; /* Hide the logo image */
        }

        .header-image {
            width: 100%; /* Make the image cover the entire width of the page */
            overflow: hidden; /* Hide overflowing content */
            position: relative;
        }

        .header-image h1 {
            font-family: 'Segoe Script', cursive; /* Use a cursive font */
            font-size: 36px; /* Adjust the font size */
            color: #fff; /* Font color */
            margin-bottom: 20px; /* Add some space below the header */
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
            text-align: center;
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

        .welcome {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
        }

        main {
            padding: 20px;
            text-align: center; /* Center align the content */
        }

        h1 {
            text-align: center;
            color: #ff0000;
            margin-bottom: 30px; /* Add some space below the heading */
        }

        .contact-info {
            list-style-type: none;
            padding: 0;
            text-align: center; /* Center align the contact info */
        }

        .contact-info li {
            margin-bottom: 20px;
        }

        .contact-info li .fa-li {
            color: #ff0000;
            margin-right: 10px;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <!-- Remove the "Chicken Food Website Logo" text -->
        </div>
        <div class="header-image">
            <!-- Add the "Crispicay" header -->
            <h1>Crispicay</h1>
            <img src="Menu Images/flames header.jpg" alt="Header Image">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Order Now</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if ($isGuest): ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php else: ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="welcome">
            <p>Welcome, <?php echo htmlspecialchars($username); ?></p>
        </div>
    </header>
    <main>
        <h1>Contact Us</h1>
        <ul class="contact-info">
            <li><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>33 Lavender Avenue, Singapore<br>Postal Code 333033</li>
            <li><span class="fa-li"><i class="far fa-envelope"></i></span>Email: <a href="mailto:crispicy@email.com" class="text-white">crispicy@email.com</a></li>
            <li><span class="fa-li"><i class="fas fa-phone"></i></span>Contact Number: 67551098</li>
        </ul>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Crispicay</p>
    </footer>
</body>
</html>
