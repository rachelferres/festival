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

                    <input type="email" class="form-input" value='' name='loginname' id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-input" value='' name='loginpw' id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <input type="submit" value='login' class="btn btn-primary"></button>
            </form>




        </div>
    </div>