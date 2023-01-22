<?php
    $title = "Welcome"; // Title page name goes here
    include "../includes/header.php";
    echo $uname;
?>

<div class="background">

    <div class="md:col-span-1 shadow-2xl  rounded-3xl grid grid-cols-1 py-10 px-10 bg-white m-20 h-2/4 min-w-[65%]">
        <h1 class="text-4xl leading-3 my-2 font-bold">Choose new goal</h1>

        <div>
            <ul class="w-full text-sm font-medium text-gray-900 bg-white rounded-lg  dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <!-- Vegetables -->
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox" class="py-3 ml-5 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vegetables</label>
                    </div>
                </li>
                <!-- Fruits -->
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="react-checkbox" class="py-3 ml-5 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Fruits</label>
                    </div>
                </li>
                <!-- Dairy -->
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-5 dark:bg-gray-600 dark:border-gray-500">
                        <label for="angular-checkbox" class="py-3 ml-5 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Dairy</label>
                    </div>
                </li>
                <!-- Snacks -->
                <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="laravel-checkbox" class="py-3 ml-5 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Snacks</label>
                    </div>
                </li>

            </ul>
        </div>
        
        <!-- Button for confirmation -->

        <div class="flex items-end w-full">
            <a href="dashboard.php">
                <button class="greenShortBtn">Confirm</button>
            </a>
        </div>
    </div>
    
</div>

<?php
    include_once "../includes/footer.php";
?>