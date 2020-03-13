<?php

if (isset($_POST['loginname'])) {
    session_start();

    echo "form has been posted";
    include("connect.php");
    $user = $_POST['loginname'];
    $pass = $_POST['loginpw'];

    $login = "SELECT * FROM FEST_users WHERE user='$user' AND password='$pass' ";

    $result = $conn->query($login);

    $numberofrows = $result->num_rows;

    while ($row = $result->fetch_assoc()) {
        $type = $row['typeuser'];
    }

    echo $numberofrows;

    if ($numberofrows > 0) {
        $_SESSION['adminuser'] = $user;
        $_SESSION['usertype'] = $type;
        echo $_SESSION['usertype'];
       
        header("location: admin_confirm.php");
    }
} else {
    echo "first visit";
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
                <h1 class="mt-5">Log in below</h1>
                <p class="lead">
                    Please enter your username and password
                </p>
                <ul class="list-unstyled">
                    <li>Festival of Eventing 7th-9th August 2020 </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="mx-auto" style="width: 75%;">


            <form method='POST' action='login.php' enctype='multipart/form-data'>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value='' name='loginname' id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" value='' name='loginpw' id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Not registered? Click here</label>
                    </div>
                    <button type="submit" value='login' class="btn btn-primary">Submit</button>
                </form>




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