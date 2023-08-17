<html>
<head>
<title>customer bill</title>
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
<br><br><br>
<center><font size="5" color="black">UPDATE CUSTOMER BILL</font></center>
<center>
<br><br>
<form  actioN="stock_sales.php" method="post">
<table width="800" height="150"  align="center">
<td>&nbsp;</td><td>&nbsp;</td>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">ID</font></h1></td>
<td><td align="center"><input name="c_id" type="text" style="width:150px" required="required" placeholder="ID"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h1></td>
<td><td align="center"><input name="date" type="date" style="width:150px" required="required" placeholder="DATE"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="font-family:Constantia;"><font size="2px">BILL NO.</font></h1></td>
<td><td align="center"><input name="id" type="id" style="width:150px" required="required" placeholder="bill no"/></td>
</tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">CUSTOMER NAME</font></h1></td>
<td><td align="center"><input name="stock_name" type="text" style="width:150px" required="required" placeholder="customer name"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">PRODUCT NAME</font></h1></td>
<td><td align="center"><input name="quantity" type="text" style="width:150px" required="required" placeholder="product name"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">DESCRIPTION</font></h1></td>
<td><td align="center"><input name="customer_name" type="text" style="width:150px" required="required" placeholder="about product"/></td>
</tr>
<tr>
<td><h1 style="font-family:arial;"><font size="2px">SUB TOTAL</font></h1></td>
<td><td align="center"><input name="add" type="text" style="width:150px" required="required" placeholder="grand total"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">PAYMENT</font></h1></td>
<td><td align="center"><input name="customer_name" type="text" style="width:150px" required="required" placeholder="payment"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">BALANCE</font></h1></td>
<td><td align="center"><input name="add" type="text" style="width:150px" required="required" placeholder="balance"/></td>
</tr>

<tr>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td align="right"><button type="reset" name="reset">RESET</button></td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td align="center"><button type="print" name="print">PRINT</button></td>
</tr>

</table>
</form>


</center>

</body>
</html>
		