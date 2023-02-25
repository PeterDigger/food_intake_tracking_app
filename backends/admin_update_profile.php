<?php
    //connect to the database
    //========================================================
    include_once "../includes/config.php";
    //========================================================

    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        
        // Get the form data
        if(!empty($_POST['oldpassword']) && !empty($_POST['newpassword'])){
            $oldpassword = mysqli_real_escape_string($conn, $_POST['oldpassword']);
            $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
            // Check if match from old password and new password
            // Query the database for the saved string
            $query = "SELECT admin_password FROM admin WHERE admin_email = '$email'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $oldpasswordDA = $row['admin_password'];
        
            //compare the user-provided string with the saved string
            if ($oldpassword == $oldpasswordDA) {
                //save the user-provided string in the database
                $query = "UPDATE admin SET admin_password = '$newpassword' WHERE admin_email = '$email'";
                $result = mysqli_query($conn, $query);
        
                if ($result) {
                    echo "String matched and updated successfully.";
                } else {
                    echo "Error updating string: " . mysqli_error($conn);
                }
            } else {
                echo "String did not match.";
            }
        }else if(empty($_POST['oldpassword']) && empty($_POST['newpassword'])){
            if(!empty($_POST['username'])){
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $query = "UPDATE admin SET admin_name = '$username' WHERE admin_email = '$email'";
                $result = mysqli_query($conn, $query);
        
                if ($result) {
                    $_SESSION['uname'] = $username;
                } else {
                    echo "Error updating string: " . mysqli_error($conn);
                }
            }

            $uploadOk = 1;

            // Get the photo information
            $photo = $_FILES['photo'];

            // Set target file path and file type
            $target_file = "../uploads/".$photo['name'];
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
            // Check file size
            if ($photo["size"] > 10485760) {
                $_SESSION["error"] = "Sorry, your file is too large.";
                header("Location:../public/admin-editprofile.php");
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $_SESSION["error"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                header("Location:../public/admin-editprofile.php");
                $uploadOk = 0;
            }
        
            // Check if $uploadOk is set to 0 by an error
            if (!isset($uploadOk) || $uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                // Move the photo to a permanent location on the server
                if (!move_uploaded_file($photo['tmp_name'], $target_file)) {
                    echo "Error: Failed to move file to the target directory";
                    exit();
                }
                // Update the user's information in the database
                $uID = $_POST['id'];
                $username = $_POST['username'];
                $sql = "UPDATE admin SET profile_photo='$target_file' WHERE admin_ID='$uID'";
                if (!mysqli_query($conn, $sql)) {
                    echo "Error: Failed to update data in the database";
                    exit();
                }
                unset($_SESSION['error']);
                header("Location: ../public/admin-editprofile.php");
                exit();
    }

        }else{
            echo "Both old password and new password must be filled. workkkkkkkkk";

        }
    }

?>
