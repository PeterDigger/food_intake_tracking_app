<?php 

// db connection

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "food_tracking"; /* Database name */

// Mysqli Procedural

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['passed'])){

    $allowed = mysqli_query($conn, "UPDATE users WHERE id = '27' ");

}

if(isset($_POST['insufficient'])){

    $notallowed = mysqli_query($conn, "UPDATE users WHERE id = '453' ");

}