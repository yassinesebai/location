<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css/Bootstrap links -->
  <link rel="stylesheet" href="styles/home.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- jquery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- poppins font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <title>Home</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light container">
    <a class="" href="#"><img id="logo" src="assets/carlogo.png" alt="" /></a>
    <ul class="navbar-nav offset-md-3">
      <li class="nav-item navbar-text">
        <a class="nav-link" href="mailto:yassinessebai@gmail.com"><img class="navicon" src="assets/env.svg" alt="" /></a>
      </li>
      <li class="nav-item b">
        <a class="nav-link active" href="#">Mail us : <br /><span id="email">info@carrental.com</span></a>
      </li>
      <li class="nav-item navbar-text">
        <a class="nav-link" href="tel=065933818"><img class="navicon" src="assets/phone.svg" alt="" /></a>
      </li>
      <li class="nav-item b">
        <a class="nav-link active" href="#">Call us : <br /><span id="email">+212 659 373 818</span></a>
      </li>
    </ul>
    <ul class="navbar-nav socials ml-md-auto">
      <li>
        <a href=""><img class="smicon px-2" src="assets/tw.svg" alt="" /></a>
      </li>
      <li>
        <a href=""><img class="smicon px-2" src="assets/fb.svg" alt="" /></a>
      </li>
      <li>
        <a href=""><img class="smicon px-2" src="assets/ln.svg" alt="" /></a>
      </li>
      <li>
        <a href=""><img class="smicon px-2" src="assets/ig.svg" alt="" /></a>
      </li>
    </ul>
  </nav>

  <!-- Second navbar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse p-md-3 navbar-collapse" id="navbarNav">
      <ul class="ml-md-5 navbar-nav">
        <li class="nav-item active">
          <a class="currentItem ml-lg-5 nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Book a car</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="row header">
    <div class="title col-md-6 p-5 d-flex align-items-center">
      <div class="container ml-5">
        <h2>Search, Book, and enjoy your trip </h2>
        <h1 class="mb-md-4">Find your <span class="text-danger">car</span> and <span class="text-danger">rent</span> it in seconds</h1>
        <h2 class="mb-md-5 desc">We offer fast and comfortable cars in great condition and at various price ranges</h2>
        <button class="mr-2 booknow btn btn-danger">Book Now ></button>
        <button class="learnmore btn btn-danger">Learn more ></button>
      </div>
    </div>
    <div class="car col-md-6 d-flex align-items-center">
      <img id="carpic" src="assets/car.png" alt="">
    </div>
  </div>
  <div class="row bg-success av align-items-center justify-content-center">
    <h3 class="mt-1">20+ cars are available to rent now, <a class="deal" href="">Get a deal now</a> </h3>
  </div>
</body>

</html>