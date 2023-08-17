<?php
//including the database connection file
include("confg.php");
 
//getting id of the data from url
$s_id = $_GET['s_id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM stock_sales WHERE s_id=$s_id");
 
//redirecting to the display page (index.php in our case)
header("Location:view_stock_sales.php");
?>