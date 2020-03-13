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
   
    <title>Irelands Festival of Eventing</title>

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
          <h1 class="mt-5">Irelands First Festival of Eventing</h1>
          <p class="lead">
            Tyrella House, County Down
          </p>
          <ul class="list-unstyled">
            <li>Festival of Eventing 7th-9th August 2020</li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img src="vendor/images/dressage.jpg" class="d-block w-100" alt="dressage">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="vendor/images/xc.jpg" class="d-block w-100" alt="cross country">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="vendor/images/sj.jpg" class="d-block w-100" alt="show jumping">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
    <section class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <p>
              SAVE THE DATE!
            </p>
            <p>
              IRELANDS
              <code>FIRST EVER</code> FESTIVAL OF EVENTING: <code>7th-9th AUGUST 2020</code>
             
            </p>
            <p>
              Come and watch all the top riders from Ireland and the rest of the word, compete for the chance to become The Irish Champion of Eventing!
            </p>
            <p class="mb-0">
              Created by
              <a href="#">Rachel Ferres</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
    
