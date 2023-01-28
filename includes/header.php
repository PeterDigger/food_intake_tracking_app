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
        header("Location: login.php");
        exit;
    }

    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../includes/icon.ico">
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
<header class="grid grid-cols-6 gap-10 z-99 p-5 bg-cyan-400">
    <div class="col-start-2 col-span-1 place-self-center">
        <!-- Blank -->
    </div>
    <div class="col-start-2 col-span-1 text-center place-self-center text-white p-2 <?php echo ($currentPage == "dashboard.php") ? 'w-full rounded-xl text-black bg-green-300':''?>">
        <a href="dashboard.php">Home</a>
    </div>
    <div class="col-start-3 col-span-1 text-center place-self-center text-white p-2 <?php echo ($currentPage == "progress.php") ? 'w-full rounded-xl text-black bg-green-300':''?>">
        <a href="progress.php">Overview</a>
    </div>
    <div class="col-start-4 col-span-1 text-center place-self-center text-white p-2 <?php echo ($currentPage == "tips.php") ? 'w-full rounded-xl text-black bg-green-300':''?>">
        <a href="tips.php">Tips</a>
    </div>
    <div class="relative col-start-5 col-span-1 text-center place-self-center text-white p-2">
        <a href="#" class="bg-transparent text-center text-white rounded-full focus:outline-none" id="dropdown-button">
            <?php
                if(isset($uname))
                {
                    echo "Hi, ", ucfirst($uname);
                }
                else
                {
                    echo "<a href='login.php'>Log in</a>";
                }
            ?>
        </a>
        <div class="absolute right-0 w-48 py-2 bg-white rounded-lg shadow-xl hidden" id="dropdown-menu">
            <a href="editprofile.php" class="block px-4 py-2 text-gray-800 hover:bg-green-300 hover:text-black">Edit Profile</a>
            <form method="post" action="">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-green-300 hover:text-black"><input type="submit" name="logout" value="Log Out"></a>
            </form>
        </div>
</div>
</header>

<script>
    document.getElementById("dropdown-button").addEventListener("click", function() {
    document.getElementById("dropdown-menu").classList.toggle("hidden");
});
</script>

    <!-- END OF HEADER -->