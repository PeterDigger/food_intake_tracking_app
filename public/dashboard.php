<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/header.php";

    // This has been disabled to prevent new session start
    // session_start();
    
    if(!isset($_SESSION['uname'])){
        header("Location: login.php"); // redirect to login page
        exit;
    }
    $uname = $_SESSION['uname'];

?>

<!--  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<div class="background">

        <div class="md:col-span-1 md:flex md:justify-end"></div>

        <div class="md:col-span-1 bg-white md:w-1/2">

            <!-- Sad mascot (hidden default)-->
            <div id="failed_banner"
                class="inset-center grid place-items-center grid-cols-1 shadow-2xl rounded-3xl py-10 px-10 bg-white w-fit h-fit invisible absolute">
                <div class="svg-container col-span-1 justify-self-center">
                    <?php include_once "../src/elements/mascot_sad.php"; ?>
                </div>
                <div class="col-span-1 py-5 justify-self-center">
                    <p>I believe you can do it!</p>
                </div>
            </div>

            <!-- Happy mascot (hidden default)-->

            <div id="passed_banner"
                class="inset-center grid place-items-center grid-cols-1 shadow-2xl rounded-3xl py-10 px-10 bg-white w-fit h-fit invisible absolute">
                <div class="svg-container col-span-1 justify-self-center">
                    <?php include_once "../src/elements/mascot_happy.php"; ?>
                </div>
                <div class="col-span-1 py-5 justify-self-center">
                    <p>Congratulation! +1 star</p>
                </div>
            </div>

            <!-- Quote first part -->

            <div class="flex ">
                <div class="w-2/3 grid grid-cols-5 p-5 content-center">
                    <div class="col-start-1 h-28 col-span-4 rounded-t rounded-l grid place-items-center bg-slate-400">
                        <span>Don't forget to drink more water!</span>
                    </div>
                    <div class="object-contain rounded-r rounded-b bg-slate-400 w-24 h-28 col-start-5 col-span-1">
                        <span>
                            <?php include "../src/elements/mascot_happy.php"; ?>
                        </span>
                    </div>
                </div>


                <div class="w-1/3 grid grid-cols-1 content-center flex-wrap">
                    <div class="small_badge grid place-items-center self-center m-1">
                        <?php include "../src/elements/badge.php"; ?>
                    </div>
                    <div class="stars flex justify-center">
                        <?php $stars =1;?>

                        <?php for($i=0; $i<3; $i++): ?>
                        <div class="px-2">
                            <?php if($i<$stars) : include "../src/elements/normal_star.php"; else: include "../src/elements/grey_stars.php"; endif; ?>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>

            </div>

            <!-- Date Picker row -->
            <div>
                <div class="grid grid-cols-2 m-5">
                    <div class="grid grid-cols-2 place-items-center">
                        <input type="hidden" id="datepicker-input">
                        <button id="datepicker-button"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            <i class="fa fa-calendar"></i>
                        </button>
                    </div>
                </div>
            </div>

            <input type="hidden" id="datepicker-input">

            <!-- Bar section div -->
            <div>
                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="p-5 absolute font-medium text-black text-left leading-none">
                        <p>Vegetable</p>
                        <p id="vegetext"></p>
                    </div>
                    <div id="vege" class=" bg-green-500 rounded-xl h-20"></div>
                    <div id="vegediv" class="inline-block absolute place-self-end">
                        <button class="easetrans" id="greenbtn"><?php @include "../src/elements/add.php" ?></button>
                        <button class="easetrans" id="redbtn"><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>

                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="p-5 absolute font-medium text-black text-left leading-none">
                        <p>Fruits</p>
                        <p id="fruitstext"></p>
                    </div>
                    <div id="fruits" class="bg-amber-300 rounded-xl h-20"></div>
                    <div id="fruitsdiv" class="inline-block absolute place-self-end">
                        <button class="easetrans" id="greenbtn1"><?php @include "../src/elements/add.php" ?></button>
                        <button class="easetrans" id="redbtn1"><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>

                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="p-5 absolute font-medium text-black text-left leading-none">
                        <p>Dairy</p>
                        <p id="dairytext"></p>
                    </div>
                    <div id="dairy" class="bg-yellow-500 rounded-xl h-20"></div>
                    <div id="dairydiv" class="inline-block absolute place-self-end">
                        <button class="easetrans" id="greenbtn2"><?php @include "../src/elements/add.php" ?></button>
                        <button class="easetrans" id="redbtn2"><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>
                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="p-5 absolute font-medium text-black text-left leading-none">
                        <p>Snack</p>
                        <p id="snacktext"></p>
                    </div>
                    <div id="snack" class="bg-yellow-500 rounded-xl h-20"></div>
                    <div id="snackdiv" class="inline-block absolute place-self-end">
                        <button class="easetrans" id="greenbtn3"><?php @include "../src/elements/add.php" ?></button>
                        <button class="easetrans" id="redbtn3"><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- spare div for the view -->
        <div class="md:col-span-1 md:flex md:justify-end"></div>
    </div>
</div>

<!-- For the datepicker -->
<script>
    flatpickr("#datepicker-button", {
        altInput: "#datepicker-input",
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        onClose: function (selectedDates, dateStr, instance) {
            // your code to refresh the progress bar
        }
    });
</script>

<?php
    include_once "../includes/footer.php";
?>