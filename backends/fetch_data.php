<?php
    //connect to the database
    //========================================================
    include_once "../includes/config.php";
    //========================================================

    //retrieve the user ID value from the POST request
    $uID = $_POST['uID'];
    $week_number = $_POST['week'];

    function check_data($data_json, $data){
        $week_number = $_POST['week'];
        $year = date('Y');
        $datetime = new DateTime();
        $datetime->setISODate($year, $week_number);
        $start_day = $datetime->format('Y-m-d');
        $end_day = date("Y-m-d",strtotime("this week +6 day",strtotime("+".($week_number-1)." week")));
        $datetime->modify('+6 days');
        $end_day = $datetime->format('Y-m-d');
        for ($i = strtotime($start_day); $i <= strtotime($end_day); $i = strtotime("+1 day", $i)) {
            $current_day = date("Y-m-d", $i);
            if (!array_key_exists($current_day, $data)) {
                $data[$current_day] = "";
            }
        }
        return $data_json = json_encode($data);
    }

function get_data_json($conn, $uID, $week_start, $week_end, $goals_ID) {
    $week_number = $_POST['week'];
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

// Get the current week number
// $week_number = date('W');
$year = date('Y');

// Start and end dates of the week
$datetime = new DateTime();
$datetime->setISODate($year, $week_number);
$week_start = $datetime->format('Y-m-d');
$week_end = date("Y-m-d",strtotime("this week +6 day",strtotime("+".($week_number-1)." week")));
$datetime->modify('+6 days');
$week_end = $datetime->format('Y-m-d');


$data_json_vege = get_data_json($conn, $uID, $week_start, $week_end, 1);
$data_json_fruits = get_data_json($conn, $uID, $week_start, $week_end, 2);
$data_json_dairy = get_data_json($conn, $uID, $week_start, $week_end, 3);
$data_json_snack = get_data_json($conn, $uID, $week_start, $week_end, 4);

$data = array(
    'array1' => $data_json_vege,
    'array2' => $data_json_fruits,
    'array3' => $data_json_dairy,
    'array4' => $data_json_snack
);

echo json_encode($data);

?>