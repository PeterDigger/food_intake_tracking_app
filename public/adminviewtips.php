<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/adminheader.php";

    // This has been disabled to prevent new session start
    // session_start();
    
    if(!isset($_SESSION['uname'])){
        header("Location: login.php"); // redirect to login page
        exit;
    }
    $uname = $_SESSION['uname'];

?>

<div class="background">
    <div class="md:col-span-1 md:flex md:justify-end"></div>

    <div class="md:col-span-1 bg-white lg:w-3/4 md:w-3/4">

        <div class="m-5 ">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">Tips</h1>
        
        <!-- once got news, php will loop this div -->
        <div class="py-10 px-5 m-5 rounded-3xl bg-slate-300">
            <div class="bg-white p-5">
            <label class="block text-gray-700 font-medium mb-2" for="title">
                    Tips Title
                </label>
                <input 
                    class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full leading-5"
                    id="title" 
                    type="text" 
                    placeholder="Enter news title"
                >
                <label class="block text-gray-700 font-medium mb-2" for="description">
                    Tips Description
                </label>
                <textarea
                    class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full leading-5"
                    id="description"
                    placeholder="Enter news description"
                    rows="5"
                ></textarea>
            </div>
        </div>
        <div class="text-center">
                <button class="greenShortBtn">
                    Save
                </button>
        </div>
    </div>
    </div>

    <!-- spare div for the view -->
    <div class="md:col-span-1 md:flex md:justify-end"></div>
</div>
</div>

<?php
    include_once "../includes/footer.php";
?>