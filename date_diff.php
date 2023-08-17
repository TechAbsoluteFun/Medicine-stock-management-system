<?php
session_start();

?>
<?php
	if(isset($_POST['submit']))
    {
	$_SESSION['product_name'] = $_POST['product_name'];
	}
	
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from stock_details where product_name='$_SESSION[product_name]' ";
	$result = $db->query($query);
	$row = $result->fetch_assoc(); 
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>date diff</title>

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

  <body onload="window.print{};">
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
<br><br>
<br>

<center><font size="5" color="black">CHECK EXPIRED MEDICINE</font></center>

</div>
<center>
<br>
<fieldset>
<form name="myForm" method="post" action="date_diff1.php" onsubmit="return validateForm();">
<table width="420" height="106"  align="center">
<br><br>

        <tr>
			<td><font color="#0000FF" size="2" face="arial">PRODUCT NAME</font></td>
			<td><input type="text" class="input" maxlength="10" name="product_name" value="<?php echo  $_SESSION['product_name'];?>" readonly /></td>
		</tr>
		
		
		<tr>
			<td><font color="#0000FF" size="2" face="arial">DATE</font></td>
			<td><input type="int" class="input" maxlength="50" onkeypress="return numericOnly(event,this)" value="<?php echo stripslashes($row['date']);?>" name="date"/></td>
		</tr>
		
		<tr>
			<td><font color="#0000FF" size="2" face="arial">EXPIRE DATE</font></td>
			<td><input type="int" class="input" maxlength="50" onkeypress="return numericOnly(event,this)" value="<?php echo stripslashes($row['expire_date']);?>" name="expire_date"/></td>
		</tr>
		
	
	    <tr>
		   <td></td><td><input type="reset" class="button" style="width:70px;height:30px;" value="Reset" name="reset">
			<input type="submit" class="button" style="width:70px;height:30px;" value="submit" name="submit">
			</td>
		</tr>
	</tbody></table>
	
</fieldset>
</form>


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
		