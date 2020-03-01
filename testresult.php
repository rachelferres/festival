<?php
include('connect.php');

$name    = $_POST['carname'];
$email   = $_POST['caremail'];
$vote    = $_POST['carbrand'];

// echo $name.$email.$vote;
$loggeddate = date("Y-m-d H:i:s");

$insertsql = "INSERT INTO mycarvote08 (name, email, vote, whed) VALUES ('$name', '$email', '$vote', '$loggeddate')";

$result = $conn->query($insertsql);

if (!$result) {
    echo $conn->error;
}

$countskoda = "SELECT COUNT(vote) As skodacount FROM mycarvote08 WHERE vote = 'skoda'";

$countresult = $conn->query($countskoda);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qub rent</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    
</head>

<body>

    

    <div class="container customwidth">

        <?php
        if (!$result) {
            echo $conn->error;
        } else {
            echo "<h2>Thanks for your vote<h2>";
        }

        while ($row = $countresult->fetch_assoc()) {

            $count = $row['skodacount'];

            echo "<h4>Number of Skoda results is <strong>$count</strong></h4>";
        }

        ?>
        <form action="index.php">
            <button type="submit">Back</button>
        </form>

        <canvas id="myChart"></canvas>
    </div>
   

</body>

</html>