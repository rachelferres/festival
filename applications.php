<?php
include("connect.php");

$read = "SELECT *
FROM FEST_nations
INNER JOIN FEST_applicants
ON FEST_nations.id = FEST_applicants.nation";

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
                <h1 class="mt-5">Applications for this Event</h1>
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
                            <th>Accept, Reject or Waitlist</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php while ($row = $result->fetch_assoc()) {

                        $riderFirstName = $row['firstName'];
                        $riderLastName = $row['lastName'];
                        $horseName = $row['horseName'];
                        $nationality = $row['nationality'];
                       
                        $riderid = $row['id'];


                        echo " 
                        <tr>
                        <th scope='row'>$riderid</th>
                        <td><a href='applicantinfo.php?riderinfo=$riderid' title='View riders biography'>$riderFirstName $riderLastName</a></td>
                        <td>$horseName</td>
                        <td>$nationality</td>
                        <td><div class='btn-group dropright'>
                        <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' 
                        aria-haspopup='true' aria-expanded='false'>
                          Action
                        </a>
                      
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                          <a class='dropdown-item' href='#'>Accept</a>
                          <a class='dropdown-item' href='#'>Waitlist</a>
                          <a class='dropdown-item' href='#'>Reject</a>
                        </div>
                      </div></td>
                        </tr>
                        
                        ";
                    }

                    ?>
                
                       

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php
    include("footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>