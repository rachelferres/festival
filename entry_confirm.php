<?php
include("connect.php");
        
if(isset($_POST['upload'])){

     
    
    $titledata = $_POST['title'];
    $firstnamedata = $_POST['firstname'];
    $lastnamedata = $_POST['lastname'];
    $nationalitydata = $_POST['nationality'];
    $horsenamedata = $_POST['horsename'];
    $emaildata = $_POST['email'];
    $infodata = $_POST['info'];
    $picturedata = $_POST['uploadfile'];
  
  
  $insert = "INSERT INTO `FEST_applicants` (`id`, `title`, `firstName`, `lastName`, `nationality`, `horseName`, `emailAddress`, `information`, `image`) 
VALUES (NULL, '$titledata', '$firstnamedata', '$lastnamedata', '$nationalitydata', '$horsenamedata', '$emaildata', '$infodata', '$picturedata')";

  
  $result = $conn->query($insert);
  
  if(!$result){
      echo $conn->error;
  }else{
      echo "<p>Your entry was submitted for approval.</p>";
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