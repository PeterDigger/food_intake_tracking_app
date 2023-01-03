<?php
    $title = "Progress"; // Title page name goes here
    include "../includes/header.php";
?>

<div class="background">
    <div class="test">

        <div class="md:col-span-1 md:flex md:justify-end">
            
        </div>

        <div class="md:col-span-1 bg-white">
            <h2>Level <?php echo "1";?></h2>
            <span></span>
        
            <div>
                <button class="w-4 h-5 rounded bg-slate-500 p-6 text-center"><</button>
                    <?php if(true){
                        echo "15 Dec 2022";
                    }?>
                <button class="w-4 h-5 rounded bg-slate-500 p-6 text-center">></button>
            </div>
        </div>
        
        <div class="md:col-span-1 md:flex md:justify-end">

        </div>

    </div>


<div class="background">
    <div class="left">
        <
    </div>
    <div class="right">
        
    </div>
    

    <!-- graph -->
    <div>
        <?php echo "Graph";?>
    </div>

</div>


<?php
    include_once "../includes/footer.php";
?>