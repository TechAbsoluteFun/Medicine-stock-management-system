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
<form  actioN="add_stock_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>

 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="algerian"><font size="2px">BATCH NUMBER</font></h1></td>
<td><td align="center"><input name="batch_no" type="text" style="width:150px" required="required" placeholder="batch no"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>

<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">QUANTITY</font></h1></td>
<td><td align="center"><input name="stock_quantity" type="text" style="width:150px" required="required" placeholder="quantity"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">COMPANY PRICE</font></h2></td>
<td><td align="center"><input name="company_price" type="text" style="width:150px" required="required" placeholder="company price"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">SELLING PRICE</font></h3></td>
<td><td align="center"><input name="selling_price" type="text" style="width:150px" required="required" placeholder="selling price"/></td>
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
	@ $db = new mysqli('localhost', 'root', '', 'stock');
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
	@ $db = new mysqli('localhost', 'root', '', 'stock');
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
<td>&nbsp;</td>
<td align="center"><button type="submit" name="submit">SUBMIT</button></td></tr>

</table>
</form>

<?php
				if(isset($_POST['submit']))

            {
		
	    $batch_no =mysql_real_escape_string ($_POST['batch_no']);
		$stock_quantity =mysql_real_escape_string ($_POST['stock_quantity']);
		$company_price = mysql_real_escape_string($_POST['company_price']);
		$selling_price = mysql_real_escape_string($_POST['selling_price']);
		$date = mysql_real_escape_string($_POST['date']);
		$expire_date =mysql_real_escape_string ($_POST['expire_date']);
		$product_name =mysql_real_escape_string ($_POST['product_name']);
		$supplier_name =mysql_real_escape_string( $_POST['supplier_name']);
	
			
			$count = $db->countOf("stock_details", "id='$id'");
		if($count==1)
			{
		echo "<font color=red> Dublicat Entry. Please Verify</font>";
			}
			else
			{
			if($id!=NULL)
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "stock";

		 {
				
			if($db->query("INSERT INTO stock_details($id,batch_no,stock_quantity,company_price,selling_price,date,expire_date,product_name,supplier_name )
			VALUES ('$id','$batch_no','$stock_quantity','$company_price','$selling_price','$date','$expire_date','$product_name','$supplier_name')"))
			{
			echo "<br><font color=green size=+1 > [$name] Stock Details Added !</font>" ;
			$db->query("insert into stock_avail(name,quantity) values('$name',0)");
			}
			
			else
			echo "<br><font color=red size=+1 >Problem in Adding !</font>" ;
			
			}
        }
			
		  }	
	?>
	
	
</center>

</body>
</html>