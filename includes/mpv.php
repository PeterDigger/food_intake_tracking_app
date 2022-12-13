<?php
    include "config.php";

    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }

?>