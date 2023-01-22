<?php
    $title = "Progress"; // Title page name goes here
    include "../includes/header.php";
?>

<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>


<div class="background2">
    <!-- <div class="test"> -->

    <div class="md:col-span-1 md:flex md:justify-end"></div>

    <div class="md:col-span-1 bg-white md:w-1/2">

        <!-- Gamification part -->
        <div class="flex items-center">
            <div class="w-1/3 small_badge d-flex m-5 justify-content-center align-items-center">
                <?php include "../src/elements/badge.php"; ?>
            </div>

            <div class="w-2/3 bg-white">
                <div class="text-center">Level 2</div>
                <div class="flex justify-center">
                    <?php $stars = 2;?>
                    <?php for($i=0; $i<3; $i++): ?>
                    <div class="px-2">
                        <?php if($i<$stars) : include "../src/elements/normal_star.php";?>
                        <?php else: include "../src/elements/grey_stars.php"; ?>
                        <?php endif; ?>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Control date -->

        <hr class=" m-5 border-t-2 border-gray-300 pt-4">

        <div class="flex items-center justify-between mx-auto">
            <button id="left" class="progress_button"><</button> 
            <span id="date" class="font-bold text-slate-500"></span>
            <button id="right" class="progress_button">></button>
        </div>

        <!-- Graph generator -->
        <div class="grid grid-cols-1 place-items-center">
            <div id="vege" style="width: 100%;" class="max-w-2xl min-w-fit"></div>
            <div id="fruits" style="width: 100%;" class="max-w-2xl min-w-fit"></div>
            <div id="dairy" style="width: 100%;" class="max-w-2xl min-w-fit"></div>
        </div>
    </div>
    <!-- </div> -->

    <div class="md:col-span-1 md:flex md:justify-end"></div>

</div>

<!-- Gamification elements -->


<!-- graph js -->
<script src="../src/js/graph.js"></script>

<script>
    // get the date element
    var date = document.querySelector("#date");
    // get the previous button
    var prevButton = document.querySelector("#left");
    // get the next button
    var nextButton = document.querySelector("#right");

    // create a date object
    var currentDate = new Date();

    // format the date in the American format
    var options = {
        day: "numeric",
        month: "long",
        year: "numeric"
    };
    var americanFormat = currentDate.toLocaleDateString('en-US', options);

    // set the date element to the current date in the American format
    date.textContent = americanFormat;

    // listen for clicks on the previous button
    prevButton.addEventListener("click", function () {
        // subtract one day from the current date
        currentDate.setDate(currentDate.getDate() - 1);

        // format the date in the American format
        var options = {
            day: "numeric",
            month: "long",
            year: "numeric"
        };
        var americanFormat = currentDate.toLocaleDateString('en-US', options);

        // update the date element
        date.textContent = americanFormat;

        // send a request to the server to fetch the updated data
        fetch("/path/to/data?date=" + americanFormat)
            .then(response => response.json())
            .then(data => {
                // update the graph with the new data
                Plotly.update("vege", data.vege);
                Plotly.update("fruits", data.fruits);
                Plotly.update("dairy", data.dairy);
            });

    });

    // listen for clicks on the next button
    nextButton.addEventListener("click", function () {
        // add one day to the current date
        currentDate.setDate(currentDate.getDate() + 1);

        // format the date in the American format
        var options = {
            day: "numeric",
            month: "long",
            year: "numeric"
        };
        var americanFormat = currentDate.toLocaleDateString('en-US', options);

        // update the date element
        date.textContent = americanFormat;
        // send a request to the server to fetch the updated data
        fetch("/path/to/data?date=" + americanFormat)
            .then(response => response.json())
            .then(data => {
                // update the graph with the new data
                Plotly.update("vege", data.vege);
                Plotly.update("fruits", data.fruits);
                Plotly.update("dairy", data.dairy);
            });
    });
</script>

<?php
    include_once "../includes/footer.php";
?>