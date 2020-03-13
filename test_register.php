<?php
// Include config file
require_once "connect.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                echo $conn->error;
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO `FEST_users` (user, password) VALUES (?, ?)";
        //INSERT INTO `FEST_users` (`id`, `user`, `password`, `firstName`, `lastName`, `typeUser`, `created_at`) VALUES (NULL, 'rachel@gmail.com', 'rachel', 'rachel', 'ferres', '1', '2020-03-10 20:51:40');
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
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
                <h1 class="mt-5">Enter here</h1>
                <p class="lead">
                    Are you ready for top class competition?
                </p>
                <ul class="list-unstyled">
                    <li>Register here to compete at the Irish Festival of Eventing 7th-9th August 2020 </li>

                </ul>
                <div class="col align-self-center text-left">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='POST' enctype="multipart/form-data">
                        <div class="form-group ">
                            <div class="form-row">

                                <div class="col-md-5">
                                    <label for="exampleFormControlInput1">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="exampleFormControlInput1">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" name="username" class="form-control" value="<?php echo $username; ?>" required>
                            <span class="help-block"><?php echo $username_err; ?></span>


                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
                                        <span class="help-block"><?php echo $password_err; ?></span>
                                    </div>

                                    <div class="col">
                                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" required>
                                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <input type="reset" class="btn btn-default" value="Reset">
                            </div>



                            <p>Already have an account? <a href="login.php">Login here</a>.</p>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="mx-auto" style="width: 75%;">


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