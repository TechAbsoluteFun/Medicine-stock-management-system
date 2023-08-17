<?php
//including the database connection file
include("confg.php");
 
//getting id of the data from url
$supp_id = $_GET['supp_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM supplier_details WHERE supp_id=$supp_id");
 
//redirecting to the display page (index.php in our case)
header("Location:view_supplier_details.php");
?>