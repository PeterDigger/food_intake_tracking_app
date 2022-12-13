<?php
    $title = "Welcome"; // Title page name goes here
    include "../includes/header.php";

?>

<div class="background">

    <div class="md:col-span-1 shadow-2xl  rounded-3xl grid grid-cols-1 py-10 px-10 bg-white m-20 h-2/4 min-w-[65%]">
        <h1 class="text-4xl leading-3 my-2 font-bold">Choose new goal</h1>

        <!-- Vegetables -->

        <div class="form-check grid grid-cols-6 gap-4 m-1">
            <input class="col-span-1 place-self-center form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="col-span-5 form-check-label inline-block text-gray-800 rounded bg-gray-400" for="flexCheckChecked">
                Vegetables
            </label>
        </div>

        <!-- Fruits -->

        <div class="form-check grid grid-cols-6 gap-4 m-1 ">
            <input class="col-span-1 place-self-center form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="col-span-5 form-check-label inline-block text-gray-800 rounded bg-gray-400" for="flexCheckChecked">
                Fruits
            </label>
        </div>

        <!-- Dairy -->

        <div class="form-check grid grid-cols-6 gap-4 m-1 ">
            <input class="col-span-1 place-self-center form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="col-span-5 form-check-label inline-block text-gray-800 rounded bg-gray-400" for="flexCheckChecked">
                Dairy
            </label>
        </div>

        <!-- Snacks -->

        <div class="form-check grid grid-cols-6 gap-4 m-1 ">
            <input class="col-span-1 place-self-center form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="col-span-5 form-check-label inline-block text-gray-800 rounded bg-gray-400" for="flexCheckChecked">
                Snacks
            </label>
        </div>
        
        <!-- What -->

        <div class="form-check grid grid-cols-6 gap-4 m-1 ">
            <input class="col-span-1 place-self-center form-check-input appearance-none h-6 w-6 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="col-span-5 form-check-label inline-block text-gray-800 rounded bg-gray-400" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div>



        
        <!-- Button for confirmation -->

        <div>
            <button class="greenLongBtn">Confirm</button>
        </div>
    </div>
    
</div>

<?php
    include_once "../includes/footer.php";
?>