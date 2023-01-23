<?php
include_once "../includes/config.php";
$error = false;
if(isset($_POST['submit'])){
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT admin_name FROM admin WHERE admin_email='$uname' AND admin_password='$password'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['uname'] = $data['admin_name'];
            header('Location: admin-viewtips.php');
        }else{
            session_start();
            $_SESSION["error"] = "Invalid username or password.";
            header('Location: admin.php');
        }
    }else{
        header('Location: index.php');
    }
}