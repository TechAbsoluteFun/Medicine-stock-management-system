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
   $con = mysqli_connect('localhost','root','');
   //Select Database
    mysqli_select_db($con,'medicine');

   //SELECT QUERY
   $sql = "SELECT * FROM stock_details";
   
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
       echo "<tr><form action= update1.php method=post>";
	   echo "<td><input type=text name=batch_no value='".$row['batch_no']."'></td>";
	   echo "<td><input type=text name=add_quantity value='".$row['add_quantity']."'></td>";
	   echo "<td><input type=text name=avail_quantity value='".$row['avail_quantity']."'></td>";
	   echo "<td><input type=text name=cost value='".$row['cost']."'></td>";
	   echo "<td><input type=text name=selling_price value='".$row['selling_price']."'></td>";
	   echo "<td><input type=text name=date value='".$row['date']."'></td>";
	   echo "<td><input type=text name=expire_date value='".$row['expire_date']."'></td>";
	   echo "<td><input type=text name=product_name value='".$row['product_name']."'></td>";
	   echo "<td><input type=text name=supplier_name value='".$row['supplier_name']."'></td>";
	   echo "<td><input type=hidden name=id value='".$row['id']."'></td>";
	   echo "<td><input type=submit>";
	   echo "</form></tr>";
	}
?>	
		
</table>
</body>
</html>