<?php
    $title = "Edit Profile"; // Title page name goes here
    include "../includes/header.php";

?>


<div class="background">

    <div class="md:col-span-1 md:flex md:justify-end"></div>

    <div class="md:col-span-1 bg-white md:w-1/2">
        <div class="grid grid-cols-3 place-content-center md:col-span-1 bg-white">
            <div class="place-self-center md:col-span-1 bg-gray-300 w-40 h-40 rounded-full">
                <!-- circles -->
            </div>
            <div class="place-self-center grid w-9/12 md:col-span-2">
                <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">Profile</h4>
                <form method="POST">
                    <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Name</span>
                    <input type='text' name='email' class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder='Enter your name'>
                    <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Email</span>
                    <input type='text' name='email' class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='Enter your email'>
                    <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Password</span>
                    <input type='password' name='email' class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder='Enter your Password'>
                </form>

                <div class="greenBtn">
                    <button class="greenShortBtn">
                        <a href="signup.php">
                            Save
                        </a>
                    </button>
                </div>
                
            </div>
        </div>
    </div>

    <div class="md:col-span-1 md:flex md:justify-end"></div>

</div>



<?php
    include_once "../includes/footer.php";
?>