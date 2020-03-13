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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Timetable of events</h1>
                <p class="lead">
                    Festival of Eventing 7th-9th August 2020
                </p>
                <ul class="list-unstyled">
                    <h2 id="competition-day">Friday 7th August: Dressage - Main Arena</h2>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="mx-auto" style="width: 75%;">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a onclick="myFunctionFri()" href="#home" class="nav-link active" data-toggle="tab">Friday Dressage</a>
                </li>
                <li class="nav-item">
                    <a onclick="myFunctionSat()" href="#profile" class="nav-link" data-toggle="tab">Saturday Cross Country</a>
                </li>
                <li class="nav-item">
                    <a onclick="myFunctionSun()" href="#messages" class="nav-link" data-toggle="tab">Sunday Show Jumping</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <?php
            include("friday_dressage.php");
            ?>
        </div>
        <div class="tab-pane fade" id="profile">
            <p>Profile tab content ...</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <p>Messages tab content ...</p>
        </div>
    </div>

    <script>
        function myFunctionFri() {
            document.getElementById("competition-day").innerHTML = "Friday 7th August: Dressage - Main Arena";
        }
    </script>
    <script>
        function myFunctionSat() {
            document.getElementById("competition-day").innerHTML = "Saturday 8th August: Cross Country - Parklands";
        }
    </script>
    <script>
        function myFunctionSun() {
            document.getElementById("competition-day").innerHTML = "Sunday 9th August: Show Jumping - Main Arena";
        }
    </script>







    <?php
    include("footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>