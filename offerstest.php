<!DOCTYPE html>

<?php session_start()?>;

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica/Home Offers</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      .row{
        padding-top: 100px;
      }
      #cat1{
        float: left;
        border-radius: 100%;
        border: 3px solid black;
      }

      #cat2{
        float: right;
        border-radius: 100%;
        border: 3px solid black;
      }

      #cat3{
        float: center;
        padding-left: 50px;
        border-radius: 100%;
        border: 3px solid black;
      }
      #cat4{
        float: left;
        padding-left: 180px;
        border-radius: 100%;
        border: 3px solid black;

      }
      #cat5{
        float: right;
        padding-right: 180px;
        border-radius: 100%;
        border: 3px solid black;
      }
      
      
      #navbar2{
        float: bottom;
        margin-top: -10px;
      }

      #navbarResponsive2{
        margin-top: -10px;
        padding-right: 300px;
      }
      .slideshow{
        margin-left: 300px;
        width: 500px;
        height: 250px;
        border: 2 2 2 2 solid black;
      }
      .head{
        font-family: sans-serif;
        margin-left: 530px;
      }
      .w3-display-container{
        width: 500px;
        height: 400px;

      }
    </style>

  </head>

  <body background="try.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar1" >
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="offers.html">Offers
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myorders.html">My Orders</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar2" >
      <div class="container">
        <a class="navbar-brand" href="menu.html">Categories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="test.php?cat_id=1" name="smartphones">Smartphones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test.php?cat_id=2" style="padding-left: 30px;">Laptop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test.php?cat_id=3" style="padding-left: 30px;">Washing Machine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test.php?cat_id=4" style="padding-left: 30px;">Refrigerator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test.php?cat_id=5" style="padding-left: 30px;">Television</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row content">
      <h2 class="head" >Offers</h2><br><br>

        <div class="col-lg-12 " >
          <div class="col-lg-3">
          </div>
          <div class="col-lg-6 slideshow">
            
              <div class="w3-content w3-display-container">
                <img class="mySlides" src="google_pixel_1.png" style="margin-left: 120px; width:250px; height: 400px;">
                <img class="mySlides" src="tv.jpg" style="width:100%">
                <img class="mySlides" src="mac_air_1.jpeg" style="padding-left: 80px; margin-top: 10px;  width:85%; height: 50%;">
                <img class="mySlides" src="laptop.jpeg" style="width:100%">

                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" >&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
              </div>

              <script>
              var slideIndex = 1;
              showDivs(slideIndex);

              function plusDivs(n) {
                showDivs(slideIndex += n);
              }

              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
              }
              </script>

          </div>
          <div class="col-lg-3">
          </div> 
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <scri src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>


