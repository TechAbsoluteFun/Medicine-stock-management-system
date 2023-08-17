<!doctype html>
<html>
<head>
<title>Admin Login</title>
 </head>
<body background= "med4.jpg" width="1000" hight="500">
<div class="navbar">

<!--<ul id="menu">
<li><a href="../index.php">Back</a></li>
</ul>
</div>-->

  <section>
  <br>
<br>  <p align="center">ADMIN  <img src="images/green_icon.png" width="80" height="80"> LOGIN</p>
  <form action="adm_login.php" method="post">
<table width="830" height="100">
<br><br><br><br><br>
 <tr align="right">
          <th width="2010"><h1 style="font-family:Cooper Black;"> <font color="green">username</font></h1></th>
          <td width="210" > <input name="username" style="width:200px" type="text" maxlength="30" required="required" class="text_box_login" placeholder="User Name"></td>
        </tr>
       <br>
        <tr align="right">
          <th width="467" ><h2 style="font-family:Cooper Black;"><font color="green">password</font></h2></th>
          <td><input name="password" style="width:200px" type="password" maxlength="10" required="required" class="text_box_login" placeholder="Password"></td>
        </tr>
		
		
<tr>
    <td>&nbsp;</td>

    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="login">LOGIN</button></td>
</tr>

</table></form>


</body>
</html>

<?php
include('dbconn.php');
if (isset($_POST['login'])){
	session_start();
	    $username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select * from users where username='$username' AND password='$password'";
		$result = mysql_query($query)or die(mysql_error());
		$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
				if( $num_row > 0 ) {
				header('location:index1.php');
				$_SESSION['id']=$row['username'];
									}
		else {?>
		<?php
		   echo "<script>alert('User name or Password is incorrect')</script>";
								}}
								?>-