<!-- START OF HEADER -->

<?php
    include "config.php";

    // check if the uname is available and set it
    if (isset($_SESSION['uname'])) {
        $uname = $_SESSION['uname'];
    }

    // log out and redirect user to login page
    if (isset($_POST['logout'])) {
        session_start();
        unset($_SESSION["uname"]);
        session_destroy();
        header("Location: admin.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo $title;
        ?>
    </title>
    <!-- This only loads the files from the public folder -->
    <?php
        if($title === "Admin"){
            echo "<link rel='stylesheet' href='css/style.css'>";
        }else{
            echo "<link rel='stylesheet' href='css/style.css'>";
        }
        if($title === "Welcome" ){
            return;
        }
        if($title === "Admin" ){
            return;
        }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header class="grid grid-cols-3 gap-10 z-99 p-5 bg-cyan-400">
        <div class="col-start-1 col-span-1 place-self-center text-center">
            <a href="admintips.php">Tips</a>
        </div>
        <div class="col-start-2 col-span-1 place-self-center text-center">
            <!-- Add a logo or a title here, if desired -->
        </div>
        <div class="col-start-3 col-span-1 place-self-center text-center">
            <div class="relative">
                <button class="dropdown-btn">Hi, <?php echo $uname; ?> <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <form method="post" action="">
                        <input type="submit" name="logout" value="Log Out">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- END OF HEADER -->