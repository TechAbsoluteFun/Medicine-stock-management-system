<?
session_start();
?>

<html>
<head>
<title>stock details</title>
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

<center><font size="5" color="black">ADD STOCK DETAILS</font></center>

</div>
<center>
<br>
<form  actioN="stock_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>

<tr>
   <td><h1 style="algerian"><font size="2px">BATCH NUMBER</font></h1></td>
   <td><td align="center"><input name="batch_no" type="text" style="width:150px" required="required" placeholder="batch no"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>


<tr>
   <td><h1 style="font-family:Constantia;"><font size="2px">QUANTITY</font></h2></td>
   <td><td align="center"><input name="avail_quantity" type="text" style="width:150px" required="required" placeholder=" quantity"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
   <td><h1 style="font-family:Constantia;"><font size="2px">TOTAL COST</font></h3></td>
   <td><td align="center"><input name="cost" type="text" style="width:150px" required="required" placeholder="cost"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
    <td><h1 style="font-family:Constantia;"><font size="2px">SELLING PRICE</font></h3></td>
    <td><td align="center"><input name="selling_price" type="text" style="width:150px" required="required" placeholder="selling amount"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
     <td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h3></td>
     <td><td align="center"><input name="date" type="date" style="width:150px" required="required" placeholder="date"/></td>
</tr>
	 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
    <td><h1 style="font-family:Constantia;"><font size="2px">EXPIRY DATE</font></h3></td>
    <td><td align="center"><input name="expire_date" type="date" style="width:150px" required="required" placeholder="expiry date"/></td>
</tr>
<tr>
			<td><h1 style="font-family:Constantia;"><font size="2px">STOCK NAME</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="product_name" style="width:150px" required="required">
			<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select product_name from product_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['product_name']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
			</td>
		</tr>
		 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
			<td><h1 style="font-family:Constantia;"><font size="2px">SUPPLIER NAME</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="supplier_name" style="width:150px" required="required">
<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select supplier_name from supplier_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['supplier_name']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
</td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
			<td></td><td><input type="reset" class="button" style="width:70px;height:30px;" value="Reset" name="reset">
			<input type="submit" class="button" style="width:70px;height:30px;" value="submit" name="submit">
			</td>
		</tr>

</table>
</form>

<?php
 if(isset($_POST['submit']))
	{
	 
        
        $batch_no = $_POST['batch_no'];
		$avail_quantity = $_POST['avail_quantity'];
		$cost =$_POST['cost'];
		$selling_price = $_POST['selling_price'];
		$date = $_POST['date'];
		$expire_date = $_POST['expire_date'];
		$product_name = $_POST['product_name'];
		$supplier_name = $_POST['supplier_name'];
	
		
		if($batch_no!=NULL)
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
			$conn->exec("INSERT INTO stock_details(batch_no,avail_quantity,cost,selling_price,date,expire_date,product_name,supplier_name )
			VALUES ('$batch_no','$avail_quantity','$cost','$selling_price','$date','$expire_date','$product_name','$supplier_name')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"stock_details.php\")
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
		