<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>stock sales</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
     
	 <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
  </head>

  <body>
    <div class="header-wrapper">
      <div class="site-name">
        <h1>WELCOME TO MEDICINE STOCK MANAGEMENT SYSTEM</h1>
        <h2>welcome admin !</h2>
      </div>
    </div>
    <div class="menu">
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index1.php">Home</a></li>
              <li><a href="supplier_details.php">ADD SUPPLIER</a></li>
              <li><a href="product_details.php">ADD PRODUCT</a></li>
			  <li><a href="stock_details.php">STOCK ENTRY</a></li>
              <li><a href="update2_stock.php">UPDATE STOCK</a></li>
              <li><a href="date_diff0.php">UPDATE SALES & TRANSACTION</a></li>
			  <li><a href="view_stock_sales.php">VIEW</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
	
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
<br><br>


<?php
 if(isset($_POST['submit']))
	{
	 
        $product_name = $_POST['product_name'];
		$add_quantity = $_POST['add_quantity'];
		$avail_quantity = $_POST['avail_quantity'];
		
	
		if($product_name!=NULL)
		{
		
		$db = mysql_connect("localhost", "root","") or die (mysql_error());
		mysql_select_db("medicine",$db);
		
		$query = "select * from stock_details where product_name='$product_name'";
		
		if($add_quantity==0)
		{
		echo'<font color="red" size="2" face="arial"><b> NOT AVAILABLE!!!</b></font>';
		
		}
		else{
		$sql_update = "UPDATE stock_details SET add_quantity=$add_quantity where product_name= '$product_name' ";
		mysql_query($sql_update,$db);		
		$avail_quantity=$avail_quantity-$add_quantity;
		$sql_update1 = "UPDATE stock_details SET avail_quantity=$avail_quantity where product_name= '$product_name' ";
		mysql_query($sql_update1,$db);
		//$sql_update = "UPDATE stock_sales SET cost=$cost where product_name= '$product_name' ";
		//mysql_query($sql_update,$db);
		//$subtotal=$add_quantity*$cost;
		//$sql_update2 = "UPDATE stock_sales SET cost=$cost where batch_no= '$batch_no' ";
		//mysql_query($sql_update2,$db);
		
		echo '<a href="stock_sales.php" target="content"><center>Click here to add customer purchase information</center></a>';
		}
		}
	} 
?>

<br><br><br><br><br><br><br><br><br><br><br>
<div class="copy-rights">
      <div class="container">
        <div class="row">
          
            <div class="col-md-6">
              Project Designed by:Mukunda Madhab Borah AND
			  Guided by: Mrs. Rupashree Bhuyan</a>
            </div>
            <div class="col-md-6">
              A Major Project of: <a>BCA 6th semester</a> / <a>North lakhimpur College(autonomous)</a>
            </div>
            
          </div>
        </div>
      </div>
      </div>

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</body>
</html>
