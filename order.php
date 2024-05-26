<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order - Crispicay</title>
    <style>
        /* Add your custom styles here */
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
            width: 300px; /* Adjust card width as needed */
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

        input[type="text"],
        input[type="tel"],
        textarea {
            width: calc(100% - 40px); /* Adjusted width */
            padding: 5px; /* Reduced padding */
            margin: 5px 0; /* Reduced margin */
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: #fff;
        }

        input[type="number"] {
            width: 60px; /* Adjust width of number input */
        }

        input[type="submit"] {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
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
        <nav class="navbar navbar-expand-lg navbar-light"> <!-- Add navbar classes -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h1>Place Your Order</h1>
        <form action="checkout.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{8}" required>

            <label for="address">Delivery Address:</label>
            <textarea id="address" name="address" required></textarea>

            <!-- Display menu items with options to select quantity -->
            <div class="menu-items">
                <div class="menu-item">
                    <img src="Menu Images/Family combo.jpg" alt="Family Combo">
                    <h2>Family Combo</h2>
                    <p>A delightful combination of crispy fried chicken pieces, served with French fries, coleslaw, and a choice of dipping sauce.</p>
                    <label for="family_combo_qty">Quantity:</label>
                    <input type="number" id="family_combo_qty" name="family_combo_qty" min="0" max="35" value="0">
                    <p>Price: $12.99</p>
                </div>
                <!-- Add other menu items similarly -->
                <div class="menu-item">
                    <img src="Menu Images/Hot & Spicy Chicken.jpg" alt="Hot & Spicy Chicken">
                    <h2>Hot & Spicy Chicken</h2>
                    <p>A fiery blend of spices coats our succulent fried chicken, guaranteed to leave your taste buds tingling.</p>
                    <label for="hot_spicy_qty">Quantity:</label>
                    <input type="number" id="hot_spicy_qty" name="hot_spicy_qty" min="0" max="35" value="0">
                    <p>Price: $10.99</p>
                </div>
                <div class="menu-item">
                    <img src="Menu Images/Soft Garlic Chicken.jpg" alt="Soft Garlic Chicken">
                    <h2>Soft Garlic Chicken</h2>
                    <p>Tender chicken pieces marinated in a creamy garlic sauce, served with a side of buttery mashed potatoes.</p>
                    <label for="soft_garlic_qty">Quantity:</label>
                    <input type="number" id="soft_garlic_qty" name="soft_garlic_qty" min="0" max="35" value="0">
                    <p>Price: $11.99</p>
                </div>
                <div class="menu-item">
                    <img src="Menu Images/Orange Fanta.jpg" alt="Orange Fanta">
                    <h2>Orange Fanta</h2>
                    <p>A refreshing citrus soda to complement your meal.</p>
                    <label for="orange_fanta_qty">Quantity:</label>
                    <input type="number" id="orange_fanta_qty" name="orange_fanta_qty" min="0" max="35" value="0">
                    <p>Price: $2.50</p>
                </div>
                <div class="menu-item">
                    <img src="Menu Images/Grape Fanta.jpg" alt="Grape Fanta">
                    <h2>Grape Fanta</h2>
                    <p>An exotic grape-flavored soda to quench your thirst.</p>
                    <label for="grape_fanta_qty">Quantity:</label>
                    <input type="number" id="grape_fanta_qty" name="grape_fanta_qty" min="0" max="35" value="0">
                    <p>Price: $2.50</p>
                </div>
            </div>

            <input type="submit" value="Place Order">
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Crispicay</p>
    </footer>
</body>
</html>
