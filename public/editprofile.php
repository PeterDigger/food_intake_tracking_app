<?php
    $title = "Edit Profile"; // Title page name goes here
    include "../includes/header.php";

    // Load details into the textbox
    
    // Email, name, password
    $query = "SELECT user_ID FROM users WHERE user_name = '$uname'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $uID = $row['user_ID'];

    $query =  $conn->query("SELECT user_name, user_email FROM users WHERE user_ID = '$uID'");
    
    if ($query->num_rows > 0 ){
        while($result = $query->fetch_assoc()){
            $username = $result['user_name'];
            $email = $result['user_email'];
        }
    }
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<div class="background">

    <div class="md:col-span-1 md:flex md:justify-end"></div>

    <div class="md:col-span-1 bg-white md:w-1/2">
        <form method="POST" action="../backends/update_profile.php" enctype="multipart/form-data">
        <div class="grid grid-cols-3 place-content-center md:col-span-1 bg-white p-10">
        <?php
            //query to get image path from db
            $query = "SELECT profile_photo FROM users WHERE user_ID = '$uID'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $img_path = $row['profile_photo'];
            if(empty($img_path)){
                $img_path = '../src/img/avatar.png';
            }

            //read image contents
            $img_data = file_get_contents($img_path);
            //encode image contents as base64
            $img_data_base64 = base64_encode($img_data);
        ?>

        <div class="place-self-center md:col-span-1 bg-gray-300 w-80 h-80 rounded-full ">
            <div id="preview" class="place-self-center md:col-span-1 bg-gray-300 w-80 h-80 rounded-full">
                <img id="previewy" class="img-preview rounded-full">
            </div>
            <div class="relative">
                <input name="photo" type="file" id="upload-input" onchange="previewImage()" class="stay-visible bottom-0 right-0 z-99 
                    block
                    w-full
                    my-5
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
            </div>
            <?php
                if(isset($_SESSION["error"])){
                    echo "<p class='text-red-500 text-xs'>".$_SESSION["error"]."</p>";
                }
            ?>
            <script>
                var preview = document.getElementById("preview");
                var uploadInput = document.getElementById("upload-input");
                var image = new Image();
                image.classList.add("w-80");
                image.classList.add("h-80");
                image.classList.add("rounded-full");
                image.src = "data:image/jpeg;base64,<?php echo $img_data_base64; ?>";
                
                preview.innerHTML = "";
                preview.appendChild(image);
                
                
                function previewImage() {
                    var preview = document.getElementById("preview");
                    var uploadInput = document.getElementById("upload-input");
                    var image = new Image();
                    image.src = URL.createObjectURL(uploadInput.files[0]);
                    image.classList.add("w-80");
                    image.classList.add("h-80");
                    image.classList.add("rounded-full");
                    preview.innerHTML = "";
                    preview.appendChild(image);
                }
            </script>
        </div>

        <div class="place-self-center grid w-9/12 md:col-span-2">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">Profile</h4>
                <input type="hidden" name="id" value="<?php echo $uID; ?>">
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Username</span>
                <input type='text' name='username' 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder='Enter your name' value='<?php echo $username?>'>
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Email</span>
                <input type='text' name='email' 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='Enter your email' value='<?php echo $email?>' readonly>
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your old Password</span>
                <input type='password' name='oldpassword' 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='Enter your Password'>
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your new Password</span>
                <input type='password' name='newpassword' 
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='Enter your Password' >
                <div class="grid place-content-end my-5">
                    <input class="greenShortBtn" type='submit' name='submit' value='Save'>
                </div>
        </div>
        </form>
    </div>
</div>

    <div class="md:col-span-1 md:flex md:justify-end"></div>

</div>



<?php
    include_once "../includes/footer.php";
?>