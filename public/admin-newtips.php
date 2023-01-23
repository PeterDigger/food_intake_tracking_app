<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/admin-header.php";


    // This has been disabled to prevent new session start
    // session_start();
    
    if(!isset($_SESSION['uname'])){
        header("Location: admin-login.php"); // redirect to login page
        exit;
    }
    $uname = $_SESSION['uname'];

    // get admin id
    $adminID = $conn->query("SELECT admin_ID FROM admin WHERE admin_name='".$uname."'");
    if ($adminID->num_rows > 0 ){
        while($rows = $adminID->fetch_assoc()){
            $AD_id    = $rows['admin_ID'];
        };
    }else{
        echo "no result";
    }

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $sql = "INSERT INTO news (news_name, news_description, date, admin_ID) VALUES ('$name', '$description', NOW(), '$AD_id')";

        if ($conn->query($sql) === TRUE) {
            header("Location: admin-viewtips.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

?>

<div class="background">
    <div class="md:col-span-1 md:flex md:justify-end"></div>

    <div class="md:col-span-1 bg-white lg:w-1/2 md:w-1/2">

        <div class="m-5 ">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">Tips</h1>

                <!-- once got news, php will loop this div -->
                <div class="py-10 px-5 m-5 rounded-3xl bg-slate-300">
                    <form method="post" action="">
                        <div class="bg-white p-5">
                            <label class="block text-gray-700 font-medium mb-2" for="title">
                                Tips Title
                            </label>
                            <input
                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full leading-5"
                                id="title" type="text" name="name" placeholder="Enter news title">
                            <label class="block text-gray-700 font-medium mb-2" for="description">
                                Tips Description
                            </label>
                            <textarea
                                class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full leading-5"
                                id="description" name="description" placeholder="Enter news description"
                                rows="5"></textarea>
                        </div>
                </div>
                <div class="text-center">
                    <button name="submit" class="greenShortBtn">
                        Save
                    </button>
                </div>
                </form>
        </div>
    </div>

    <!-- spare div for the view -->
    <div class="md:col-span-1 md:flex md:justify-end"></div>
</div>
</div>

<?php
    include_once "../includes/footer.php";
?>