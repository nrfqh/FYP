<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "dbFunctions.php";

$query = "SELECT reviews.*, users.username, product.product_name "
        . "FROM reviews "
        . "INNER JOIN users ON reviews.userId = users.userId "
        . "INNER JOIN product ON reviews.productId = product.productId ";


$result = mysqli_query($link, $query) or die(mysqli_error($link));

$arrContent = [];

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}

mysqli_close($link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reviews-Crispicay</title>
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
            
            .center-table {
                margin: 0 auto;
                width: 80%;
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
                <a href="home.php"> <h1><b>Crispicy</b></h1> </a>
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

        <h1 style="text-align: center; font-weight: bold;"> 
            Reviews:

        </h1>
        <?php if (!empty($arrContent) && is_array($arrContent)) { ?>
            <div class="center-table">
                <table class="table table-bordered">
                    <thead>
                        <tr style="color: white">
                            <th style="border: 1px solid #fff; padding: 10px">Review</th>
                            <th style="border: 1px solid #fff; padding: 10px">Rating</th>
                            <th style="border: 1px solid #fff; padding: 10px">User</th>
                            <th style="border: 1px solid #fff; padding: 10px">Posted</th>
                            <?php if (isset($_SESSION['userId'])) { ?>
                            <?php } ?>
                        </tr>
                    </thead>
                    <?php
                    foreach ($arrContent as $review) {
                        $reviewText = $review['review'];
                        $rating = $review['rating'];
                        $user = $review['username'];
                        $date = $review['datePosted'];
                        ?>    
                        <tr style="color: whitesmoke">    
                            <th style="border: 1px solid #fff; padding: 10px"><?php echo $reviewText; ?></th>
                            <th style="border: 1px solid #fff; padding: 10px"><?php echo $rating; ?> ★ </th>
                            <th style="border: 1px solid #fff; padding: 10px"><?php echo $user; ?></th>
                            <th style="border: 1px solid #fff; padding: 10px"><?php echo $date; ?></th>
                            <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $review['username']) { ?>
                            <?php } ?>   
                        </tr>
                    <?php } ?>
                </table>
                <a href="doReview.php">Add Review?</a>
            </div>
        <?php } else { ?>
            <p style="color: white">No reviews available.</p>
            <a style="color: white" href="doReview.php">Add Review?</a>
        <?php } ?>


        <br/>

        <hr style="color: white">
        <p>&copy; <?php echo date("Y"); ?> Chicken Food Website</p>


    </body>
</html>