
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Irish Festival of Eventing</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entries.php">Entries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enterevent.php">Enter Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timetable.php">Timetables</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
       
       <?php
      
      if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      {
        echo
        "<li class='nav-item'>
        <a class='nav-link' href='logout.php'>Logout</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='welcome.php'>My Area</a>
      </li>";
       
      }
      else
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='login.php'>Login</a>
      </li>";
      
           
      }
      
            ?>
          </div>
        </div>
      </ul>
    </div>
  </div>
</nav>

