<html>
<head>
<body>
<center><font size="5" color="black">ADD STOCK DETAILS</font></center>

</div>
<center>
<br><br
<form method="post">
<table width="420" height="106"  align="center">
<br><br>





 
<tr>
     <td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h3></td>
     <td><td align="center"><input name="date" type="text" style="width:150px" required="required" placeholder="date"/></td>
</tr>
	 <tr>
    <td align="center">&nbsp;</td>
    </tr>
<tr>
    <td><h1 style="font-family:Constantia;"><font size="2px">EXPIRY DATE</font></h3></td>
    <td><td align="center"><input name="expire_date" type="text" style="width:150px" required="required" placeholder="expiry date"/></td>
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
	  echo "<script type = \"text/javascript\">
											alert(\"Insert Complete Successfully\");
									
											</script>";
	       
        
        echo "helllllooooo";
		echo "why.....";
		//$date = $_POST['date'];
		//$expire_date = $_POST['expire_date'];
		

         //$date1=$_POST['date'];
         //$date2=$_POST['expire_date'];


         //$diff = abs(strtotime($date2)-strtotime($date1));


         //$years=floor($diff/(360*60*60*24));
         //echo '$years';
		
         //$days = floor($diff-$years)

		
	}
		
		
?>
</body>
</html>