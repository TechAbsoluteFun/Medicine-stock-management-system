<html>
<head>
<title>customer details</title>
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
<center><font size="5" color="black">UPDATE SALES ENTRY</font></center>
<center>
<br>
<form  actioN="customer_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">ID</font></h1></td>
<td><td align="center"><input name="c_id" type="text" style="width:150px" required="required" placeholder="ID"/></td>
<td><h1 style="font-family:Constantia;"><font size="4px">date</font></h1></td>
<td><td align="center"><input name="date" type="date" style="width:150px" required="required" placeholder="DATE"/></td>
</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">NAME</font></h1></td>
<td><td align="center"><input name="stock_name" type="text" style="width:150px" required="required" placeholder="NAME"/></td>
<td><h1 style="font-family:Constantia;"><font size="4px">AVAILABLE STOCK</font></h1></td>
<td><td align="center"><input name="avail_stock" type="text" style="width:150px" required="required" placeholder="AVAILABLE STOCK"/></td>
</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">QUANTITY</font></h1></td>
<td><td align="center"><input name="quantity" type="text" style="width:150px" required="required" placeholder="QUANTITY"/></td>
<td><h1 style="font-family:Constantia;"><font size="4px">RATE</font></h1></td>
<td><td align="center"><input name="c_id" type="text" style="width:150px" required="required" placeholder="RATE"/></td>
</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">CUSTOMER</font></h1></td>
<td><td align="center"><input name="customer_name" type="text" style="width:150px" required="required" placeholder="customer name"/></td>
<td><h1 style="font-family:Constantia;"><font size="4px">ADDRESS</font></h1></td>
<td><td align="center"><input name="add" type="text" style="width:150px" required="required" placeholder="address"/></td>
</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="4px">CONTACT 1</font></h2></td>
<td><td align="center"><input name="customer_contact1" type="text" style="width:150px" required="required" placeholder="contact1"/></td>
<td><h1 style="font-family:Constantia;"><font size="4px">CONTACT 2</font></h3></td>
<td><td align="center"><input name="customer_contact2" type="text" style="width:150px" required="required" placeholder="contact2"/></td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="middle"><button type="submit" name="submit">UPDATE</button></td></tr>

</table>
</form>


</center>

</body>
</html>
		