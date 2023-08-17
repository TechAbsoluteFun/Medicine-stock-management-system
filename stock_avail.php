<html>
<head>
<title>available stock</title>
<link rel="stylesheet" href="style.css">
<style>
<!--
body,td,th {
	color: blue;
}
body {
	background-color: lightgreen;
}
.style11 {font-size: 14px}
-->
			
</style>
</head>
<body bgcolor="#ffe4e1">
<div class="main_wrapper">
<div class="head"><center>MEDICINE STOCK MANAGEMENT SYSTEM<center></div>


<div class="navbar">
<ul id="menu">
<li><a href=new2.php>HOME</a>  </li>
			
			</ul>
			</div>
			</div>
		
<br><br><br><br><br><br>
<center><font size="5" color="black">STOCK AVAILABLITY</font></center>
<center>
<br>
<form  actioN="stock_avail.php" method="post">
<table width="420" height="106"  align="center">
<br><br><br><br><br>

<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">NAME</font></h1></td>
<td><td align="center"><input name="stock_name" type="text" style="width:150px" required="required" placeholder="Name"/></td>
</tr>
<tr>
    <td align="center">&nbsp;</td>
    </tr>

<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">QUANTITY</font></h1></td>
<td><td align="center"><input name="quantity" type="text" style="width:150px" required="required" placeholder="quantity"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>

<tr>
<td>&nbsp;</td>
<td align="center"><button type="submit" name="submit">SUBMIT</button></td></tr>
</table>
</form>

<?php
 if(isset($_POST['submit']))
	{
      
		$stock_name = $_POST['stock_name'];
		$quantity = $_POST['quantity'];
		
		if($stock_name!=NULL)
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "stock";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// begin the transaction
			$conn->beginTransaction();
			// our SQL statememtns
			$conn->exec("INSERT INTO stock_avail(stock_name , quantity  )
			VALUES ('$stock_name','$quantity')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"stock_avail.php\")
											</script>";
			}
		catch(PDOException $e)
			{
			// roll back the transaction if something failed
			$conn->rollback();
			echo "<script>alert('Oops!something wrong.')</script>". $e->getMessage();
			}
		$conn = null;
		}
		
	}
	
?>
</center>

</body>
</html>
		