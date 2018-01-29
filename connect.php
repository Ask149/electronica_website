<?php

try 
{
	$db = new PDO('mysql:host=localhost;dbname=test;', 'root', 'Kedar@123');
	if($db)
	{
	//	echo "Connected !";
	}
	else
	{
		echo "Not Connected";
	}
}
catch(Exception $e)
{
	echo "Error has occured!";
}

?>
