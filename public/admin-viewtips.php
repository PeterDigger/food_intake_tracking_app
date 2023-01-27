<?php
    $title = "News"; // Title page name goes here
    include "../includes/admin-header.php";



?>

<div class="background2">

    <div class="md:col-span-1 md:flex md:justify-end">

    </div>

    <div class="md:col-span-1 bg-white md:w-1/2">

        <div class="flex justify-between m-5 ">
            <h4 class="font-bold mt-12 pb-2 text-xl border-b border-black">News</h4>
            <button class='greenShortBtn'>
                <a href='admin-newtips.php'>Add</a>
            </button>
        </div>

        <?php
        $sql = "SELECT news_name, news_description, news_ID, date FROM news ORDER BY date DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='py-10 px-5 m-5 rounded-3xl bg-slate-300'>
                        <div class='bg-white p-5'>
                            <h2 class='text-xl my-2'>" . $row["news_name"] . " (" .date("F,d Y", strtotime($row["date"])) . ")</h2>
                            <p>" . $row["news_description"] . "</p>
                        </div>
                        <div class='greenBtn flex justify-between'>
                            <button class='greenShortBtn'>
                                <a href='admin-edittips.php?id=" . $row["news_ID"] . "'>Edit</a>
                            </button>
                            <button class='redShortBtn'>
                                <a href='admin-deletetips.php?id=" . $row["news_ID"] . "'>Delete</a>
                            </button>
                        </div>
                    </div>";
            }
        } else {
            echo "No news yet";
        }

        $conn->close();

        ?>

    </div>

    <div class="md:col-span-1 md:flex md:justify-end "></div>
</div>

<?php
    include_once "../includes/footer.php";
?>