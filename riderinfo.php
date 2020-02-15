<?php
include("connect.php");

$riderinfoid =$_GET['riderinfo'];

$read = "SELECT * FROM FEST_riderbio INNER JOIN FEST_entries
ON FEST_riderbio.riderid = FEST_entries.id WHERE riderid=$riderinfoid ";

$result = $conn->query($read);

if (!$result) {
    echo $conn->error;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    
    <div class="container customwidth">
    <?php
while ($row = $result->fetch_assoc()) {
	
    $riderbio = $row['description'];
    $riderFirstName = $row['riderFirstName'];
    $riderLastName = $row['riderLastName'];
    $horseName = $row['horseName'];
	$imgpath = $row['image'];
	$riderbio = mb_convert_encoding($riderbio, "UTF-8", "Windows-1252");
	echo nl2br (" <div class='row'>
				<div class='col-md-6'>
				
					<h2>$riderFirstName $riderLastName</h2>
					
					<p>$riderbio </p>
					<h3>$horseName </h3>
				</div>
                <div class='col-md-6'>
               
                <img src='vendor/images/$imgpath' class='img-thumbnail img-responsive'/>
				</div>
				
			</div> ");
	
	
}


?>
	<a href='entries.php' class='btn btn-success btn-lg active'>back</a>	

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>