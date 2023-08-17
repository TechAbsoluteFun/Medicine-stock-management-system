<html>
<head>
<title>VIEW CUSTOMER DETAILS </title>

<!--
body,td,th {
	color: green;
}
body {
	background-color: #ffe4e1;
}
.style11 {font-size: 14px}
-->
			
</style>
</head>
<body bgcolor="#80BFFF">
<body class="home blog" style="">

   <div style="position:fixed;left:88%;top:4%;z-index:9999;"><a href="new2.php" class="button"> <button type="home" style="background-color:transparent; border-color:transparent;">
  <img src="images/home.png" hight="35"/></button>
 
</a></div>
<br>
<center><font face="Algerian" color="green" size="7">MEDICINE STOCK MANAGEMENT SYSTEM</font></center><br><br><br>
</body>

<!----- ######################################menu######################################################### -->

<form name="myForm" method="post" action="view_customer_details.php" onsubmit="return validateForm();">
<fieldset>
  <center><b>LIST  OF  CUSTOMERS</b></center>


	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from customer_details";
	$result = $db->query($query);	
	$num_results = $result->num_rows;

	?>
	<CENTER><br/><br/><font color="red" size="2" face="arial"><b><?php echo "TOTAL: ".$num_results.""; ?></b></font></CENTER><br/><br/>
	<font size="2" face="arial" color="BLACK"><b><?php //echo "AVAILABLE BLOOD GROUP: ".$num_results.""; ?></b></font>
	<p>
	<table bgcolor="#F0F0FA" border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
	<tr bgcolor="WHITE" height="35px">
		 <input name="table" type="hidden" value="customer_details">
	 <input name="return" type="hidden" value="view_customer_details.php">

      <table width="700" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#0099FF"><div align="center"><strong><span class="style1">View Customer Details </span></strong></div></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="center"><table width="100%"  border="" cellspacing="0" cellpadding="0">

          <tr>

		    <td width="100"><strong>ID </strong></td>
            <td width="100"><strong>Name </strong></td>
        	<td width="100"><strong>Address</strong></td>
            <td width="100"><strong>Contact 1 </strong></td>
			<td width="100"><strong>Contact 2 </strong></td>
			<td width="100"><strong>View/Edit</strong></td>
            <td width="100"><strong>Delete</strong></td>
            <td width="100"><strong>Select</strong></td>
          
          </tr>
	</tr>
		<?php for ($i=0; $i <$num_results; $i++) { ?> 
	<tr height="25px">
		<td align="center"><font color="green" size="2" face="arial"> <?php $row = $result->fetch_assoc();  echo "<strong>".($i+1) ?> </font></td>		
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['customer_name']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['customer_address']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['customer_contact1']); ?></font></td>
		<td align="center"><font color="brown" size="2" face="arial"><?php echo  stripslashes($row['customer_contact2']); ?></font></td>
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