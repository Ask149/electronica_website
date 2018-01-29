<!DOCTYPE html>

<?php session_start(); ?>

<?php
  
  include 'connect.php';

  $user_id = $_SESSION['varname'];
  $cart_id = $_SESSION['cart_id'];
  $user_id = $_SESSION['varname'];
  $pid = $_SESSION['pid'];
  $price = $_SESSION['price'];
  //echo "$cart_id";
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica/Menu</title>

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
      #navbar2{
        float: bottom;
        margin-top: -10px;
      }
       table{
            font-family: cambria;
            margin-top: -8%;
            border: 1px solid blue;
           /* border-collapse: collapse;*/
            background-color: rgb(255,255,255);
            opacity: 0.9;
            color: white;
            font-weight: 600;
            width:100%;
            margin-bottom: 10%;
        }
        th{
            font-size: 25px;
            color: black;
            padding: 8px;
            text-align: center;
            border-bottom: .05px solid #202020;
        }
        td{
            cursor:pointer;
            font-size: 30px;
            color: black;
            padding: 8px;
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
          width: 120px;
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
        #button1{
          padding-top: 4px;
          padding-right: 10px;
          display: inline-block;
          background-color: transparent;
          border: 1px solid black;
          color: black;
          text-align: center;
          font-size: 17px;
          width: 200px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 3px;
        }
    </style>
    <script  src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>     
    <script>
      $(document).ready(function(){
        $("#myTable td").click(function() {     

          var column_num = parseInt( $(this).index() ) + 1;
          var row_num = parseInt( $(this).parent().index() )+1;  

          $("#result").html( "Row_num =" + row_num + "  ,  Rolumn_num ="+ column_num );   
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
            
            <li class="nav-item active">
              <a class="nav-link" href="myorders.php">My Orders</a>
              <span class="sr-only">(current)</span>
            </li>
            
            <li class="nav-item">
              <button class="button" onclick="dispmodal()" id="myBtn">LogOut<span class="glyphicon glyphicon-log-out span"></span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="navbar2">
      <div class="container">
        <a class="navbar-brand" href="menu.php">Categories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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
        <div class="col-lg-12 " >
          <div id="myModal" class="modal">
                <div align="center" class="quit-modal-content fadeInRight">
                            <header class="container" id="modal-head">
                                <h2 style="background-color: rgba(0,0,0,0.4); color: white;">Are You Sure?</h2></header>
                            <button id="redirect-to-results" onclick="location.href='logout.php';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
                            <button id="hide-modal" onclick="hidemodal()" >Go Back</button>
                  </div>
            </div>
<!--
            <div id="myModalUpdate" class="modal">

                  Modal content -->
         <!--        <div align="center" class="quit-modal-content fadeInRight">
                       <header class="container" id="modal-head">
                           <h2 style="background:rgba(0,0,0,0.4)">Please enter no of days to extend Delivery Date:- <input id=' ' type = 'number' size='5' name='noofdays' default=0 /></h2></header>
                       <button id="redirect-to-results" onclick="myFunc2(noofdays);" style="color:white; background:rgba(0,0,0,0.4)">Update Date</button>
                       <button id="hide-modal" onclick="hidemodalupdate()" style="color:white">Go Back</button>
                   </div>

               </div>

              <div id="myModalCancel" class="modal">

                 <div align="center" class="quit-modal-content fadeInRight">
                       <header class="container" id="modal-head">
                           <h2 style="background:rgba(0,0,0,0.4)">Are You Sure?</h2></header>
                       <button id="redirect-to-results" onclick="myFunc();" style="color:white; background:rgba(0,0,0,0.4)">Cancel Order</button>
                       <button id="hide-modal" onclick="hidemodalcancel()" style="color:white">Go Back</button>
                   </div>

               </div> -->
            <script>
              var modal = document.getElementById('myModal');
              var modalupdate = document.getElementById('myModalUpdate');
              var modalcanel = document.getElementById('myModalCancel');

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
          <table id="myTable" border="1" style="border-collapse: collapse;">
                  <tr id="pch">
                      <th>Order</th>
                      <th>Description</th>    
                  </tr>
                  <?php

                    $stmt3 = $db->prepare("SELECT * FROM Customer WHERE id = :i;");
                    $stmt3->bindParam(':i', $user_id);
                    $stmt3->execute();

                    $row = $stmt3->fetch(PDO::FETCH_ASSOC);
                    $username = $row['name'];

                    $count = 0;
                    $stmt = $db->prepare("SELECT * FROM Cart WHERE u_id = :uid;");
                    $stmt->bindParam(':uid', $user_id);
                    $stmt->execute();
                   // echo "$user_id &nbsp $username";
                    $arr = array();
                    //echo "aaaaa";
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                      $arr[$count] = $row['cart_id'];
                      $count++;
                      //echo $row['contact'];
                      $stmt2 = $db->prepare("SELECT * FROM product WHERE prod_id = :pid;");
                      $stmt2->bindParam(':pid', $row['prod_id']);
                      $stmt2->execute();

                      //echo "bbbbbb";

                      $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                      $name = $row2['prod_name'];
                      $qty = $row['quantity'];                      
                      $imgsrc = $row['imgsrc'];
                      $cost = $row2['cost'];
                      $cid = $row['cart_id'];
                      $_SESSION['cart_id'] = $cid;
                      $datetorecv = $row['datetorecv'];
                      $_SESSION['datetorecv'] = $datetorecv;
                      echo "<tr>";
                      echo "<td style='width:400px;  text-align: center;'><img src='".$imgsrc."' style='height:250px; width:auto;' ></td>";
                      echo "<td style='text-align: left;'>$name <br> <br>Name : $username  <br>Cost : $cost <br>Quantity : $qty <br> $datetorecv <br> <button id='button1' name='$cid'  onclick='dispmodalupdate($cid)'> Update Delivery Date </button> <br><button id='button1' name='$cid'  onclick='dispmodalcancel($cid)'> Cancel Order </button></td>";  
                      echo "</tr>";
                    }
                    $_SESSION['arr'] = $arr;
                    $_SESSION['cnt'] = $count;

                  ?>            
                     
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

    <div id="myModalUpdate" class="modal">

      <!-- Modal content -->
      <div align="center" class="quit-modal-content fadeInRight">
            <header class="container" id="modal-head">
                <h2 style="background:rgba(0,0,0,0.4)">Please enter no of days to extend Delivery Date:- <form action="update.php"><input type = 'number' size='5' name='noofdays' id='noofdays ' default=0 /></h2></header>
            <button type="submit" id="redirect-to-results" style="color:white; background:rgba(0,0,0,0.4)">Update Date</button></form>
            <button id="hide-modal" onclick="hidemodalupdate()" style="color:white">Go Back</button>
        </div>

    </div>

    <div id="myModalCancel" class="modal">

      <!-- Modal content -->
      <div align="center" class="quit-modal-content fadeInRight">
            <header class="container" id="modal-head">
                <h2 style="background:rgba(0,0,0,0.4)">Are You Sure?</h2></header>
            <button id="redirect-to-results" onclick="myFunc()" style="color:white; background:rgba(0,0,0,0.4)">Cancel Order</button>
            <button id="hide-modal" onclick="hidemodalcancel()" style="color:white">Go Back</button>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
      function myFunc()
      {
                window.location.href="cancel.php?cid=<?php echo $cid?>";
                
      }

    </script>
  </body>

</html>