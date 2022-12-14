<?php
    $title = "Admin"; // Title page name goes here
    include "../../includes/header.php";
?>

<div class="test">
    <div class="md:col-span-1 md:flex md:justify-end">
        
    </div>

    <div class="md:col-span-1 bg-white">
        <div class="m-5">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">Add news</h4>
        </div>
        
        <!-- <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"     placeholder="Username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password"     type="password" placeholder="Password">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form> -->
        <form>
        <div class="py-10 px-5 m-5 rounded-3xl bg-slate-300">
            <div class="bg-white p-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    News
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"     placeholder="Title">
                <label for="large-input" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">
                    Details
                </label>
                <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
            </div>
            <div class="grid justify-items-end">
                <div>
                    <button class="greenShortBtn mt-5">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    <div class="md:col-span-1 md:flex md:justify-end">
        
    </div>

</div>

<?php
    include_once "../../includes/footer.php";
?>