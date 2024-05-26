<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fyp_database";
$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or 
        die(mysqli_connect_error());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    // SQL query to insert data into users table
    $sql = "INSERT INTO users (username, password, name, dob, email) 
            VALUES ('$username', '$password', '$name', '$dob', '$email')";

    // Execute query
    if (mysqli_query($link, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Crispicay</title>
    <link href="https://kit.fontawesome.com/a53342ebb1.js" crossorigin="anonymous" rel="stylesheet">
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
            padding: 10px;
            text-align: center;
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

        .register-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .register-form {
            text-align: left;
        }

        .register-form h1 {
            margin-bottom: 20px;
            color: red;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
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
<div class="register-container">
    <form class="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1><b>Register</b></h1>
        <div class="form-group">
            <label for="username" style="color: black;">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="password" style="color: black;">Password:</label>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="name" style="color: black;">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="dob" style="color: black;">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="email" style="color: black;">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <button type="submit">Register</button>
    </form>
</div>

<p style="text-align: center"> Already have an account?
    <a href="login.php">Login now</a>!
</p>

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
