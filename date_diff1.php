<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>update new stock</title>

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
        <h2>welcome admin ! </h2>
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
<br><br><br>


<center><font size="5" color="black">UPDATE STOCKS AND SALES</font></center>

</div>
<center>
<br>
<form  actioN="update1_stock_details.php" method="post">
<table width="420" height="106"  align="center">
<br><br><br><br>

 <tr>
			<td><font color="#0000FF" size="2" face="arial">STOCK NAME</font></td>
			<td><input type="text" class="input" maxlength="10" name="product_name" value="<?php echo  $_SESSION['product_name'];?>" readonly /></td>
		</tr>
		
		
		<tr>
			<td></td><td><input type="reset" class="button" style="width:70px;height:30px;" value="Reset" name="reset">
			<input type="submit" class="button" style="width:75px;height:30px;" value="Proceed" name="submit">
			</td>
		</tr>
	</tbody></table>
	<?php
		$date = $_POST['date'];
		$expire_date = $_POST['expire_date'];
		
		$date1 = date_create($date);
		$date2 = date_create($expire_date);
		$tod=date_diff($date1,$date2);
		//echo $tod->format("%R %a days to Expire");
		$tt=$tod->format("%R %a days remaining to Expire");
		if($tt<=30)
		  echo "<br> $tt ";
		  //echo $tt;
		 else
		    echo $tt;
		   
		 //echo$tod->format("%d days");
		
		/*$dteStart = new DateTime($date);
		$dteEnd = new DateTime($expire_date);
		
		$td1 = $dteStart->diff($dteEnd);
		$tod=$td1->format('%d days');
		echo $tod;*/
	   //echo '<a href="update_stock_details.php" target="content"><center>Click here to add customer purchase information</center></a>';
?>
	
</fieldset>
</center>
</form>	
<div id="footer">

</div>
<br><br><br><br><br>
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

