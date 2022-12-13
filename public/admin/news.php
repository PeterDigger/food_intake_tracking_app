<?php
    $title = "Admin"; // Title page name goes here
    include "../../includes/header.php";
?>

<div class="test">
    <div class="md:col-span-1 md:flex md:justify-end">
        
    </div>

    <div class="md:col-span-1 bg-white">
        <div class="m-5">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">News</h4>
            <h1 class="">Sort</h1>
            <div class="greenBtn">
                <button class="greenShortBtn">
                    <a href="signup.php">
                        Save
                    </a>
                </button>
            </div>
        </div>

        <!-- if no news then print nothing to be seen -->
        <div class="py-10 px-5 m-5 rounded-3xl bg-slate-300">
            <div class="bg-white p-5">
                <h2 class="text-xl my-2">No news yet</h2>
            </div>
        </div>

        <!-- once got news, php will loop this div -->
        <div class="py-10 px-5 m-5 rounded-3xl bg-slate-300">
            <div class="bg-white p-5">
                <h2 class="text-xl my-2">Update (December,6 2022)</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio explicabo saepe libero, quasi qui sed dolore culpa vero, consectetur sunt dicta a mollitia deleniti, voluptates iusto officiis tempore aliquam reiciendis!
                </p>
            </div>
        </div>
    </div>

    <div class="md:col-span-1 md:flex md:justify-end">
        
    </div>

    <!-- <php
    // pipe the database info into an array and display it.
        foreach ($array as $value){
            echo "
                <div class=\"\">
                    <p>Vegetables</p>
                    <p>", $value , "</p>
                    
                </div>
            ";
        };
    ?> -->

</div>

<?php
    include_once "../../includes/footer.php";
?>