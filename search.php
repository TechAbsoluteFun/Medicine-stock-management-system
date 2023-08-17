<html>
<head>
<title>search medicine</title>
<link rel="stylesheet" href="style.css">
<style>
<!--
body,td,th {
	color: green;
}
body {
	background-color: pink;
}
.style11 {font-size: 14px}
-->
			
</style>
</head>
<body bgcolor="#ffe4e1">
<div class="main_wrapper">
<div class="head"><center>MEDICINE STOCK MANAGEMENT SYSTEM</center></div>


<div class="navbar">
<ul id="menu">
<li><a href=new2.php>HOME</a>  </li>
			
			</ul>
			</div>
			</div>
<div id="content">
      <br>
        <tr>
		<td>
       <center> 
       <form name="search" id="search" autocomplete="off">
	   
            MEDICINE NAME : 
            <input type="text" name="customer_search" id="customer_search"  class="text_box" size="40" onKeyUp="findmatch();">
            <input class="button" type="submit" value="Search">
         </form> 
       </center> 
        
        <div id="results">			
        </div>
        <div id="final_result">
        
		<br>
        <br>
         <center>
           <tr><td><img border="0" src="images/mmm.jpg" width="1250" height="350"/></td></tr>
         </center>
        </div>
</body>
</html>