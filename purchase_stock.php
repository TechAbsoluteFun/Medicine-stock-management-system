<html>
<head>
<title>purchase entry</title>
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
<br><br>
<center><font size="5" color="black">ADD NEW PURCHASE ENTRY</font></center>
<center>
<br><br><br>
<form  actioN="purchase_stock.php" method="post">
<table width="800" height="150"  align="center">
<td>&nbsp;</td><td>&nbsp;</td>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">BILL NO.</font></h1></td>
<td><td align="center"><input name="bill_no" type="id" style="width:150px" required="required" placeholder="bill no"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h1></td>
<td><td align="center"><input name="date" type="date" style="width:150px" required="required" placeholder="DATE"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="font-family:Constantia;"><font size="2px">SUPPLIER NAME</font></h1></td>
<td><td align="center"><input name="supp_name" type="text" style="width:150px" required="required" placeholder="supplier"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">STOCK NAME</font></h1></td>
<td><td align="center"><input name="stock_name" type="text" style="width:150px" required="required" placeholder="stock name"/></td>
</tr>
<tr>
<td><h1 style="arial;"><font size="2px">AVAILABLE QTY.</font></h1></td>
<td><td align="center"><input name="avail_quantity" type="text" style="width:150px" required="required" placeholder="avail qty"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">QUANTITY</font></h1></td>
<td><td align="center"><input name="quantity" type="text" style="width:150px" required="required" placeholder="quantity"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">BUYING RATE PER ITEM</font></h1></td>
<td><td align="center"><input name="buying_rate_per" type="text" style="width:150px" required="required" placeholder="buying rate"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">TOTAL BUYING RATE</font></h1></td>
<td><td align="center"><input name="total_b_rate" type="text" style="width:150px" required="required" placeholder="buying rate"/></td>
</tr>
<tr>
<td><h1 style="arial;"><font size="2px">SALING RATE PER ITEM</font></h1></td>
<td><td align="center"><input name="saling_rate_per" type="text" style="width:150px" required="required" placeholder="sales rate"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">TOTEL SALING AMOUNT</font></h1></td>
<td><td align="center"><input name="total_s_rate" type="text" style="width:150px" required="required" placeholder="sales rate"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">DESCRIPTION</font></h1></td>
<td><td align="center"><textarea name="description" style="width:150px; height:40px; "></textarea></td>
</tr>
<tr>
<td><h1 style="font-family:arial;"><font size="2px">SUB TOTAL</font></h1></td>
<td><td align="center"><input name="sub_total" type="text" style="width:150px" required="required" placeholder="grand total"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial;"><font size="2px">PAYMENT</font></h1></td>
<td><td align="center"><input name="payment" type="text" style="width:150px" required="required" placeholder="payment"/></td>
<td>&nbsp;</td><td>&nbsp;</td>
<td><h1 style="arial"><font size="2px">BALANCE</font></h2></td>
<td><td align="center"><input name="balance" type="text" style="width:150px" required="required" placeholder="balance"/></td>
</tr>

<tr>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td align="right"><button type="reset" name="reset">RESET</button></td>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
<td align="center"><button type="submit" name="submit">UPDATE</button></td>
</tr>

</table>
</form>
<?php
 if(isset($_POST['submit']))
	{
        $bill_no = $_POST['bill_no'];
		$date = $_POST['date'];
		$supp_name = $_POST['supp_name'];
		$stock_name = $_POST['stock_name'];
		$avail_quantity = $_POST['avail_quantity'];
		$quantity = $_POST['quantity'];
		$buying_rate_per = $_POST['buying_rate_per'];
		$total_b_rate = $_POST['total_b_rate'];
		$saling_rate_per = $_POST['saling_rate_per'];
		$total_s_rate = $_POST['total_s_rate'];
		$description = $_POST['description'];
		$sub_total = $_POST['sub_total'];
		$payment = $_POST['payment'];
		$balance = $_POST['balance'];
	
		
		if($bill_no!=NULL)
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
			$conn->exec("INSERT INTO purchase_stock(bill_no,date,supp_name,stock_name,avail_quantity,quantity,buying_rate_per,total_b_rate,saling_rate_per,total_s_rate,description,sub_total,payment,balance )
			VALUES ('$bill_no','$date','$supp_name','$stock_name','$avail_quantity','$quantity','$buying_rate_per','$total_b_rate','$saling_rate_per','$total_s_rate','$description','$sub_total','$payment','$balance')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"purchase_stock.php\")
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
		