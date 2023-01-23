<?php
    $title = "Welcome";
    include "../includes/header.php";

?>

<div class="relative">
    <button class="absolute top-5 right-5 py-2 px-4 rounded-lg">
        <a href="admin-login.php">
            <?php
                @include "../src/elements/admin.php"
            ?>
        </a>
    </button>
</div>

<div class="forthem">
    <div class="md:col-span-1 w-96 h-96">
        <?php
                @include "../src/elements/mascot_happy.php"
            ?>
    </div>

    <div class="md:col-span-1 shadow-2xl  rounded-3xl grid grid-cols-1 py-10 px-10 bg-white m-20 h-2/4 w-3/12 ">
        <div class="grid h-full my-2 justify-items-center">
            <h1 class="text-4xl leading-3 my-2 font-bold">Sign Up With Email</h1>
        </div>
        <div class="grid h-full mb-2">
            <form method="POST" action="../backends/register.php">
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Name</span>
                <input type='text' name='name'
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder='Enter your name'>
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Email</span>
                <input type='text' name='email'
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder='Enter your email'>
                <span class="block my-2 text-sm font-medium py-1 text-gray-900 dark:text-white">Your Password</span>
                <input type='password' name='password'
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder='Enter your Password'>
        </div>
        <div class="grid content-end justify-items-center">
            <button class="greenLongBtn">
                <a name="submit" class="">
                    Sign Up
                </a>
            </button>
        </div>
        </form>
    </div>
</div>

<?php
    include_once "../includes/footer.php";
?>