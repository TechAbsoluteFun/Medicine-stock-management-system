<html>
<head>
<title>purchase details</title>
<style>
<!--
body,td,th {
	color: GREEN;
}
body {
	background-color: #ffe4e1;
}
.style11 {font-size: 14px}
-->
			
</style>
</head>
<body bgcolor="#ffe4e1">
<br>
<center><font face="Algerian" color="green" size="7">MEDICINE STOCK MANAGEMENT SYSTEM</font></center><br><br><br>
<center><font size="5" color="black">CUSTOMER PURCHASE DETAILS</font></center>
<center>
<br>
<form  actioN="customer_purchase_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>


<tr>
			<td><h1 style="font-family:Constantia;"><font size="3px">CUSTOMER ID</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="prod_id" style="width:150px" required="required">
			<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select c_id from customer_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['c_id']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
			</td>
		</tr>
<tr>
			<td><h1 style="font-family:Constantia;"><font size="3px">BATCH ID</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="batch_no" style="width:150px" required="required">
			<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select batch_no from stock_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['batch_no']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
			</td>
		</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">QUANTITY</font></h2></td>
<td><td align="center"><input name="qty" type="text" style="width:150px" required="required" placeholder="QUANTITY"/></td>
</tr>


<tr>
<td>&nbsp;</td>
<td align="center"><button type="submit" name="submit">SUBMIT</button></td></tr>

</table>
</form>

<?php
 if(isset($_POST['submit']))
	{
        
		$c_id = $_POST['c_id'];	
		$b_id = $_POST['b_id'];
		$qty = $_POST['qty'];
		
		if($c_id!=NULL)
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
			$conn->exec("INSERT INTO customer_buy(c_id,b_id,qty )
			VALUES ('$c_id','$b_id','$qty')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"customer_purchase_details.php\")
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
		