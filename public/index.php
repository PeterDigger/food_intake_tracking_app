<?php
    $title = "Welcome";
    include "../includes/header.php";

?>

    <div class="background">
        <div class="md:col-span-1 w-96 h-96">
            <span>
                <?php
                    @include "../src/elements/mascot_happy.php"
                ?>
            </span>
        </div>

        <div class="md:col-span-1 shadow-2xl rounded-3xl grid grid-cols-1 py-20 px-10 bg-white m-20 h-2/4 w-3/12">
            <div class="grid text-right h-full">
                <h1 class="text-5xl leading-3 uppercase font-bold">Welcome</h1>
                <h1 class="text-4xl leading-3 uppercase font-bold">to</h1>
                <h1 class="text-4xl leading-3 uppercase font-bold">Diet tracker</h1>
            </div>
            <div class="grid gap-10 content-end justify-items-center">
                <button class="greenLongBtn">
                    <a href="signup.php">
                        SIGN UP WITH EMAIL
                    </a>
                </button>
                <p>Already have account?
                    <a href="login.php" class="text-green-600">
                        Login
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        
    </script>

<?php
    include_once "../includes/footer.php";
?>