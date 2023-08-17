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

<center><font size="5" color="black">ADD PRODUCT DETAILS</font></center>
<center>
<br>
<form  actioN="product_details.php" method="post">
<table width="420" height="106"  align="center">

<br><br>

<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">PRODUCT ID</font></h1></td>
<td><td align="center"><input name="prod_id" type="id" style="width:150px" required="required" placeholder="ID"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">PRODUCT NAME</font></h1></td>
<td><td align="center"><input name="product_name" type="text" style="width:150px" required="required" placeholder="NAME"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">COMAPNY</font></h2></td>
<td><td align="center"><input name="company" type="text" style="width:150px" required="required" placeholder="COMAPNY"/></td>
</tr>
 <tr>
    <td align="center">&nbsp;</td>
    </tr>


<tr>
<td>&nbsp;</td>
<td align="center"><button type="submit" name="submit">SUBMIT</button></td></tr>

</table>
</form>

<?php
 if(isset($_POST['submit']))
	{
        $prod_id = $_POST['prod_id'];
		$product_name = $_POST['product_name'];
		$company = $_POST['company'];
		
		if($prod_id!=NULL)
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
			$conn->exec("INSERT INTO product_details(prod_id,product_name,company )
			VALUES ('$prod_id','$product_name','$company')");
			
			// commit the transaction
			$conn->commit();
			echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
											window.location = (\"product_details.php\")
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

		