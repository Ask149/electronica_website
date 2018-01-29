<?php

    session_start();

    include "connect.php";

    $id = $_SESSION['varname'];
   	echo "$id";

    $stmt2 = $db->prepare("SELECT * FROM currUser WHERE id = :i;");
    $stmt2->bindParam(':i', $id);  
    $stmt2->execute();

    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    $logintime = $row['loginTime'];  
    $uname = $row['username'];
   	echo "$uname";

    if ($id)
    {
     	$stmt2 = $db->prepare("INSERT INTO deletedUser VALUES(:i, :u, :lt,now());");
     	$stmt2->bindParam(':i', $id);
     	$stmt2->bindParam(':u', $row['username']);
      $stmt2->bindParam(':lt', $logintime);	
     	$stmt2->execute();

      $stmt2 = $db->prepare("DELETE FROM currUser WHERE id = :i;");
      $stmt2->bindParam(':i', $id);  
      $stmt2->execute();

      unset($_SESSION['varname']);

     	header('Location: login.html');
     }
     else
     {
      unset($_SESSION['varname']);
      header('Location: login.html');
     }

?>