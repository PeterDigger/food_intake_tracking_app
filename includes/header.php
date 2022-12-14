<!-- START OF HEADER -->

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
            echo "<link rel='stylesheet' href='../css/style.css'>";
        }else{
            echo "<link rel='stylesheet' href='css/style.css'>";
        }
        if($title === "Welcome" ){
            return;
        }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <header class="grid grid-cols-6 gap-10 z-99 p-5 bg-cyan-400">
        
        <div class="col-start-2 col-span-1 place-self-center">
            <!-- Blank -->
        </div>
        <div class="col-start-2 col-span-1 w-full text-center place-self-center rounded-xl bg-green-300 p-2">
            <a href="dashboard.php">Home</a>
        </div>
        <div class="col-start-3 col-span-1 text-center place-self-center text-white p-2">
            <a href="progress.php">Overview</a>
        </div>
        <div class="col-start-4 col-span-1 place-self-center text-white p-2">
            <a href="news.php">News</a>
        </div>
        <div class="col-start-5 col-span-1 place-self-center text-white p-2">
            <a href="#">
                <?php 
                    if(isset($user))
                        {
                            echo "Hi, ", $user;
                        }
                    else
                        {
                            echo "<a href='login.php'>Log in</a>";
                        };
                ?>
            </a>
        </div>
    </header>
    
<!-- END OF HEADER -->