<?php
    $title = "Progress"; // Title page name goes here
    include "../includes/header.php";
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


<!-- Gamification elements -->
<?php 
$query = "SELECT user_ID FROM users WHERE user_name = '$uname'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$uID = $row['user_ID'];

$sql = $conn->query("SELECT levels, no_stars FROM reward WHERE user_ID = '$uID'");
if ($sql->num_rows > 0) {
    while($row = $sql->fetch_assoc()) {
        $levels = $row['levels'];
        $stars = $row['no_stars'];
    }
} else {
    echo "0";
}

// Get the current week number
$week_number = date('W');
$year = date('Y');

function check_data($data_json, $data){
    $week_number = date('W');
    $year = date('Y');
    $datetime = new DateTime();
    $datetime->setISODate($year, $week_number);
    $start_day = $datetime->format('Y-m-d');
    $datetime->modify('+6 days');
    $end_day = $datetime->format('Y-m-d');
    for ($i = strtotime($start_day); $i <= strtotime($end_day); $i = strtotime("+1 day", $i)) {
        $current_day = date("Y-m-d", $i);
        if (!array_key_exists($current_day, $data)) {
            $data[$current_day] = "";
        }
    }
    ksort($data);
    return $data_json = json_encode($data);
}

function get_data_json($conn, $uID, $week_start, $week_end, $goals_ID) {
    $query = "SELECT status, date_completed FROM log WHERE date_completed BETWEEN '$week_start' AND '$week_end' AND user_ID = '$uID' AND goals_ID = $goals_ID ORDER BY date_completed ASC";
    $result = $conn->query($query);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $date = $row['date_completed'];
        $status = $row['status'];
        $data[$date] = $status;
    }
    $data_json = 0;
    $data_json = check_data($data_json, $data);
    return $data_json;
}

// Start and end dates of the week
$week_start = date("Y-m-d", strtotime("{$year}-W{$week_number}-1"));
$week_end = date("Y-m-d", strtotime("{$year}-W{$week_number}-7"));

$data_json_vege = get_data_json($conn, $uID, $week_start, $week_end, 1);
$data_json_fruits = get_data_json($conn, $uID, $week_start, $week_end, 2);
$data_json_dairy = get_data_json($conn, $uID, $week_start, $week_end, 3);
$data_json_snack = get_data_json($conn, $uID, $week_start, $week_end, 4);

?>

<!-- Get values into the var -->
<script>
    function extractValues(temp) {
        var values = [];
        for (var key in temp) {
            values.push(temp[key]);
        }
        return values;
    }

    var vegeVal = extractValues(<?php echo $data_json_vege; ?>);
    var fruitsVal = extractValues(<?php echo $data_json_fruits; ?>);
    var dairyVal = extractValues(<?php echo $data_json_dairy; ?>);
    var snackVal = extractValues(<?php echo $data_json_snack; ?>);

    function jsonToArray(jsonString) {
        const jsonData = JSON.parse(jsonString);
        const values = Object.values(jsonData);
        return values;
    }

    function getCurrentWeekNumber() {
        let date = new Date();
        date.setHours(0, 0, 0, 0);
        // Thursday in current week decides the year.
        date.setDate(date.getDate() + 3 - (date.getDay() + 6) % 7);
        // January 4 is always in week 1.
        let week1 = new Date(date.getFullYear(), 0, 4);
        // Adjust to Thursday in week 1 and count number of weeks from date to week1.
        return 1 + Math.round(((date.getTime() - week1.getTime()) / 86400000 - 3 + 
        (week1.getDay() + 6) % 7) / 7);
    }

    var week = parseInt(<?php echo json_encode($week_number) ?>); 
</script>

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
                <div class="text-center">Level <?php echo $levels; ?></div>
                <div class="flex justify-center">
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
            <div id="snack" style="width: 100%;" class="max-w-2xl min-w-fit"></div>
        </div>
    </div>
    <!-- </div> -->

    <div class="md:col-span-1 md:flex md:justify-end"></div>

</div>



<!-- graph js -->
<script src="../src/js/graph.js"></script>

<script>
    // Badge
    const levely = document.getElementById("levell")
    const levelt = document.getElementById("leveltext")

    // set userID
    var userID = parseInt( <?php echo json_encode($uID) ?>);

    // get the date element
    var date = document.querySelector("#date");
    // get the previous button
    var prevButton = document.querySelector("#left");
    // get the next button
    var nextButton = document.querySelector("#right");

    // // create a date object
    // var currentDate = new Date();

    // // // format the date in the American format
    // // var options = {
    // //     day: "numeric",
    // //     month: "long",
    // //     year: "numeric"
    // // };

    date.innerHTML = 'Week ' + week + '(Today)';

    // var americanFormat = currentDate.toLocaleDateString('en-US', options);

    // // set the date element to the current date in the American format
    // date.textContent = americanFormat;

    // listen for clicks on the previous button
    prevButton.addEventListener("click", function () {
        week--;
        if (week === parseInt(<?php echo json_encode($week_number) ?>)){
            date.innerHTML = 'Week ' + week + '(Today)';
        }else{
            date.innerHTML = 'Week ' + week;
        }
        console.log(week);
        $.ajax({
        type: "POST",
        dataType : 'text',
        url: "../backends/fetch_data.php",
        data: { action: "getArrays", uID: <?php echo $uID; ?>, week: week },
        success: function(response) {
            var data = JSON.parse(response);
            newVegeVal = jsonToArray(data.array1);
            newFruitsVal = jsonToArray(data.array2);
            newDairyVal = jsonToArray(data.array3);
            newSnackVal = jsonToArray(data.array4);
        
            var newVege1 = createLineObject(dateArray, newVegeVal, 'Vege', 'rgb(32, 165, 98)');
            var newVege2 = createBarObject(dateArray, newVegeVal, 'Vege', 'rgb(37, 212, 124)');
            
            var newFruits1 = createLineObject(dateArray, newFruitsVal, 'Fruits', 'rgb(217, 176, 72)');
            var newFruits2 = createBarObject(dateArray, newFruitsVal, 'Fruits', 'rgb(255, 205, 78)');
            
            var newDairy1 = createLineObject(dateArray, newDairyVal, 'Dairy', 'rgb(193, 171, 130)');
            var newDairy2 = createBarObject(dateArray, newDairyVal, 'Dairy', 'rgb(224, 198, 148)');
            
            var newSnack1 = createLineObject(dateArray, newSnackVal, 'Snack', 'rgb( 181, 60, 0)');
            var newSnack2 = createBarObject(dateArray, newSnackVal, 'Snack', 'rgb(245, 113, 84)');

            var newVege = [newVege1, newVege2];
            var newFruits = [newFruits1, newFruits2];
            var newDairy = [newDairy1, newDairy2];
            var newSnack = [newSnack1, newSnack2];

            Plotly.newPlot('vege', newVege, {
                title: 'Vegetable',
                showlegend: false
            });

            Plotly.newPlot('fruits', newFruits, {
                title: 'Fruits',
                showlegend: false
            });

            Plotly.newPlot('dairy', newDairy, {
                title: 'Vegetable',
                showlegend: false
            });

            Plotly.newPlot('snack', newSnack, {
                title: 'Snack',
                showlegend: false
            });

        },
        error: function(xhr, status, error) {
            console.log("Error:", error);
        }
    });
    });

    // listen for clicks on the next button
    nextButton.addEventListener("click", function () {
        week++;
        if (week === parseInt(<?php echo json_encode($week_number) ?>)){
            date.innerHTML = 'Week ' + week + '(Today)';
        }else{
            date.innerHTML = 'Week ' + week;
        }
        $.ajax({
        type: "POST",
        dataType : 'text',
        url: "../backends/fetch_data.php",
        data: { action: "getArrays", uID: <?php echo $uID; ?>, week: week },
        success: function(response) {
            var data = JSON.parse(response);
            newVegeVal = jsonToArray(data.array1);
            newFruitsVal = jsonToArray(data.array2);
            newDairyVal = jsonToArray(data.array3);
            newSnackVal = jsonToArray(data.array4);
        
            console.log(newVegeVal);

            var newVege1 = createLineObject(dateArray, newVegeVal, 'Vege', 'rgb(32, 165, 98)');
            var newVege2 = createBarObject(dateArray, newVegeVal, 'Vege', 'rgb(37, 212, 124)');
            
            var newFruits1 = createLineObject(dateArray, newFruitsVal, 'Fruits', 'rgb(217, 176, 72)');
            var newFruits2 = createBarObject(dateArray, newFruitsVal, 'Fruits', 'rgb(255, 205, 78)');
            
            var newDairy1 = createLineObject(dateArray, newDairyVal, 'Dairy', 'rgb(193, 171, 130)');
            var newDairy2 = createBarObject(dateArray, newDairyVal, 'Dairy', 'rgb(224, 198, 148)');
            
            var newSnack1 = createLineObject(dateArray, newSnackVal, 'Snack', 'rgb( 181, 60, 0)');
            var newSnack2 = createBarObject(dateArray, newSnackVal, 'Snack', 'rgb(245, 113, 84)');

            var newVege = [newVege1, newVege2];
            var newFruits = [newFruits1, newFruits2];
            var newDairy = [newDairy1, newDairy2];
            var newSnack = [newSnack1, newSnack2];

            Plotly.newPlot('vege', newVege, {
                title: 'Vegetable',
                showlegend: false
            });

            Plotly.newPlot('fruits', newFruits, {
                title: 'Fruits',
                showlegend: false
            });

            Plotly.newPlot('dairy', newDairy, {
                title: 'Vegetable',
                showlegend: false
            });

            Plotly.newPlot('snack', newSnack, {
                title: 'Snack',
                showlegend: false
            });

        },
        error: function(xhr, status, error) {
            console.log("Error:", error);
        }
    });



    });

</script>

<?php
    include_once "../includes/footer.php";
?>