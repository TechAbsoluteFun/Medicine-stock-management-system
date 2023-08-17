<?php
//including the database connection file
include_once("confg.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM stock_sales ORDER BY s_id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Product details</title>

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
              <li><a href="view_supplier_details.php">VIEW SUPPLIER DETAILS</a></li>
              <li><a href="view_stock_details.php">VIEW STOCK DETAILS</a></li>
              <li><a href="view_stock_sales.php">VIEW SALES DETAILS</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
	
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
<br><br>
<!----- ######################################menu######################################################### -->

<form name="myForm" method="post" action="view_stock_sales.php" onsubmit="return validateForm();">
<center>
<fieldset>
  <center><b>STOCK SALES</b></center>


	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from stock_sales";
	$result = $db->query($query);	
	$num_results = $result->num_rows;

	?>
	<CENTER><font color="red" size="2" face="arial"><b><?php echo "TOTAL: ".$num_results.""; ?></b></font></CENTER><br/><br/>
	<font size="2" face="arial" color="BLACK"><b><?php //echo "AVAILABLE BLOOD GROUP: ".$num_results.""; ?></b></font>
	<p>
	<table bgcolor="#F0F0FA" border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
	<tr bgcolor="WHITE" height="35px">
		 <input name="table" type="hidden" value="stock_sales">
	 <input name="return" type="hidden" value="view_stock_sales.php">

      <table width="700" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#0099FF"><div align="center"><strong><span class="style1">View stock Sales </span></strong></div></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="center"><table width="100%"  border="" cellspacing="0" cellpadding="0">

          <tr>

		    <td width="100"><strong>BILL NO </strong></td>
            <td width="100"><strong>Product Name </strong></td>
        	<td width="100"><strong>Quantity</strong></td>
			<td width="100"><strong>Rate per Item </strong></td>
            <td width="100"><strong>Date </strong></td>
        	<td width="100"><strong>Customer name</strong></td>
			<td width="100"><strong>Total Amount</strong></td>
			<td width="100"><strong>Delete</strong></td>
            
          
          </tr>
	</tr>
		<?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
          while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
			echo "<td>".$res['s_id']."</td>";
			echo "<td>".$res['product_name']."</td>";
            echo "<td>".$res['add_quantity']."</td>";		
            echo "<td>".$res['cost']."</td>";
            echo "<td>".$res['date']."</td>";
            echo "<td>".$res['customer_name']."</td>";		
            echo "<td>".$res['subtotal']."</td>";				
            	
            echo "<td> <a href=\"delete2.php?s_id=$res[s_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
		

	</table>

	</p>

	</table></tbody>
</fieldset>
	</form>
</center>
</body>
</html>