<html>
<head>
<title>customer details</title>
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
		
<br>
<center><font size="5" color="black">ADD CUSTOMER DETAILS</font></center>
<center>
<br>
<form  actioN="customer_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>
  
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">NAME</font></h1></td>
<td><td align="center"><input name="customer_name" type="text" style="width:150px" required="required" placeholder="Name"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">ADDRESS</font></h1></td>
<td><td align="center"><input name="customer_address" type="text" style="width:150px" required="required" placeholder="address"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">CONTACT 1</font></h2></td>
<td><td align="center"><input name="customer_contact1" type="text" style="width:150px" required="required" placeholder="contact1"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">CONTACT 2</font></h3></td>
<td><td align="center"><input name="customer_contact2" type="text" style="width:150px" required="required" placeholder="contact2"/></td>
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
       
		$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_contact1 = $_POST['customer_contact1'];
		$customer_contact2 = $_POST['customer_contact2'];
			
			
		
		if(customer_name!=NULL)
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "medicine";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// begin the transaction
			$conn->beginTransaction();
			// our SQL statememtns

			$conn->exec("INSERT INTO customer_details( customer_name , customer_address ,customer_contact1, customer_contact2 )
			VALUES ('$customer_name','$customer_address','$customer_contact1','$customer_contact2')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"customer_details.php\")
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
		