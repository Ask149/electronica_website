<!DOCTYPE html>

<?php session_start(); ?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica/Laptops</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modal.js"></script>

    <!-- Custom styles for this template -->
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
      
      
      #navbarResponsive2{
        padding-right: 300px;
      }
      #navbar2{
        float: bottom;
        margin-top: -10px;
      }
      table{
            font-family: cambria;
            margin-top: -8%;
            border: 1px solid blue;
           /* border-collapse: collapse;*/
            background-color: rgba(255,255,255,1);
            opacity: 0.9;
            color: white;
            font-weight: 600;
            width:100%;
            margin-bottom: 10%;
        }
        th{
            font-size: 25px;
            padding: 8px;
            text-align: center;
            border-bottom: .05px solid #202020;
        }
        td{
            cursor:pointer;
            font-size: 30px;
            color: black;
            padding: 8px;
            text-align: center;
            border-bottom: .05px solid #202020;
        }
        tr:hover{
            background-color: azure;
            color:black;
            border-radius: 10px;
        }
        .imglist{
          padding-top: 20px;
          padding-left: 80px;
          height: 150px;
          width: 150px;
        }
        .imgphones{
          height: 110px;
          width: 150px;
        }
        #result{

        font-weight:bold;
        font-size:16pt;
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
    <script  src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>     
    <script>
      $(document).ready(function(){
        $("#myTable td").click(function() {     

          <?php 
              $_SESSION['cat_id']=2;

          ?>

          var column_num = parseInt( $(this).index() ) + 1;
          var row_num = parseInt( $(this).parent().index() ) + 1;  

          $("#result").html( "Row_num =" + row_num + "  ,  Column_num ="+ column_num );   
        });
      });
    </script>
  </head>

  <body background="try.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="navbar2" >
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
            <li class="nav-item active">
              <a class="nav-link" href="laptops.php" style="padding-left: 30px;">Laptop
              <span class="sr-only">(current)</span>
              </a>
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
        <div class="col-lg-12 " >
          <div id="myModal" class="modal">
              <div align="center" class="quit-modal-content fadeInRight">
                          <header class="container" id="modal-head">
                              <h2 style="background-color: rgba(0,0,0,0.4); color: white;">Are You Sure?</h2></header>
                          <button id="redirect-to-results" onclick="location.href='logout.php';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
                          <button id="hide-modal" onclick="hidemodal()" >Go Back</button>
                </div>
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
          <table>
                  <tr>
                      <td ><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\DELL XPS 13\a11.jpeg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=1&price=109673&imgsrc=LAPTOPS\DELL XPS 13\a11.jpeg">DELL XPS 13<br><br>Cost : 109673</a>  
                      </td>
                      
                  </tr>
                   <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\HP SPECTRE 360\a12.jpeg" height=170 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=2&price=156002&imgsrc=LAPTOPS\HP SPECTRE 360\a12.jpeg">HP SPECTRE 360<br><br>Cost : 156002</a>
                      </td>
                      
                  </tr>
                  <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\APPLE MACBOOK AIR 13\a13.jpeg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=3&price=63990&imgsrc=LAPTOPS\APPLE MACBOOK AIR 13\a13.jpeg">APPLE MACBOOK AIR 13<br><br>Cost : 63990</a>
                      </td>
                      
                  </tr>
                 <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\ASUS UX305LA-FB055T\a14.jpg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=4&price=55900&imgsrc=LAPTOPS\ASUS UX305LA-FB055T\a14.jpg">ASUS UX305LA-FB055T<br><br>Cost : 55990</a>
                      </td>
                      
                  </tr>
                   <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\HP ENVY 14-JOO8TX\a15.jpg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=5&price=77550&imgsrc=LAPTOPS\HP ENVY 14-JOO8TX\a15.jpg">HP ENVY 14-JOO8TX<br><br>Cost : 77550</a>
                      </td>
                      
                  </tr>
                   <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\LENOVO Z51-70\a16.jpg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=6&price=65980&imgsrc=LAPTOPS\LENOVO Z51-70\a16.jpg">LENOVO Z51-70<br><br>Cost : 65980</a>
                      </td>
                      
                  </tr>
                  <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\HP PAVILLION 15-AB032TX\a17.jpg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=7&price=&imgsrc=LAPTOPS\HP PAVILLION 15-AB032TX\a17.jpg">HP PAVILLION 15-AB032TX<br><br>Cost : NA</a>
                      </td>
                      
                  </tr>
                  <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\ASUS X555LJXX132H\a18.jpg" height=170 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=8&price=&imgsrc=LAPTOPS\ASUS X555LJXX132H\a18.jpg">ASUS X555LJXX132H<br><br>Cost : NA</a>
                      </td>
                      
                  </tr>
                  <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\MAC BOOK PRO\a19.jpeg" height=120 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=9&price=42499&imgsrc=LAPTOPS\MAC BOOK PRO\a19.jpeg">MAC BOOK PRO<br><br>Cost : 42499</a>
                      </td>
                      
                  </tr>
                  <tr>
                      <td><div class="imglist"><a href="info.php"><img class="imgphones" src="LAPTOPS\LENOVO YOGA 500\a20.jpeg" height=150 width=200></img></a></div>
                      </td>
                      <td><a href="info.php?link=10&price=61490&imgsrc=LAPTOPS\LENOVO YOGA 500\a20.jpeg">LENOVO YOGA 500<br><br>Cost : 61490</a>
                      </td>
                  </tr>
                  
              </table>
           
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

<?php

  echo $_SESSION['cat_id'];

?>