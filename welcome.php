<?php
include("connect.php");
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
} else {
    // if (!empty($_POST)) {

    $username = $_SESSION["username"] ?? '';

    $read = "SELECT * FROM `FEST_users` WHERE
`username` = '$username'";

    $result = $conn->query($read);

    if (!$result) {
        echo $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Irelands First Festival of Eventing</title>

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
                <h1 class="mt-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
                <p class="lead">
                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>

                    <?php
                    if (!empty($result)) {

                        while ($row = $result->fetch_assoc()) {

                            //$userlevel = $row['typeUser'];


                            $_SESSION['userlevel'] = $row['typeUser'];


                            if ($_SESSION['userlevel'] === '1') {
                                //go to admin page
                               echo "<a href='entry_confirm.php' class='btn btn-danger'>View Competitor Applications</a>";
                            } else if($_SESSION['userlevel'] === '2') {
                                echo "<a href='entries.php' class='btn btn-danger'>View/Edit Your information here</a>";
                            } else if($_SESSION['userlevel'] === '3') {
                                echo "<a href='book_tickets.php' class='btn btn-danger'>Book</a>";

                            }
                            
                        }
                    } 
                    ?>

                    

                </p>

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