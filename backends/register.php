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

    // reward(auto gen, default)

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['password'];

    // check for any duplication email
    $userid = $conn->prepare("SELECT user_ID FROM users WHERE user_email = ?");
    $userid->bind_param("s", $email);
    $userid->execute();
    $userid->store_result();
    if ($userid->num_rows == 0) {
        $user = $conn->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?,?,?)");
        $user->bind_param('sss', $name, $email, $pass);
        $user->execute();
        // fetch new user's user_id into result
        $query = "SELECT user_ID FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $uID = $row['user_ID'];

        $reward = "INSERT INTO reward (no_stars, levels, user_ID) VALUES (0, 0, '$uID')";
        $conn->query($reward);
        $_SESSION["success_once"] = "success_once";
        header("Location:../public/login.php");
        
    } else {
        // Return error message to  
        session_start();
        $_SESSION["error"] = "The email already exists";
        header('Location: ../public/signup.php');
    }
    
?>