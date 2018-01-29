<?php

	session_start();
try{

	$db = new PDO('mysql:host=localhost;dbname=abc;', 'root', 'Kedar@123');
	if($db)
	{
		echo "Connected<br>";

	#userid will echo after passing through the login page!
		$userid = $_SESSION['varname'];
		echo "$userid";
		$cat_id = $_GET['cat_id'];
		echo "$id &nbsp";
		//echo "$lastid<br>";
		$stmt = $db->prepare("SELECT * FROM product WHERE category_id=$cat_id;");
		$stmt->execute();

		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
			echo $row['prod_name'] . "&nbsp" . $row['cost'] . "<br>";
	}	
	else
	{
		echo "Not connected";
	}
}
catch(Exception $e)
{
	echo "$e";
}

?>