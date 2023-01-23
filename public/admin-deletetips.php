<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/admin-header.php";

    // This has been disabled to prevent new session start
    // session_start();
    
    if(!isset($_SESSION['uname'])){
        header("Location: login.php"); // redirect to login page
        exit;
    }
    $uname = $_SESSION['uname'];

    $id=$_REQUEST['id'];
    $updatenow = "DELETE FROM news WHERE news_ID=$id" ;
    if ($conn->query($updatenow) === TRUE) {
        header("Location: admin-viewtips.php");
    } else {
        echo '<script>alert("Update Failed")</script>' . $conn->error;
    };

?>


<?php
    include_once "../includes/footer.php";
?>

