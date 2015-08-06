<?php
	session_start();
	if(isset($_GET['productid']))
	{
		$ID = $_GET['productid'];
	}
	
	$sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
			
		$userid = 	$_SESSION['userid'];
		$sql = "DELETE from cartdetails where userid=$userid and productid = $ID";
		$sqlcon -> query($sql);
	$sqlcon -> close();
	header('Location: cart_list.php');
?>