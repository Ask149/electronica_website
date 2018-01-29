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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modal.js"></script>
<!-- Custom styles for this template -->
    <style>
          <style>
      body {
        background: #2c3e52;
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
        margin-top: -30px;
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
      .button1 {
          margin-top: -20px;
          background-color: #00c378;
          box-shadow: 0 1px 4px #757575;
          border: none;
          width: 200px;
          height: 50px;
      }
      .button1:active {
        background-color: #0b9660;
        box-shadow: 0 1px 4px #757575;
      }

      .modal {
          display: none;
          position: fixed;
          z-index: 1;
          padding-top: 100px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0, 0, 0);
          background-color: rgba(0, 0, 0, 0.4);
      }

      .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
      }

      .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          background-color: red;
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }
      #myBtn {
        padding-top: 4px;
        padding-right: 10px;
        display: inline-block;
        background-color: transparent;
        border: none;
        color: gray;
        text-align: center;
        font-size: 17px;
        width: 120px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 3px;
      }
      #myBtn .span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      #myBtn .span:after {
        position: absolute;
        opacity: 0;
        transition: 0.5s;
      }
      #myBtn:hover{color: white;}
      #myBtn:hover .span {
        padding-right: 25px;
        color: white;
      }
      #myBtn:hover .span:after {
        opacity: 1;
        right: 0;
        padding-top: -10px;
      }
      #hide-modal{
             display: inline-block;
              background-color: black;
              border: none;
              width: 20%;
              padding: 10px;
              cursor: pointer;
              font-size: 20px;
              color: white;
              border-radius: 3px;
      }
      
      #redirect-to-results{
             display: inline-block;
             background-color: black;
             border: none;
             width: 30%;
             padding: 10px;
             cursor: pointer;
             font-size: 20px;
             color: orange;
             margin-top: 25px;
             margin-bottom: 15px;
             border-radius: 3px;
           }
           .quit-modal-content{
               margin: 5% auto;
               width: 50%;
               height: 40%;
               background: rgba(0,0,0,0.9);
               border-radius: 4px;
           }
    </style>
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
              <a class="nav-link" href="offers.php">Offers
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myorders.php">My Orders</a>
            </li>
            
            <li class="nav-item">
              <button class="button" onclick="dispmodal()" id="myBtn">LogOut<span class="glyphicon glyphicon-log-out span"></span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar2" >
      <div class="container">
        <a class="navbar-brand" href="menu.php">Categories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="smartphones.php">Smartphones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laptops.php" style="padding-left: 30px;">Laptop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="washingmachines.php" style="padding-left: 30px;">Washing Machine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="refrigerators.php" style="padding-left: 30px;">Refrigerator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="televisions.php" style="padding-left: 30px;">Television</a>
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
          <div id="myModal" class="modal">
                        <div align="center" class="quit-modal-content fadeInRight">
                                    <header class="container" id="modal-head">
                                        <h2 style="background-color: rgba(0,0,0,0.4); color: white;">Are You Sure?</h2></header>
                                    <button id="redirect-to-results" onclick="location.href='logout.php';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
                                    <button id="hide-modal" onclick="hidemodal()" >Go Back</button>
                          </div>
                          <script>
                            var modal = document.getElementById('myModal');

                            var btn = document.getElementById("myBtn");

                            var span = document.getElementsByClassName("close")[0];

                            btn.onclick = function() {
                                modal.style.display = "block";
                            }

                            span.onclick = function() {
                                modal.style.display = "none";
                            }

                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                          </script>
                          </div>
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

    <div id="myModal" class="modal">

          <!-- Modal content -->
          <div align="center" class="quit-modal-content fadeInRight">
                <header class="container" id="modal-head">
                    <h2 style="background:rgba(0,0,0,0.4)">Are You Sure?</h2></header>
                <button id="redirect-to-results" onclick="location.href='login.html';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
                <button id="hide-modal" onclick="hidemodal()" style="color:white">Go Back</button>
            </div>

        </div>
        

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>






