<?php
    // Website's title
    $title = "Admin";
    //========================================================
    include "includes/header.php";
    //========================================================

    if(!isset($_SESSION['uname'])){
        if ($_SESSION['uname'] != "admin")
        header('Location: index.php');
    };

    // Fetching section

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>