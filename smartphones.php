<!DOCTYPE html>

<?php session_start();  ?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica/Smartphones</title>

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
            padding-left: 100px;
            height: 150px;
            width: 150px;
          }
          .imgphones{
            height: 150px;
            width: auto;
           /*width: 120px;*/
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
    <script  src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>     
    <script>
      $(document).ready(function(){
        $("#myTable td").click(function() {     

          var column_num = parseInt( $(this).index() ) + 1;
          var row_num = parseInt( $(this).parent().index() ) + 1;  
          //document.getElementById("row_no").value = row_no;
          <?php 
              $_SESSION['cat_id']=1;
          ?>

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
            <li class="nav-item active">
              <a class="nav-link" href="smartphones.php">Smartphones</a>
              <span class="sr-only">(current)</span>
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
        <div class="col-lg-12 " >
            <div id="myModal" class="modal">
                <div align="center" class="quit-modal-content fadeInRight">
                            <header class="container" id="modal-head">
                                <h2 style="background-color: rgba(0,0,0,0.4); color: white;">Are You Sure?</h2></header>
                            <button id="redirect-to-results" onclick="location.href='login.html';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
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
            <table id="myTable" >
                    <tr>
                        <td ><div class="imglist"><a href="info.php?link=1&price=32999" name="o5"><img class="imgphones" src="MOBILES\ONE PLUS 5\a1.jpg"></img>
                        <input type="hidden" name="image" value="MOBILES\ONE PLUS 5\a1.jpg">
                        </a>  
                        </div>
                        </td>
                        <td><a href="info.php?link=1&price=32999&imgsrc=MOBILES\ONE PLUS 5\a1.jpg" name="o5">ONE PLUS 5<br><br>Cost : 32999</a>  
                        <?php 

                            $_SESSION['row_no'] = 1;
                        ?>
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php?link=2" name="o3"><a href="info.php?link=2&price=27999" name="o3"><img class="imgphones" src="MOBILES\ONE PLUS 3T\a2.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=2&price=27999&imgsrc=MOBILES\ONE PLUS 3T\a2.jpg" name="o3">ONE PLUS 3T<br><br>Cost : 27999</a>
                        <?php 

                            $_SESSION['row_no'] = 2;

                        ?>                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php?link=3&price=60999" name="i7"><a href="info.php?link=3&price=60999" name="i7"><img class="imgphones" src="MOBILES\IPHONE 7 PLUS\a3.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=3&price=60999&imgsrc=MOBILES\IPHONE 7 PLUS\a3.jpg">IPHONE 7 <br><br>Cost : 60999</a>
                        <?php 

                            $_SESSION['row_no'] = 3;

                        ?>
                        </td>
                        
                    </tr>
                   <tr>
                        <td><div class="imglist"><a href="info.php?link=4&price=64900"><a href="info.php?link=4&price=64900"><img class="imgphones" src="MOBILES\SAMSUNG GALAXY S8 PLUS\a4.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=4&price=64900&imgsrc=MOBILES\SAMSUNG GALAXY S8 PLUS\a4.jpeg">SAMSUNG GALAXY S8 PLUS<br><br>Cost : 64900</a>
                        <?php 

                            $_SESSION['row_no'] = 4;

                        ?>
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php?link=5&price=54000"><a href="info.php?link=5&price=54000"><img class="imgphones" src="MOBILES\GOOGLE PIXEL XL\a5.png" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=5&price=54000&imgsrc=MOBILES\GOOGLE PIXEL XL\a5.png">GOOGLE PIXEL XL<br><br>Cost : 54000</a>
                        <?php 

                            $_SESSION['row_no'] = 5;

                        ?>
                        </td>
                        
                    </tr>
                     <tr>
                        <td><div class="imglist"><a href="info.php?link=6&price=38988"><a href="info.php?link=6&price=38988"><img class="imgphones" src="MOBILES\LG G6\a6.jpeg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=6&price=38988&imgsrc=MOBILES\LG G6\a6.jpeg">LG G6<br><br>Cost : 38988</a>
                        <?php 

                            $_SESSION['row_no'] = 6;

                        ?>                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php?link=7&price=58090"><a href="info.php?link=7&price=58090"><img class="imgphones" src="MOBILES\SONY XPERIA XZ PREMIUM\a7.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=7&price=58090&imgsrc=MOBILES\SONY XPERIA XZ PREMIUM\a7.jpg">SONY XPERIA XZ PREMIUM<br><br>Cost : 58090</a>
                        <?php 

                            $_SESSION['row_no'] = 7;

                        ?>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php?link=8&price=12999"><a href="info.php?link=8&price=12999"><img class="imgphones" src="MOBILES\XIAOMI REDMI NOTE 4\a8.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=8&price=12999&imgsrc=MOBILES\XIAOMI REDMI NOTE 4\a8.jpg">XIAOMI REDMI NOTE 4<br><br>Cost : 12999</a>
                        <?php 

                            $_SESSION['row_no'] = 8;

                        ?>                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php?link=9&price=35900"><a href="info.php?link=9&price=35900"><img class="imgphones" src="MOBILES\HTC 10\a9.png" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=9&price=35900&imgsrc=MOBILES\HTC 10\a9.png">HTC 10<br><br>Cost : 35900</a>
                        <?php 

                            $_SESSION['row_no'] = 9;

                        ?>                        
                        </td>
                        
                    </tr>
                    <tr>
                        <td><div class="imglist"><a href="info.php?link=10&price=14999"><a href="info.php?link=10&price=14999"><img class="imgphones" src="MOBILES\NOKIA 6\a10.jpg" height=190 width=170></img></a></div>
                        </td>
                        <td><a href="info.php?link=10&price=14999&imgsrc=MOBILES\NOKIA 6\a10.jpg">NOKIA 6<br><br>Cost : 14999</a>
                        <?php 

                            $_SESSION['row_no'] = 10;

                        ?>                        
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
            <button id="redirect-to-results" onclick="location.href='logout.php';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
            <button id="hide-modal" onclick="hidemodal()" style="color:white">Go Back</button>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    

  </body>

</html>
