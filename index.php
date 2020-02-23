<?php
	include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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
          <h1 class="mt-5">Irelands First Festival of Eventing</h1>
          <p class="lead">
            Tyrella House, County Down
          </p>
          <ul class="list-unstyled">
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <header>
      <div class="overlay"></div>
      <video
        playsinline="playsinline"
        autoplay="autoplay"
        muted="muted"
        loop="loop"
      >
        <source
          src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
          type="video/mp4"
        />
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="display-3">Irish Festival of Eventing</h1>
            <p class="lead mb-0">7th-9th August 2020</p>
          </div>
        </div>
      </div>
    </header>

    <section class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <p>
              The HTML5 video element uses an mp4 video as a source. Change the
              source video to add in your own background! The header text is
              vertically centered using flex utilities that are build into
              Bootstrap 4.
            </p>
            <p>
              The overlay color can be changed by changing the
              <code>background-color</code> of the <code>.overlay</code> class
              in the CSS.
            </p>
            <p>
              Set the mobile fallback image in the CSS by changing the
              background image of the header element within the media query at
              the bottom of the CSS snippet.
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
