<?php
  
  session_start();
  include 'connect.php';

  if(isset($_POST['buy']))
  {
    if ($_POST['name'] != "" and $_POST['address'] != "" and $_POST['quantity'] != "")
    {    
      $user_id = $_SESSION['varname'];
      //echo "$user_id <br>";
      $pid = $_SESSION['prod_id'];
      //echo "$pid <br>";
      $price = $_SESSION['price'];
      //echo $price;
      $emailid = $_SESSION['username'];

      $name = $_POST['name'];
      $addr = $_POST['address'];
      $qty = $_POST['quantity'];
      $imgsrc = $_SESSION['imgsrc'];
      $contact = $_POST['contact'];

      $total_cost = $_SESSION['total_price'];
      //echo $name . "&nbsp" . $addr;

      //echo $user_id . "&nbsp" . $pid ;

      $stmt = $db->prepare("INSERT INTO Cart(u_id, name, address, prod_id, quantity, total_cost,dateoforder , datetorecv, imgsrc, contact) VALUES (:uid, :n, :a, :pid, :q, :tot, now(), now()+INTERVAL 3 DAY, :img, :cont);");
      $stmt->bindParam(":uid", $user_id);
      $stmt->bindParam(":n", $name);
      $stmt->bindParam(":a", $addr);
      $stmt->bindParam(":pid", $pid);
      $stmt->bindParam(":q", $qty);
      $stmt->bindParam(":tot", $total_cost);
      $stmt->bindParam(":img", $imgsrc);
      $stmt->bindParam(":cont", $contact);
      $stmt->execute();
      //echo "werf";
      $stmt = $db->prepare("SELECT * FROM Cart WHERE u_id=:uid and name=:n and prod_id=:pid and total_cost=:tot;");
      $stmt->bindParam(":uid", $user_id);
      $stmt->bindParam(":n", $name);
      $stmt->bindParam(":pid", $pid);
      $stmt->bindParam(":tot", $total_cost);
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      echo $row['cart_id'];

      $_SESSION['cart_id'] = $row['cart_id'];
      header('Location: myorders.php');
    }
    else
      echo "Enter the details";
  }
  else
    echo "Error";

?>