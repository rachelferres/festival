<?php
include("connect.php");

$read = "SELECT * FROM FEST_entries";

$result = $conn->query($read);

if (!$result) {
    echo $conn->error;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!-- Navigation -->
    <?php
    include("navbar.php");
    ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Current Entries for this Event</h1>
                <p class="lead">
                    Are you ready for top class competition?
                </p>
                <ul class="list-unstyled">
                    <li>Festival of Eventing 7th-9th August 2020 </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="mx-auto" style="width: 75%;">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Rider</th>
                            <th>Horse</th>
                            <th>Nationality</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php while ($row = $result->fetch_assoc()) {

                        $riderFirstName = $row['riderFirstName'];
                        $riderLastName = $row['riderLastName'];
                        $horseName = $row['horseName'];
                        $nationality = $row['nationality'];
                        $riderNumber = $row['competitionNumber'];
                        $riderid = $row['id'];


                        echo " 
                        <tr>
                        <th scope='row'>$riderNumber</th>
                        <td><a href='riderinfo.php?riderinfo=$riderid' title='View riders biography'>$riderFirstName $riderLastName</a></td>
                        <td>$horseName</td>
                        <td>$nationality</td>
                        </tr>
                        
                        ";
                    }

                    ?>
                
                       

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>