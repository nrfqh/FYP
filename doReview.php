<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header("location: login.php"); // auto redirect to login.php 
}
$userID = $_SESSION['userId'];
// php file that contains the common database connection code 
include "dbFunctions.php";

if (!empty($_POST['review']) && !empty($_POST['rating']) && !empty($_POST['reviewId'])) {
    //TODO: Assign data retreived from form to the following variables $itemName, $itemDesc, $itemPrice  respectively 

    $reviewId = $_POST['reviewId'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    $datePosted = $datePosted('datePosted');
    $userID = $_SESSION['userId'];

    $sql = "INSERT INTO reviews (reviewId, review, rating, datePosted, userId)  
            VALUES ($reviewId, $review, $rating, $datePosted, $userId)";

    //TODO: Execute the SQL statement  
    $status = mysqli_query($link, $sql) or die(mysqli_error($link));

    if ($status) {
        $message = "Review posted successfully.";
    } else {
        $message = "Review post failed.";
    }
}
//TODO: Close the Database conection  
mysqli_close($link);
?> 
<!DOCTYPE HTML> 

<html> 
    <head> 
        <title>Post review</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>  
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"> 
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/> 
    </head> 

    <body> 
        <form method='POST' action='review.php'>

            <h2>Review Form</h2>

            <label>Description</label><br>	
            <textarea name='description'></textarea>

            <br><br>

            <label>Rating</label><br>
                    <input type='radio' name='rating' value='0'> <label>0</label><br>
                    <input type='radio' name='rating' value='1'> <label>1</label><br>
                    <input type='radio' name='rating' value='2'> <label>2</label><br>
                    <input type='radio' name='rating' value='3'> <label>3</label><br>
                    <input type='radio' name='rating' value='4'> <label>4</label><br>
                    <input type='radio' name='rating' value='5'> <label>5</label><br>

                    <br><br>

                    <input type='submit' value='Submit'>

                    </form>
                    <div class="text-center mt-4"> 
                        <a href="review.php" class="btn btn-secondary">Back to Reviews</a> 
                    </div> 

                    </body> 
                    </html>

