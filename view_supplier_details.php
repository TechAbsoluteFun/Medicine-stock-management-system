<?php
//including the database connection file
include_once("confg.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM supplier_details ORDER BY supp_id DESC"); // using mysqli_query instead
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

<form name="myForm" method="post" action="supplier_details.php" onsubmit="return validateForm();">
<center>
<fieldset>
  <center><b>LIST  OF  SUPPLIERS</b></center>


	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from supplier_details";
	$result = $db->query($query);	
	$num_results = $result->num_rows;

	?>
	<CENTER><font color="red" size="2" face="arial"><b><?php echo "TOTAL: ".$num_results.""; ?></b></font></CENTER><br/><br/>
	<font size="2" face="arial" color="BLACK"><b><?php //echo "AVAILABLE GROUP: ".$num_results.""; ?></b></font>
	<p>
	<table bgcolor="#F0F0FA" border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
	<tr bgcolor="WHITE" height="35px">
		 <input name="table" type="hidden" value="supplier_details">
	 <input name="return" type="hidden" value="view_supplier_details.php">

      <table width="700" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#0099FF"><div align="center"><strong><span class="style1">VIEW SUPPLIER DETAILS </span></strong></div></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="center"><table width="100%"  border="" cellspacing="" cellpadding="">

          <tr>
            <td width="100"><strong>ID </strong></td>
            <td width="100"><strong>Supplier Name </strong></td>
            <td width="100"><strong>Supplier Address</strong></td>
            <td width="100"><strong>Supplier Contact1 </strong></td>
            <td width="100"><strong>Supplier Contact2 </strong></td>
            <td width="100"><strong>Delete </strong></td>
			
			
			
            
             </tr>
			 </td>
          </tr>
		<?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
          while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
			echo "<td>".$res['supp_id']."</td>";
			echo "<td>".$res['supplier_name']."</td>";
            echo "<td>".$res['supplier_address']."</td>";		
            echo "<td>".$res['supplier_contact1']."</td>";
            echo "<td>".$res['supplier_contact2']."</td>";
            			
            	
            echo "<td> <a href=\"delete1.php?supp_id=$res[supp_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
		

	</table>
	</p>

<?php


?>
	</table></tbody>
</fieldset>
</center>
</form>

</body>
</html>
