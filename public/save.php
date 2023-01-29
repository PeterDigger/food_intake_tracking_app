<?php
include_once "../includes/config.php";

$vegeVal = $_POST['vegeVal'];
$fruitsVal = $_POST['fruitsVal'];
$dairyVal = $_POST['dairyVal'];
$snackVal = $_POST['snackVal'];
$uID = $_POST['uID'];
$datee = $_POST['datee'];

$data = [
    'vegeVal' => $vegeVal,
    'fruitsVal' => $fruitsVal,
    'dairyVal' => $dairyVal,
    'snackVal' => $snackVal
];

$vegeVal = $data['vegeVal'];
$fruitsVal = $data['fruitsVal'];
$dairyVal = $data['dairyVal'];
$snackVal = $data['snackVal'];

$sql = "SELECT status FROM log WHERE user_ID = '$uID' AND goals_ID = 1 AND date_completed = '$datee'";
// $vegeRes = mysqli_query($conn, $sql);
$vegeRes = $conn->query($sql);
if(!$vegeRes->num_rows > 0){
    $sql = "INSERT INTO log (status, date_completed, user_ID, goals_ID) VALUES ('$vegeVal', '$datee', '$uID', 1);";
    $conn->query($sql);
}else{
    $sql = "UPDATE log SET status = '$vegeVal' WHERE user_ID = '$uID' AND goals_ID = 1 AND date_completed = '$datee'";
    $conn->query($sql);
}

$sql = "SELECT status FROM log WHERE user_ID = '$uID' AND goals_ID = 2 AND date_completed = '$datee'";
// $fruitsRes = mysqli_query($conn, $sql);
$fruitsRes = $conn->query($sql);
if(!$fruitsRes->num_rows > 0){
    $sql = "INSERT INTO log (status, date_completed, user_ID, goals_ID) VALUES ('$fruitsVal', '$datee', '$uID', 2);";
    $conn->query($sql);
}else{
    $sql = "UPDATE log SET status = '$fruitsVal' WHERE user_ID = '$uID' AND goals_ID = 2 AND date_completed = '$datee'";
    $conn->query($sql);
}

$sql = "SELECT status FROM log WHERE user_ID = '$uID' AND goals_ID = 3 AND date_completed = '$datee'";
// $dairyRes = mysqli_query($conn, $sql);
$dairyRes = $conn->query($sql);
if(!$dairyRes->num_rows > 0){
    $sql = "INSERT INTO log (status, date_completed, user_ID, goals_ID) VALUES ('$dairyVal', '$datee', '$uID', 3);";
    $conn->query($sql);
}else{
    $sql = "UPDATE log SET status = '$dairyVal' WHERE user_ID = '$uID' AND goals_ID = 3 AND date_completed = '$datee'";
    $conn->query($sql);
}

$sql = "SELECT status FROM log WHERE user_ID = '$uID' AND goals_ID = 4 AND date_completed = '$datee'";
// $snackRes = mysqli_query($conn, $sql);
$snackRes = $conn->query($sql);
if(!$snackRes->num_rows > 0){
    $sql = "INSERT INTO log (status, date_completed, user_ID, goals_ID) VALUES ('$snackVal', '$datee', '$uID', 4);";
    $conn->query($sql);
}else{
    $sql = "UPDATE log SET status = '$snackVal' WHERE user_ID = '$uID' AND goals_ID = 4 AND date_completed = '$datee'";
    $conn->query($sql);
}



// Update them! also check before update la 
$sql = "SELECT reward_ID FROM reward WHERE user_ID = '$uID'";
// $snackRes = mysqli_query($conn, $sql);
$levRes = $conn->query($sql);

// get occurances from the database
$sql = "SELECT COUNT(status) as occurrences FROM log WHERE status >= '5' AND user_ID = '$uID' AND goals_ID != 4";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$occurrences = $row['occurrences'];

$sql = "SELECT COUNT(status) as occurrences FROM log WHERE status = 0 AND user_ID = '$uID' AND goals_ID = 3";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nosnack = $row['occurrences'];

echo $nosnack;

$newstars = ($occurrences + $nosnack) % 4;
$newlevels = floor(($occurrences + $nosnack) / 4);

if(!$levRes->num_rows > 0){
    $sql = "INSERT INTO reward (no_stars, levels, user_ID) VALUES ('$newstars', '$newlevels', '$uID');";
    $conn->query($sql);
}else{
    $sql = "UPDATE reward SET levels = '$newlevels', no_stars = '$newstars' WHERE user_ID = '$uID'";
    $levRes = $conn->query($sql);
}

$conn->close();
?>
