<?php
    // Website's title
    $title = "Registration";
    //========================================================
    include_once "../includes/header.php";
    //========================================================

    // User_id(auto gen)

    // user_name
    // user_email
    // user_password

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['password'];

    $user = $conn->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?,?,?)");
	$user->bind_param('sss', $name, $email, $pass);
	$user->execute();

    header("Location:../public/login.php");
?>