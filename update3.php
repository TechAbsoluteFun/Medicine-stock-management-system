<html>
<head>
<title>Update records</title>
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
<body>
<?php
   //Connect with MYSQL
   $con = mysqli_connect('127.0.0.1','root','');
   //Select Database
    mysqli_select_db($con,'medicine');

   //SELECT QUERY
   $sql = "SELECT * FROM stock_details ";
   
   //Execute the query
   $records = mysqli_query($con,$sql);    
?>
<table>
    <tr>
	    <th>Batch no</th>
		<th>Add Quantity</th>
		<th>Available</th>
		<th>Cost</th>
		<th>Selling Price</th>
		<th>Date</th>
		<th>Expiry Date</th>
		<th>Product Name</th>
		<th>Supplier Name</th>
	</tr>
    
<?php
   while($row = mysqli_fetch_array($records))
   {
       echo "<tr><form action= update.php method=post>";
	   echo "<td><input type=text name=batch_no value='".$row['Batch no']."'></td>";
	   echo "<td><input type=text name=add_quantity value='".$row['Add Quantity']."'></td>";
	   echo "<td><input type=text name=avail_quantity value='".$row['Available']."'></td>";
	   echo "<td><input type=text name=cost value='".$row['Cost']."'></td>";
	   echo "<td><input type=text name=selling_price value='".$row['Selling Price']."'></td>";
	   echo "<td><input type=date name=date value='".$row['Date']."'></td>";
	   echo "<td><input type=date name=expire_date value='".$row['Expiry Date']."'></td>";
	   echo "<td><input type=text name=product_name value='".$row['Product Name']."'></td>";
	   echo "<td><input type=text name=supplier_name value='".$row['Supplier Name']."'></td>";
	   echo "<td><input type=hidden name=id value='".$row['ID']."'></td>";
	   echo "<td><input type=submit>";
	   echo "</form></tr>";
	}
?>	
		

</body>
</html>