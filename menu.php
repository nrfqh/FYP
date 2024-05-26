<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fyp_database";
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die(mysqli_connect_error());

$query = "SELECT * FROM product";
$result = mysqli_query($link, $query);
$menu_items = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $menu_items[] = $row;
    }
} else {
    echo "Error: " . mysqli_error($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Chicken Food Website</title>
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

        main {
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ff0000;
        }

        .menu-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .menu-item {
            width: 200px; /* Adjust card width as needed */
            margin: 20px;
            text-align: center;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .menu-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .menu-item h2 {
            color: #ff0000;
        }

        .menu-item p {
            color: #fff;
            margin-top: 10px; /* Add space between name and description */
        }

        .menu-item span {
            color: #ff0000;
            font-weight: bold;
        }

        .spacer {
            height: 50px; /* Add more space under the last card */
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

        /* Matching styles from the register page */
        form {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            margin: 0 auto;
        }

        form h2 {
            text-align: center;
            color: #ff0000;
            margin-bottom: 20px;
        }

        form label {
            color: #fff;
            display: block;
            margin: 10px 0 5px;
        }

        form input[type="text"],
        form input[type="password"],
        form input[type="email"],
        form input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #ff0000;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #cc0000;
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
                <li><a href="login.php">Login</a></li> 
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Our Menu</h1>
        
        <div class="menu-items">
            <?php foreach ($menu_items as $item): ?>
                <div class="menu-item">
                    <img src="Menu Images/<?php echo htmlspecialchars($item['picture']); ?>" alt="<?php echo htmlspecialchars($item['product_name']); ?>">
                    <h2><?php echo htmlspecialchars($item['product_name']); ?></h2>
                    <p><?php echo htmlspecialchars($item['product_name']); ?></p>
                    <p>Price: <span>$<?php echo htmlspecialchars($item['price']); ?></span></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="spacer"></div>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Chicken Food Website</p>
    </footer>
</body>
</html>
