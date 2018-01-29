<?php

session_start();
$_SESSION['a']="1";
include "connect.php";

if(isset($_POST['create_acc']))
{
	$name = $_POST['name'];
	$emailid = $_POST['emailid'];
	$pwd = $_POST['pwd'];
	$rpwd = $_POST['rpwd'];

	$_SESSION['username'] = $emailid;

//	echo "$name";
//	echo "$emailid";
//	echo "$pwd";
//	echo "$rpwd";

//	var_dump($name);
	try
	{
		$stmt = $db->prepare("SELECT * FROM Customer where username = :mailid;");
		$stmt->bindParam('mailid', $emailid);
		$stmt->execute();	

		if(!$row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$stmt2 = $db->prepare("INSERT INTO Customer(username, password, name) VALUES(:un, :pw, :n);");
			$stmt2->bindParam(':un', $emailid);
			$stmt2->bindParam(':pw', $pwd);
			$stmt2->bindParam(':n', $name);
			$stmt2->execute();
			$stmt2 = $db->prepare("SELECT * FROM Customer WHERE username = :un;");
			$stmt2->bindParam(':un', $emailid);
			$stmt2->execute();
			$row = $stmt2->fetch(PDO::FETCH_ASSOC);
			$id = $row['id'];
			$_SESSION['varname'] = "$id";
			$stmt4 = $db->prepare("INSERT INTO currUser VALUES(:i, :e, now());");
			$stmt4->bindParam(':i', $id);
			$stmt4->bindParam(':e', $emailid);
			$stmt4->execute();
			header('Location: menu.php');	
		}
		else
		{
			echo "old";
		}
		//echo "last";
	}
	catch(Exception $e)
	{
		echo "$e";
	}
}
elseif(isset($_POST['login']))
{
	$emailid = $_POST['emailid'];
	$pwd = $_POST['pwd'];

	//echo "$emailid";
	//echo "$pwd";

	$stmt3 = $db->prepare("SELECT * FROM Customer WHERE username = :uname AND password = :passwd;");
	$stmt3->bindParam(':uname', $emailid);
	
	$stmt3->bindParam(':passwd', $pwd);
	
	$stmt3->execute();
	//echo "1";
	if(!$row = $stmt3->fetch(PDO::FETCH_ASSOC))
	{
		echo "Please enter a valid username and password";
		header('Location: login.html');
	}
	else
	{
		//echo "Validated";
		$id = $row['id'];
		echo "$id";
		echo "$emailid";
		$_SESSION['varname'] = "$id";
		//echo "$_SESSION['varname']";
		$stmt5 = $db->prepare("SELECT * FROM currUser where id = :i");
		$stmt5->bindParam(':i', $id);
		$stmt5->execute();	
		if(!$row = $stmt5->fetch(PDO::FETCH_ASSOC))
		{
			$stmt4 = $db->prepare("INSERT INTO currUser VALUES(:i, :e, now());");
			$stmt4->bindParam(':i', $id);
			$stmt4->bindParam(':e', $emailid);
			$stmt4->execute();
			header('Location: menu.php');
		}
		else
			echo "Already logged in.";
	}
}
else
{
	echo "ERROR!";

}

?>