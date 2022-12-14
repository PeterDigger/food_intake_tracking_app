<?php
include "includes/config.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" || $password != ""){

        $sql_query = "SELECT user_name FROM users WHERE user_email='$uname' AND user_password='$password'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            session_start();
            $_SESSION['uname'] = $uname;
            if ($uname == 'admin'){
                header('Location: admin.php');
            }else{
                header('Location: dashboard.php');
            }
        }else{
            header('Location: index.php');
        }
    }
}