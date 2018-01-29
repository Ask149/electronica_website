<!DOCTYPE html>

<?php 
  session_start(); 
  $_SESSION['cat_id']=4;
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica/Refrigerators</title>

    <!-- Bootstrap core CSS -->
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
            float : center;
            cursor : pointer;
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
        #pch{
            border-radius: 10px 10px 0 0;
        }
        #navbar2{
        float: bottom;
        margin-top: -10px;
      }
      
      #result{

        font-weight:bold;
        font-size:16pt;
      }
      .imglist{
        padding-top: 1px;
        padding-left: 60px;
        height: 150px;
        width: 150px;
      }
      .imgphones{
        height: 150px;
        width: auto;
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed" id="navbar2">
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
            <li class="nav-item active">
              <a class="nav-link" href="refrigerators.php" style="padding-left: 30px;">Refrigerator</a>
              <span class="sr-only">(current)</span>
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
            <table id="myTable">
                    <tr>
                        <td ><div class="imglist"><a href="info.php?link=1&price=&imgsrc="><img class="imgphones" src="REFRIGERATOR\SAMSUNGS 192L DIRECT COOL SINGLE DOOR REFRIGERATOR\a31.jpeg" ></img></a></div>
                        </td>
                        <td><a href="info.php?link=1&price=15439&imgsrc=REFRIGERATOR\SAMSUNGS 192L DIRECT COOL SINGLE DOOR REFRIGERATOR\a31.jpeg">SAMSUNGS 192L DIRECT COOL SINGLE DOOR REFRIGERATOR<br><br>Cost : 15439</a>  
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\SAMSUNG RT28M3022S8 FROST FREE DOUBLE DOOR REFRIGERATOR\a32.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=2&price=20000&imgsrc=REFRIGERATOR\SAMSUNG RT28M3022S8 FROST FREE DOUBLE DOOR REFRIGERATOR\a32.jpeg">SAMSUNG RT28M3022S8 FROST FREE DOUBLE DOOR REFRIGERATOR<br><br>Cost : 20000</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\WHIRLPOOL FP 313D FROST FREE TRIPLE DOOR REFRIGERATOR\a33.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=3&price=35690&imgsrc=REFRIGERATOR\WHIRLPOOL FP 313D FROST FREE TRIPLE DOOR REFRIGERATOR\a33.jpeg">WHIRLPOOL FP 313D FROST FREE TRIPLE DOOR REFRIGERATOR<br><br>Cost : 35690</a>
                        </td>
                        
                    </tr>
                   <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\WHIRLPOOL PRO 355 ELT 3S FROST FREE DOUBLE DOOR REFRIGERATOR\a34.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=4&price=28999&imgsrc=REFRIGERATOR\WHIRLPOOL PRO 355 ELT 3S FROST FREE DOUBLE DOOR REFRIGERATOR\a34.jpeg">WHIRLPOOL PRO 355 ELT 3S FROST FREE DOUBLE DOOR REFRIGERATOR<br><br>Cost : 28999</a>
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\Samsung RT28K3022RJHL Frost-free Refrigerator\a35.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=5&price=23469&imgsrc=REFRIGERATOR\Samsung RT28K3022RJHL Frost-free Refrigerator\a35.jpeg">Samsung RT28K3022RJ/HL Frost-free Refrigerator<br><br>Cost : 23469</a>
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\LG GL-B201AMLN Direct-cool Single-door Refrigerator\a36.jpeg" ></img></a></div>
                        </td>
                        <td><a href="info.php?link=6&price=13499&imgsrc=REFRIGERATOR\LG GL-B201AMLN Direct-cool Single-door Refrigerator\a36.jpeg">LG GL-B201AMLN Direct-cool Single-door Refrigerator<br><br>Cost : 13499</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\LG GL-I292RPZL Double-door Refrigerator\a37.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=7&price=28428&imgsrc=REFRIGERATOR\LG GL-I292RPZL Double-door Refrigerator\a37.jpeg">LG GL-I292RPZL Double-door Refrigerator<br><br>Cost : 28428</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\GODREJ 185L DIRECT COOL SINGLE DOOR REFRIGERATOR\a38.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=8&price=12499&imgsrc=REFRIGERATOR\GODREJ 185L DIRECT COOL SINGLE DOOR REFRIGERATOR\a38.jpeg">GODREJ 185L DIRECT COOL SINGLE DOOR REFRIGERATOR<br><br>Cost : 12499</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\HAIER 320L FROST FREE DOUBLE DOOR REFRIGERATOR\a39.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=9&price=26750&imgsrc=REFRIGERATOR\HAIER 320L FROST FREE DOUBLE DOOR REFRIGERATOR\a39.jpeg">HAIER 320L FROST FREE DOUBLE DOOR REFRIGERATOR<br><br>Cost : 26750</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php"><a href="info.php"><img class="imgphones" src="REFRIGERATOR\HAIR 270L FROST FREE DOUBLE DOOR REFRIGERATOR\a40.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=10&price=21442&imgsrc=REFRIGERATOR\HAIR 270L FROST FREE DOUBLE DOOR REFRIGERATOR\a40.jpg">HAIR 270L FROST FREE DOUBLE DOOR REFRIGERATOR<br><br>Cost : 21442</a>
                        </td>
                    </tr>
                    
                </table>
                <div id="result" style="padding-top: 20px;">
                  
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
