<?php
   //Connect with MYSQL
   $con = mysqli_connect('127.0.0.1','root','');
   //Select Database
    mysqli_select_db($con,'medicine');

   //UPDATE QUERY
    $sql = "UPDATE stock_details SET batch_no='$_POST[batch_no]',add_quantity='$_POST[add_quantity]',avail_quantity='$_POST[avail_quantity]',cost='$_POST[cost]',selling_price='$_POST[selling_price]',
	date='$_POST[date]',expire_date='$_POST[expire_date]',product_name='$_POST[product_name]',supplier_name='$_POST[supplier_name]' WHERE id='$_POST[id]'";
   
   //Execute the query
    if(mysqli_query($con,$sql))
      header("refresh:1; url=update1.php");
   else	
      echo "Not Update" ;  
?>