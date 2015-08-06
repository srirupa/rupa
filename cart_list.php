<?php
	session_start();
?>

<html>
<head>
<title>
WebCart
</title>
</head>
<link rel='stylesheet' type = 'text/css' href='default1.css'>
<body>
<div id = 'topboxS'>
	<img src="http://localhost/images2/coollogo_com-32506606.png">
</div>
<?php
	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
			
	
	//select
	$sql ="select p.productid, p.productname, cd.ordquantity, p.price, pg.groupname, cd.ordquantity * p.price as amount from products p inner join cartdetails cd on p.productid = cd.productid inner join productgroups pg on p.groupid = pg.groupid where userId=" . $_SESSION['userid'] . " order by p.productname";
	
	$res = $sqlcon -> query($sql);
	
	echo "<div id='middleboxFP'>";
	echo "<table border = '1' cellspacing = '2' cellpadding = '2' align = 'center'>";


		echo '<tr>';
		
		echo '<td>';
		echo 'Group Name';
		echo '</td>';

		echo '<td>';
		echo 'Product Name';
		echo '</td>';
		
		echo '<td>';
		echo 'Ord Qty';
		echo '</td>';
		
		echo '<td>';
		echo 'Price';
		echo '</td>';
	
		echo '<td>';
		echo 'Amount';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '</tr>';
		
		$sum = 0;
	
	while($row = $res -> fetch_assoc())
	{
		echo '<tr>';
		
		echo '<td>';
		echo $row['groupname'];
		echo '</td>';
		
		echo '<td>';
		echo $row['productname'];
		echo '</td>';
		
		echo '<td>';
		echo $row['ordquantity'];
		echo '</td>';
		
		echo '<td>';
		echo $row['price'];
		echo '</td>';
		
		$amount = $row['amount'];
		echo '<td style = "text-align:  right;">';
		echo 'Rs ' . $row['amount'];
		echo '</td>';
		
		echo '<td style = "text-align:  right;">';
		echo "<img src = 'http://localhost/images/remove from shopping cart.jpg'>";

		echo '<a href="remove.php?productid=' ;
		echo $row['productid'] ;
		echo '">Remove</a>';

		echo '</td>';
		
		echo '</tr>';
		$sum = $sum + $amount;
		
	}
	
	echo '<tr>';
		
		echo '<td>';
		echo 'Total Amount';
		echo '</td>';

		echo '<td>';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
	
		echo '<td style = "text-align:  right;">';
		echo 'Rs ' . $sum;
		echo '</td>';
		
		echo '<td>';
		echo '</td>';
		
		echo '</tr>';
	
	
	echo '</table>';
	
	
	$sqlcon -> close();
	 echo '<a href = "index.php?groupid=';
	 echo $_SESSION['currentgroupid'];
	 echo '&ordcol=';
	 echo $_SESSION['currentordcol'];
	 echo '">';
	 echo 'Back';
	 echo '</a>';
	 echo "</div>";
?>
<div id = 'bottomboxS'>
	<p><b>Copyright : SRI RUPA, AMRITA SCHOOL OF ENGINEERING, AMRITAPURI</b>.</p>
</div>
<div id = boxlinks>
<a href="http://localhost/index.php?"><b> |Home| </b></a>
<?php
	if($_SESSION['login'] == 0)
	{
?>
<a href="http://localhost/login.php?"><b> |Login| </b></a>
<?php
	}
else
	{
?>
<a href="http://localhost/logout.php?"><b> |Logout| </b></a>
<?php
	}
?>
</div>
</body>
</html>