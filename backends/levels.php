<?php
    //connect to the database
    //========================================================
    include_once "../includes/config.php";
    //========================================================

    //retrieve the user ID value from the POST request
    $uID = $_POST['uID'];
    
    $sql = "SELECT levels, no_stars FROM reward WHERE user_ID = '$uID'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    } else {
        echo "0";
    }

    //return the data as a json object
    echo json_encode($data);

?>