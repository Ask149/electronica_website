<?php
  session_start();

  include 'connect.php';

  $cid = $_GET['cid'];
//  echo "$cid";
  $stmt = $db->prepare("DELETE FROM Cart WHERE cart_id = :cid");
  $stmt->bindParam(':cid', $cid);
  $stmt->execute();
  header('Location: myorders.php');

?>