<?php include 'database.php';>

<?php

//create a variable
$customer_name=$_POST['customer_name'];
$customer_address= $_POST['customer_address'];
$customer_contact2= $_POST['customer_contact1'];
$customer_contact2= $_POST['customer_contact2'];

//Execute the query

mysqli_query($connect("INSERT INTO customer_details(customer_name , customer_address ,customer_contact1, customer_contact2)
			VALUES ('$customer_name','$customer_address','$customer_contact1','$customer_contact2')");
    if(mysqli_affected_rows($connect) > 0){
	echo "<p>Details Added</p>";
	echo "<a href="customer_details.php">Go Back</a>";
} else{
    echo"Details not Added<br />";
	echo mysqli_error($connect);
}