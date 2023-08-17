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
        <h2>welcome admin ! Login here for enjoying our services</h2>
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
              <li><a href="index2.php">Home</a></li>
              <li><a href="view_supplier_details.php">VIEW SUPPLIER DETAILS</a></li>
              <li><a href="view_stock_details.php">VIEW STOCK DETAILS</a></li>
              <li><a href="#">VIEW SALES DETAILS</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
	
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
<br><br>
<!----- ######################################menu######################################################### -->

<form name="myForm" method="post" action="view_stock_avail.php" onsubmit="return validateForm();">
<fieldset>
  <center><b>STOCK AVAILABILITY</b></center>


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
	<CENTER><br/><br/><font color="red" size="2" face="arial"><b><?php echo "TOTAL: ".$num_results.""; ?></b></font></CENTER><br/><br/>
	<font size="2" face="arial" color="BLACK"><b><?php //echo "AVAILABLE BLOOD GROUP: ".$num_results.""; ?></b></font>
	<p>
	<table bgcolor="#F0F0FA" border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
	<tr bgcolor="WHITE" height="35px">
		 <input name="table" type="hidden" value="stock_sales">
	 <input name="return" type="hidden" value="view_stock_sales.php">

      <table width="700" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#0099FF"><div align="center"><strong><span class="style1">View stock availability </span></strong></div></td>

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
			<td width="100"><strong>View/Edit</strong></td>
            <td width="100"><strong>Delete</strong></td>
            <td width="100"><strong>Select</strong></td>
          
          </tr>
	</tr>
		<?php for ($i=0; $i <$num_results; $i++) { ?> 
	<tr height="25px">
		<td align="center"><font color="green" size="2" face="arial"> <?php $row = $result->fetch_assoc();  echo "<strong>".($i+1) ?> </font></td>		
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['id']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['product_name']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['add_quantity']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['cost']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['date']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['customer_name']); ?></font></td>
		<td width="100"> <a href="update_customer_details.php?sid=<?php echo $row['id'];?>"><img src="images/edit-icon.png" border="0" alt="delete"></a></td>
		<td width="100"><a onclick="return confirmSubmit()" href="delete.php?id=<?php echo $row['id']; ?>&table=customer_details&return=view_customer_details.php"><img src="images/delete.png" border="0" alt="delete"></a></td>
		<td width="100">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo $row['id']; ?>" name="checklist[]" /></td>
	</tr>
	<?php 
	} 
	$result->free(); 
	$db->close();
	?>
	</table>
	</p>

<?php


?>
	</table></tbody>
</fieldset>
	</form>
</center>
<br><br><br><br></br></br></br></br>
<div style="width:100% ;height:10%;clear:both;float:left"><center><font size="2" color="green">Developed By:</font>
<br><font size="3" color="green">Mukunda Madhab Borah</font>
<br><font size="3" color="green">[ Copyright © North Lakhimpur College | All Rights Reserved ]</font></center>
</div>
</body>
</html>