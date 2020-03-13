<?php

include("connect.php");

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
<?php

// Starting session
session_start();
 
// Accessing session data


include("connect.php");

$riderid = $_GET['riderid'];
$entryaction = $_GET['entryaction'];
$read = "SELECT * FROM `FEST_applicants` WHERE id = $riderid";

$readResult = $conn->query($read);

if (!$readResult) {
    echo $conn->error;
} else {
    echo "<p>Read from database.</p>";
}


    while ($row = $readResult->fetch_assoc()) {

        $id = $row['id'];
        $title = $row['title'];
        $firstnamedata = $row['firstName'];
        $lastnamedata = $row['lastName'];
        $nation = $row['nation'];
        $horseName = $row['horseName'];
        $emailData = $row['emailAddress'];
        $infodata = $row['information'];
        $imgpath = $row['image'];

        if ($entryaction == 'waitlist') {
        $insert = "INSERT INTO `FEST_waitlist` (`id`, `entryID`, `title`, `firstName`, `lastName`, `nation`, `horseName`, `emailAddress`, `information`, `image`) 
VALUES (NULL, $id, '$title', '$firstnamedata', '$lastnamedata', '$nation', '$horseName', '$emailData', '$infodata', '$imgpath')";


        $insertResult = $conn->query($insert);

        if (!$insertResult) {
            echo $conn->error;
        } else {
            echo "<p>Placed onto waitlist.</p>";
        }

        $delete = "DELETE FROM `FEST_applicants` WHERE `FEST_applicants`.`id` = $id";

        $deleteResult = $conn->query($delete);

        if (!$deleteResult) {
            echo $conn->error;
        } else {
            echo "<p>deleted from applicants.</p>";
        }
    }

    if ($entryaction == 'reject') {
        $insert = "INSERT INTO `FEST_rejectedentries` (`id`, `entryID`, `title`, `firstName`, `lastName`, `nation`, `horseName`, `emailAddress`, `information`, `image`) 
VALUES (NULL, $id, '$title', '$firstnamedata', '$lastnamedata', '$nation', '$horseName', '$emailData', '$infodata', '$imgpath')";


        $insertResult = $conn->query($insert);

        if (!$insertResult) {
            echo $conn->error;
        } else {
            echo "<p>Placed into rejected entries.</p>";
        }

        $delete = "DELETE FROM `FEST_applicants` WHERE `FEST_applicants`.`id` = $id";

        $deleteResult = $conn->query($delete);

        if (!$deleteResult) {
            echo $conn->error;
        } else {
            echo "<p>deleted from applicants.</p>";
        }
    }

    if ($entryaction == 'accept') {
        $insert = "INSERT INTO `FEST_entries` (`id`, `title`, `riderFirstName`, `riderLastName`, `horseName`, `competitionNumber`, `nation`) 
VALUES ($id, '$title', '$firstnamedata', '$lastnamedata', '$horseName', NULL, '$nation')";

        

       

        $insertResult = $conn->query($insert);
       

        if (!$insertResult) {
            echo $conn->error;
        } else {
            echo "<p>Placed into entries.</p>";
        }

        $insertBio = "INSERT INTO `FEST_riderbio` (`bio_id`,`riderid`, `description`, `image`) 
VALUES ('$id', '$id', '$infodata', '$imgpath')";

    $insertBioResult = $conn->query($insertBio);

        if (!$insertBioResult) {
            echo $conn->error;
        } else {
            echo "<p>Placed into rider Bio.</p>";
        }

        $delete = "DELETE FROM `FEST_applicants` WHERE `FEST_applicants`.`id` = $id";

        $deleteResult = $conn->query($delete);

        if (!$deleteResult) {
            echo $conn->error;
        } else {
            echo "<p>deleted from applicants.</p>";
        }
    }
}




?>





    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Enter here</h1>
                <p class="lead">
                    Are you ready for top class competition?
                </p>
                <ul class="list-unstyled">
                    <li>Festival of Eventing 7th-9th August 2020 </li>

                </ul>
                <div class="col align-self-center text-left">



                    <p>Your entry was submitted for approval.</p>



                </div>
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
