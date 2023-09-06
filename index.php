<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  
<?php include 'menu.php'; ?>

  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/cc1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/cc2.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="Images/cc3.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>  
    </div>
  </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="Images/cc4.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Vigneshwara Tours.</h2>
          <p class="py-3">
Welcome to our world of travel wonders! At Vigneshwara Tours, 
we're passionate about crafting unforgettable journeys for all types of travelers. 
Our expert team is dedicated to ensuring your adventure is hassle-free and filled with excitement, 
whether you seek thrills, cultural immersion, or relaxation. With handpicked accommodations and experienced guides, 
we promise safety and comfort in every destination. Join us on a journey beyond the ordinary and start creating unforgettable memories today.

          </p>
          <a href="about.php" class="btn btn-success">Check More</a>
        </div>
</div>
</div>

  </section>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
      <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="Images/cc2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
</div>


      </div>
      <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="Images/cc2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
</div>


      </div>
      <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="Images/cc2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Nature</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
</div>


      </div>
  
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Gallery</h2>
    </div>
    <div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="Images/cc1.jpg" class="img-fluid pb-4">
        </div>
      </div>

    </div>  
</section>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Gallery</h2>
    </div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
        <div class="form-group">
          <label>user</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label>email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label>mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label>comment</label>
          <textarea class="form-control" name="comment">

          </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">yamgarswanand@gmail.com</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>