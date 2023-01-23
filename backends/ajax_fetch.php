<?php
    //connect to the database
    //========================================================
    include_once "../includes/config.php";
    //========================================================

    //retrieve the date value from the POST request
    $date = $_POST['date'];
    // $date = "2023-01-23";
    
    $unmae = $_SESSION['uname'];

    $query = "SELECT user_ID FROM users WHERE user_name = '$unmae'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $uID = $row['user_ID'];

    //query to fetch data from the database based on the date
    $query = "SELECT status, goals_ID FROM log WHERE date_completed = '$date' AND user_ID = '$uID'";
    $result = mysqli_query($conn, $query);

    //create an empty array to store the data
    $data = array();

    //iterate over the result set and add each row to the array
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    //return the data as a json object
    echo json_encode($data);
?>