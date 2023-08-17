<?php
session_start();

?>
<?php
  
	
	
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from stock_sales where s_id='$_SESSION[s_id]' ";
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 
	?>

<?php
 if(isset($_POST['submit']))
	{
	 
	    //$s_id = $_POST['s_id'];
	    $customer_name = $_POST['customer_name'];
		$date = $_POST['date'];
		$product_name = $_POST['product_name'];
		//$cus_contact_no = $_POST['cus_contact_no'];
		$add_quantity = $_POST['add_quantity'];
		$cost = $_POST['cost'];
		$subtotal = $add_quantity*$cost;
		
		}
		if($customer_name!=NULL)
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
			$conn->exec("INSERT INTO stock_sales(customer_name,date,product_name,add_quantity,cost,subtotal )
			VALUES ('$customer_name','$date','$product_name','$add_quantity','$cost','$subtotal')");
			
			
			
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"print_invoice.php\")
											</script>"; 
			
			
			//echo '<a href="print_invoice.php" target="content"><center>PRINT INVOICE</a></center><BR><BR><BR>';
	      
			}
		catch(PDOException $e)
			{
			// roll back the transaction if something failed
			$conn->rollback();
			echo "<script>alert('Oops!something wrong.')</script>". $e->getMessage();
			}
		$conn = null;
		}
         else{
		
		/*mysql_query($sql_update1,$db);
		$balance=$subtotal-$payment;
		$sql_update2 = "UPDATE stock_details SET cost=$cost where batch_no= '$batch_no' ";
		mysql_query($sql_update2,$db);*/
		
		
		}
		
		
	
	
?>