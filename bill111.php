<?php
session_start();

<?
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
	$query = "select * from stock_sales where id='$[id]' ";
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 
	?>
<html>
<head>
</head>
<body >
<?php
	
	session_start();
	$db_host = "localhost";
    $db_username = "root"; 
    $db_pass = ""; 
    $db_name = "medicine";

mysql_connect("$db_host","$db_username","$db_pass") or die("could not connect to mysql");
mysql_select_db("$db_name") or die("no database");  	//to connect to  mysql database

	$dynamic_table="";
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$id=mysql_real_escape_string($_GET['id']);
		

$list="SELECT id,customer_name,date,product_name,cus_contact_no,add_quantity,cost,subtotal FROM stock_sales
WHERE stock_sales.id='".$id."'";

		
		$sql= mysql_query($list);
		$count=mysql_num_rows($sql);		
		if($count>0)
		{
			while($rows=mysql_fetch_assoc($sql))
			{
//$book_id = $rows['book_id'];
  $_SESSION['id']=$rows['id'];
				//$c_name = $rows['c_name'];
				$id=$rows['id'];
	            $product_name=$rows['product_name'];
	            $add_quantity=$rows['add_quantity'];
	            $cost=$rows['cost'];
	            $customer_name=$rows['customer_name'];
	            $cus_contact_no=$rows['cus_contact_no'];	
	            $subtotal=$rows['subtotal'];
			}
			
	$dynamic_table='<br><center><span class="heading"><font size="5" color="#191970"><u><b>Bill Details</b></u></font></span></center>
	                <center>
					<br \>
					<table id="main_table" width="278" height="370" border="0" align="center" cellpadding="3" cellspacing="5">
					<tr><td width="310">&nbsp;</td>
						<td width="303">Book ID:</td>
					  <td>'.$id.'</td>
					</tr>
					<tr><td width="310">&nbsp;</td>
						<td width="303">Customer name:</td>
					  <td>'.$product_name.'</td>
					</tr>
					<tr><td width="310">&nbsp;</td>
						<td width="303">Pickup Date:</td>
					  <td>'.$add_quantity.'</td>
					</tr>
					<tr><td width="310">&nbsp;</td>
						<td width="303">Pickup Time:</td>
					  <td>'.$cost.'</td>
					</tr>
					<tr><td width="310">&nbsp;</td>
						<td width="303">Return Date:</td>
					  <td>'.$customer_name.'</td>
					</tr>
					<tr><td width="310">&nbsp;</td>
						<td width="303">Return Time:</td>
					  <td>'.$cus_contact_no.'</td>
					</tr>
					  <tr><td width="310">&nbsp;</td>
						<td width="303">Meter Read:</td>
						<td>'.$subtotal.'</td>
					  </tr>
					  
					  </table>
					  </center>';
					  
	echo "<script type =\"text/javascript\">
										alert(\"print receipt\");window.open('print2.php')
											</script>";		
		
}

			else{
				
				$dynamic_table='<br><br><center><span class="error"> No Records found </span></center>';	
			}
		
		
	}
	else{
				
				$dynamic_table='<br><br><center><span class="error"> Please provide id Name </span></center>';	
		}

?>




