<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/header.php";

?>


<div class="background">
    <div class="test">

        <div class="md:col-span-1 md:flex md:justify-end">
            
        </div>

        <div class="md:col-span-1 bg-white">
            <!-- Sad mascot (hidden default)-->
            
            <div id="failed_banner" class="grid place-items-center grid-cols-1 shadow-2xl rounded-3xl py-10 px-10 bg-white w-fit h-fit invisible absolute">
                <div class="w-96 h-96 col-span-1 justify-self-center">
                    <?php include_once "../src/elements/mascot_sad.php"; ?>
                </div>
                <div class="col-span-1 justify-self-center">
                    <p>I believe you can do it!</p>
                </div>
            </div>
            
            <!-- Happy mascot (hidden default)-->
        
            <div id="passed_banner" class="grid place-items-center grid-cols-1 shadow-2xl rounded-3xl py-10 px-10 bg-white w-fit h-fit invisible absolute">
                <div class="w-96 h-96 col-span-1 justify-self-center">
                    <?php include_once "../src/elements/mascot_happy.php"; ?>
                </div>
                <div class="col-span-1 justify-self-center">
                    <p>Congratulation! +1 star</p>
                </div>
            </div>
        
            <!-- Quote first part -->
        
            <div class="flex justify-between">
                <div class="grid grid-cols-5 p-5 content-center">
                    <div class="col-start-1 h-28 col-span-4 rounded-t rounded-l grid place-items-center bg-slate-400">
                        <span>
                            <?php
                                // Quote
                                echo "<p>Don't forget to drink more water!</p>";
                            ?>
                        </span>
                    </div>
                    <div class="rounded-r rounded-b bg-slate-400 w-24 h-28 col-start-5 col-span-1">
                        <span>
                            <?php include "../src/elements/mascot_happy.php"; ?>
                        </span>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 content-center flex-wrap">
                    <div class="small_badge grid place-items-center self-center m-1">
                        <?php 
                        include "../src/elements/badge.php"; 
                        ?>
                    </div>
                    <div class="stars grid grid-cols-3 gap-4 content-end">
                    <?php 
                        include "../src/elements/grey_stars.php"; 
                        include "../src/elements/grey_stars.php"; 
                        include "../src/elements/grey_stars.php";
                    ?>
        
                    </div>
                </div>
            </div>
        
            <!-- Date Picker row -->
        
            <div>
                <div class="grid grid-cols-2 m-5">
                    <div class="grid grid-cols-2 place-items-center">
                        <p>15 Dec 2022</p>
                        
                        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
                        <i class="fa fa-calendar" style="font-size:24px"></i>

                        </button>
                    </div>
                    
                </div>
            </div>
        
            <!-- List of the options that user selected -->
        
            <div>

                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class=" bg-green-500 p-5 font-medium text-black text-left leading-none rounded-xl" style="width: 45%"> 
                        <p>Vegetable</p>
                        <p>Today: 3/5</p>
                    </div>
                    <div class="inline-block absolute place-self-end">
                        <button><?php @include "../src/elements/add.php" ?></button>
                        <button><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>

                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="bg-amber-300 p-5 font-medium text-black text-left leading-none rounded-xl" style="width: 100%"> 
                        <p>Fruits</p>
                        <p>Today: 3/5</p>
                    </div>
                    <div class="inline-block absolute place-self-end">
                        <button><?php @include "../src/elements/add.php" ?></button>
                        <button><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>

                <div class="grid m-5 w-auto bg-gray-200 rounded-xl dark:bg-gray-700">
                    <div class="bg-yellow-500 p-5 font-medium text-black text-left leading-none rounded-xl" style="width: 45%"> 
                        <p>Dairy</p>
                        <p>Today: 3/5</p>
                    </div>
                    <div class="inline-block absolute place-self-end">
                        <button><?php @include "../src/elements/add.php" ?></button>
                        <button><?php @include "../src/elements/minus.php" ?></button>
                    </div>
                </div>
            </div>

            <button onclick="buttonHandler()" class="fixed z-90 bottom-10 right-8  w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:drop-shadow-2xl hover:animate-bounce duration-300"><?php @include "../src/elements/add_button.php" ?></button>
        </div>
        
<!-- spare div for the view -->

        <div class="md:col-span-1 md:flex md:justify-end">

        </div>

    </div>
</div>

<script>
    // to be added
</script>

<?php
    include_once "../includes/footer.php";
?>