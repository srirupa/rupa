<?php
	require_once('variables.php');

	if($_SESSION['login'] == 0)
	{
		header ("Location: register.php");
		return;
	}

	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
	
	
	echo 'User Id : ';
	echo $_SESSION['userid'];
	echo '<br />';
	
	
	echo 'Prod Id : ';
	echo $_POST['prodid'];
	echo '<br />';

	echo 'Qty : ';
	echo $_POST['quantity'];
	echo '<br />';
	//insert
	$qury = "INSERT INTO cartdetails(". "UserId, ProductId, ordquantity" . " ) VALUES (" . $_SESSION['userid'] . "," . $_POST['prodid'] . "," . $_POST['quantity'] . ")";
	echo $qury;
	$result = $sqlcon -> query($qury);
	
	$sqlcon -> close();

	header ("Location: cart_list.php");
	
	
	//echo 'Added to Cart successfully!';
	
	
?>