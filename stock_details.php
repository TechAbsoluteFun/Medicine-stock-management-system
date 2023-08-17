<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>stock details</title>

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
<br>
<br>

<center><font size="5" color="black">ADD STOCK DETAILS</font></center>

</div>
<center>
<br><br>
<form  actioN="stock_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br>

<tr>
   <td><h1 style="algerian"><font size="2px">BATCH NUMBER</font></h1></td>
   <td><td align="center"><input name="batch_no" type="text" style="width:150px" required="required" placeholder="batch no"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>


<tr>
   <td><h1 style="font-family:Constantia;"><font size="2px">QUANTITY</font></h2></td>
   <td><td align="center"><input name="avail_quantity" type="text" style="width:150px" required="required" placeholder=" quantity"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
   <td><h1 style="font-family:Constantia;"><font size="2px">TOTAL COST</font></h3></td>
   <td><td align="center"><input name="cost" type="text" style="width:150px" required="required" placeholder="cost"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<!--<tr>
    <td><h1 style="font-family:Constantia;"><font size="2px">SELLING PRICE</font></h3></td>
    <td><td align="center"><input name="selling_price" type="text" style="width:150px" required="required" placeholder="selling amount"/></td>
</tr>-->
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
     <td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h3></td>
     <td><td align="center"><input name="date" type="date" style="width:150px" required="required" placeholder="date"/></td>
</tr>
	 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
    <td><h1 style="font-family:Constantia;"><font size="2px">EXPIRY DATE</font></h3></td>
    <td><td align="center"><input name="expire_date" type="date" style="width:150px" required="required" placeholder="expiry date"/></td>
</tr>

<tr>
			<td><h1 style="font-family:Constantia;"><font size="2px">STOCK NAME</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="product_name" style="width:150px" required="required">
			<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select product_name from product_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['product_name']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
			</td>
		</tr>
		 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
			<td><h1 style="font-family:Constantia;"><font size="2px">SUPPLIER NAME</font></td>
			<td>
			
			<select size="1" class="input" maxlength="50" name="supplier_name" style="width:150px" required="required">
<option></option>
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select supplier_name from supplier_details";
	$result = $db->query($query);
	$num_results = $result->num_rows; 
	?>
	<?php for ($i=0; $i <$num_results; $i++) { ?></font> 
	<font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>		
	<option><font color="#008000"><?php echo  stripslashes($row['supplier_name']); ?></font></option>
	<?php 
	} 
	$result->free(); 
	$db->close(); 
	?>
			</select>
</td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
			<td></td><td><input type="reset" class="button" style="width:70px;height:30px;" value="Reset" name="reset">
			<input type="submit" class="button" style="width:70px;height:30px;" value="submit" name="submit">
			</td>
		</tr>

</table>
</form>

<?php
 if(isset($_POST['submit']))
	{
	 
        
        $batch_no = $_POST['batch_no'];
		$avail_quantity = $_POST['avail_quantity'];
		$cost =$_POST['cost'];
		$date = $_POST['date'];
		$expire_date = $_POST['expire_date'];
		$product_name = $_POST['product_name'];
		$supplier_name = $_POST['supplier_name'];
		//$tod=$_POST['tod'];
		
		/*$date1 = date_create($date);
		$date2 = date_create($expire_date);
		$tod=date_diff($date1,$date2);
		echo$tod->format("%R %a days");*/
		
		 //echo$tod->format("%d days");
		
		/*$dteStart = new DateTime($date);
		$dteEnd = new DateTime($expire_date);
		
		$td1 = $dteStart->diff($dteEnd);
		$tod=$td1->format('%d days');
		echo $tod;*/
		
	
		
		if($batch_no!=NULL)
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "medicine";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// begin the transaction
			$conn->beginTransaction();
			// our SQL statememtns
			$conn->exec("INSERT INTO stock_details(batch_no,avail_quantity,cost,date,expire_date,tod,product_name,supplier_name )
			VALUES ('$batch_no','$avail_quantity','$cost','$date','$expire_date','$tod','$product_name','$supplier_name')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"stock_details.php\")
											</script>";
	       
			}
		catch(PDOException $e)
			{
			// roll back the transaction if something failed
			$conn->rollback();
			echo "<script>alert('Oops!something wrong.')</script>". $e->getMessage();
			}
		$conn = null;
		}
		
	}
	
?>
</center>
<br><br><br>
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
		