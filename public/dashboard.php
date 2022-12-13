<?php
    $title = "Dashboard"; // Title page name goes here
    include "../includes/header.php";

?>

<div class="background">
    <!-- Qoute first part -->

    <div>
        <div class="quote">
            <span>
                <?php
                    // Quote
                    echo "Don't forget to drink more water!";
                ?>
            </span>
        </div>

        <div class="badge">
            <div class="small_badge">
                
            </div>
            <div class="stars">

            </div>
        </div>
    </div>

    <!-- Date Picker row -->

    <div>
        <div class="date">
            <?php 

            ?>
        </div>
    </div>

    <div>
        <?php
            foreach ($array as $value){
                echo "
                    <div>
                        <p>Vegetables</p>
                        <p>", $rs , "</p>
                        <div class=\"buttonGreen\"></div>
                        <div class=\"buttonRed\"></div>
                    </div>
                ";
            };
        ?>
    </div>
    
    <div class="add">
        <button>Plus</button>
    </div>

</div>

<div id="failed_banner">
    <?php include_once "../src/elements/mascot_sad.php" ?>
    <p>I believe you can do it!</p>
</div>

<div id="passed_banner">
    <?php include_once "../src/elements/mascot_happy.php" ?>
    <p>Congratulation! +1 star</p>
</div>

<?php
    include_once "../includes/footer.php";
?>