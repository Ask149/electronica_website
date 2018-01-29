<?php

	session_start();
	include 'connect.php';

	$cid = $_SESSION['cart_id'];
	$days = $_GET['noofdays'];
	$datetorecv = $_SESSION['datetorecv'];
	//echo "$cid<br>";
	//echo $datetorecv; 
	if ($days > 3)
	{
		$stmt = $db->prepare("UPDATE Cart SET datetorecv = now()+INTERVAL $days DAY WHERE cart_id = :cid;");
		$stmt->bindParam(':cid', $cid);
		$stmt->execute();
	}
	//echo "1";
	header('Location: myorders.php');

?>