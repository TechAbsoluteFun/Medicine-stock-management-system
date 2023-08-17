<?php
 if(isset($_POST['submit']))
	{
	 
        $batch_no = $_POST['batch_no'];
		$add_quantity = $_POST['add_quantity'];
		$avail_quantity = $_POST['avail_quantity'];
		$cost = $_POST['cost'];
		$selling_price = $_POST['selling_price'];
		$date = $_POST['date'];
		$expire_date = $_POST['expire_date'];
		$product_name = $_POST['product_name'];
		$supplier_name = $_POST['supplier_name'];
		
	
		if($batch_no!=NULL)
		{
		
		$db = mysql_connect("localhost", "root","") or die (mysql_error());
		mysql_select_db("medicine",$db);
		
		$query = "select * from stock_details where batch_no='$batch_no'";
		
		if($add_quantity==0)
		{
		echo'<font color="red" size="2" face="arial"><b> NOT AVAILABLE!!!</b></font>';
		
		}
		else{
		$sql_update = "UPDATE stock_details SET add_quantity=$add_quantity where batch_no= '$batch_no' ";
		mysql_query($sql_update,$db);		
		$avail_quantity=$avail_quantity+$add_quantity;
		$sql_update1 = "UPDATE stock_details SET avail_quantity=$avail_quantity where batch_no= '$batch_no' ";
		mysql_query($sql_update1,$db);
		//$cost=$cost*$avail_quantity;
		//$sql_update2 = "UPDATE stock_details SET cost=$cost where batch_no= '$batch_no' ";
		//mysql_query($sql_update2,$db);
		
		echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"update21_stock.php\")
											</script>";
	        $conn->exec("insert into stock_avail(stock_name,quantity) values('$product_name','$stock_quantity')");
		}
		}
	} 
?>