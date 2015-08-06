<?php
	require_once('variables.php');
	
	
	if(isset( $_POST['user']))
	{
		$selusr = $_POST['user'];
	}
	if(isset( $_POST['password']))
	{
		$selpass = $_POST['password'];
	}
	if(isset( $_POST['conpass']))
	{
		$selconpass = $_POST['conpass'];
	}
	if(isset( $_POST['email']))
	{
		$selemail = $_POST['email'];
	}
	if($selpass == $selconpass)
	{
		$sql = "INSERT INTO users(". "UserName, Password, EmailId" . " ) VALUES (" . "'" . $selusr . "',". "'" . $selpass . "',". "'" . $selemail . "'" . ")";
		$sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
			if(!$sqlcon)
			{
				die("Error in connecting database");
			}
			if ($sqlcon -> query($sql) === TRUE && $selpass == $selconpass) 
			{
					header('Location: login.php');
			} 
			else
			{
				echo 'Error';
				header('Location: register.php');
			}
		$sqlcon->close();
	}
	else
			{
				header('Location: register.php');
			}
?>