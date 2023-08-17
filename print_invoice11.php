<?php
session_start();

?>


<?php
	if(isset($_POST['submit']))
    {
	$_SESSION['id'] = $_POST['id'];
	}
	
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	//$query = "SELECT LAST_INSERT_ID(colid) from stock_sales";
	$query = "select * from stock_sales";
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 
	?>
<html>
<head>

    	

	<?php
     if(isset($_POST['submit']))
    {
	$_SESSION['id'] = $_POST['id'];
	}
	
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	//$query = "select * from stock_sales";
	$query = "select * from stock_sales";
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 

	
	$id=stripslashes($row['id']);
	$date=stripslashes($row['date']);
	$customer_name=stripslashes($row['customer_name']);
	$product_name=stripslashes($row['product_name']);
	$add_quantity=stripslashes($row['add_quantity']);
	$cost=stripslashes($row['cost']);
	$subtotal=stripslashes($row['subtotal']);
	
	echo '<center><img src="images/green_icon.png" width="80" height="80"></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="4" color="black">XZ MEDICINE STOCK CENTERE</font></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="5" color="black">CUSTOMER PURCHASE BILL</font></center>'; echo '<br/>';
	
	echo '<center>';
	echo '<table>';
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Bill number</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $id; echo '</font></td></tr>';
	
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Customer Name</font></td>'; 
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;';	echo $customer_name; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">date</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $date; echo '</font></td></tr>';
	 
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Name of the Purchase product</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $product_name; echo '</font></td></tr>';
	
	
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">total MRP</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $subtotal; echo '</font></td></tr>';
	
	echo '</table>';
    
	echo '<br/><br/><br/><br/><br/><font face="aparajita" size="4" color="#111111">
	N.B.: Thank you for your purchase ! Please visit again !</font><br>';
	echo '<a href="print_invoice11.php" target="content">print</a>';
    echo '</center>';

  $result->free();
  $db->close();
	
	?>
	
</body>
</html>