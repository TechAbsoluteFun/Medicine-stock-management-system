<?php
//including the database connection file
include("confg.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM stock_details WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:view_stock_details.php");
?>