<?php

session_start();

include "connect.php";


try 
{	

	//echo "hi";
	$q = (int)$_REQUEST['q'];
	$price = (int)$_SESSION['price'];

	if($q<0)
	{
		$price = $price;
	}
	else
	{
		$price = $price * $q;
	}
	echo $price;
	$_SESSION['total_price'] = $price;

}
catch(Exception $e)
{
	echo "Error has occured!";
}

?>
