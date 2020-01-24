<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light" style="">
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6" style="">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar6"> <a class="navbar-brand text-primary d-none d-md-block" href="#">
        <img class="" src="Picture1.png" style="width:200px">
      </a>
      <ul class="navbar-nav mx-auto">
      </ul>
      <ul class="navbar-nav">
        <div class="container" id="navbarResponsive">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                 <a href="http://www.jquery2dotnet.com" style="padding: 80px;" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                 <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                    <li>
                       <div class="row">
                          <div class="col-md-12">
                             <form class="form" role="form" method="post" action="backend/config/auth.php" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                   <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                   <input type="text" class="form-control" name="username" placeholder="username" required autofocus>
                                </div>
                                <div class="form-group">
                                   <label class="sr-only" for="exampleInputPassword2">Password</label>
                                   <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <!-- <div class="checkbox">
                                   <label>
                                   <input type="checkbox"> Remember me
                                   </label>
                                </div> -->
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ml-auto">
                                      <li class="nav-item">
                                        <!-- <a class="nav-link" href="dashboard.html">SIGN IN</a> -->
                                        <input type="submit" value="Login" class="btn btn-primary btn-block">
                                      </li>
                                    </ul>
                             </form>
                          </div>
                       </div>
      </ul>
    </div>
  </nav>
  <div class="py-2">
    <div class="row">
      <div class="text-center mx-auto col-lg-12 col-10">
        <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block h-500 w-100" src="spanduk.jpg"> </div>
            <div class="carousel-item"> <img class="d-block h-500 w-100" src="hh.png"> </div>
            <div class="carousel-item"> <img class="d-block h-500 w-100" src="Capture.png"> </div>
            <!-- <div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-dark.svg"> </div> -->
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1"> </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <marquee behavior="alternate">A scrolling text created with HTML Marquee element.</marquee>
  <div class="row">
    <div class="text-center mx-auto col-lg-12 col-10">
      <div>
        <div class="">
          <div> <img class="d-block w-100" src="Main Page.jpg" style="height:200px"> </div>
          <!-- <div class="carousel-item"> <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-dark.svg"> </div> -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>