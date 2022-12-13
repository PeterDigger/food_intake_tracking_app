<?php
    include "config.php";

    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>
        <?php echo $title ?>
    </title>
    <link rel="icon" href="https://iconarchive.com/download/i90283/icons8/windows-8/City-Restaurant.ico"
        type="image/x-icon">
    <!-- <script src="js/auto_resize.js"></script> -->
    <script src="js/dropdown.js"></script>
</head>

<body>
    <header>
        <div class="containery">
            <div class="parent">
                <div class="box" style="margin:0;">
                    <nav style="text-align:center">
                        <ul>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="table.php">Book a Table</a></li>
                        </ul>
                    </nav>
                </div>
                <a href="index.php">
                    <img src="img/logo.png" >
                </a>
                <div class="box" style="margin:0;">
                    <nav style="float:left;">
                        <ul>
                            <li><a href="order_food.php">Order Online</a></li>

                    <!-- php section -->
                    <?php
                    if(isset($_SESSION['uname']))
                    {    
                        $email = $_SESSION['uname'];
                        echo "<div class=\"dropdown\">
                        <li>
                            <a class=\"dropbtn\" onclick=\"drop()\"> Hi, $email! &nbsp;<i class=\"fa fa-caret-down\"></i></a>
                        </li>
                        <div class=\"dropdown-content\" id=\"myDropdown\">";
                        
                        if ($email == "admin"){
                            echo "<a href= 'admin.php'> Summary</a>";
                        }else{
                            echo "<a href=\"dashboard.php\">Dashboard</a>";
                        };
                        echo "
                            <form method='POST' action=''>
                                <div class='container-contact100-form-btn' style='margin-top: 0px;place-content: end;text-align:right;'>
                                    <button class='contact100-form-btn' name='but_logout'>Log out</button>
                                </div>
                            </form>
                        </div>
                        </div>";
                    }else
                    {
                        echo "<li><a href='login.php'>Log in/Sign up</a>";
                    }
                    ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>