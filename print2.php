<?php
session_start();

?>
<?php
	
	if(isset($_POST['submit']))
    {
	
	$_SESSION['s_id'] = $_POST['s_id'];
	
	}
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from stock_sales where s_id='$_SESSION['s_id']'";
	//echo '$_SESSION[id]';
	
	$result = $db->query($query);
	//$row = $result->fetch_assoc(); 
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 
	?>
<html>
<body> 	
	<?php
	
	//$_SESSION['v_reg_no']=$_POST['v_reg_no'];
    
	$db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
//$query = "select * from v_booking where book_id=$v_reg_no and v_reg_no=$book_id";
    $query = "select * from stock_sales";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	
	$s_id=stripslashes($row['s_id']);
	$product_name=stripslashes($row['product_name']);
	$add_quantity=stripslashes($row['add_quantity']);
	$cost=stripslashes($row['cost']);
	$customer_name=stripslashes($row['customer_name']);
	$cus_contact_no=stripslashes($row['cus_contact_no']);	
	$subtotal=stripslashes($row['subtotal']);
	
	echo '<center><img src="images/green_icon.png" width="80" height="80"></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="4" color="black"> MEDICINE STOCK CENTERE</font></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="5" color="black">CUSTOMER PURCHASE BILL</font></center>'; echo '<br/>';
	
	echo '<center>';
	echo '<table>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Bill number</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $s_id; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Name of the Purchase product</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $product_name; echo '</font></td></tr>';
	 
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Quantity</font></td>'; 
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;';	echo $add_quantity; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Rate per Item</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $cost; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Name of customer</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $customer_name; echo '</font></td></tr>';
	
	
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Contact no of customer</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $cus_contact_no; echo '</font></td></tr>';
	
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Total MRP</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $subtotal; echo '</font></td></tr>';
	
	
	
	echo '</table></center>';

	echo '<br/><br/><br/><br/><br/><font face="aparajita" size="4" color="#111111">
	<center>N.B.: PLEASE KEEP THE RECEIPT....................</center></font><br>';
	echo '<center><a href="print4.php" target="content">PRINT THE RECEIPT</a></center>';
  

  $result->free();
  $db->close();
	
	?>
	
</body>
</html>