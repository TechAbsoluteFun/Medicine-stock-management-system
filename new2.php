<!DOCTYPE html>
<html class=" js backgroundsize" xmlns="http://www.w3.org/1999/xhtml" lang="en-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">

<title>Medicine Stock Mangement </title>

<link rel="stylesheet" href="style/defaut.css">

<link rel="stylesheet" id="font-awesome-styles-css" href="style/style.css" type="text/css" media="all">
<link rel="stylesheet" href="style/menu.css" media="all">
<link rel="stylesheet" href="style/styles.css" media="all">

<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="script/jquery_003.js"></script>
    
  
    <script>
    $(window).load(function(){
				 $('.preloader').delay(000).fadeOut('slow');
			});
    </script> 
    
<!--END Scripts-->
    
  <!--   <script>
$(window).load(function(){
  $("button").click(function(){
    $('.new').fadeOut(1000);
      $("button").fadeOut(1000);
  });
}); -->

<style>


.button
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #0C5;

  font-size: 20px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 5em auto;
  
  position: absolute; 
  top:0; right:0; bottom:0; left:0;
  
  padding: 20px 0;
  width: 150px;
  height:20px;

  background: #0D6;
  border: 1px solid #0D6;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button:hover, .button:active 
{
  text-decoration: none;
  color: #0C5;
  border-color: #0C5;
  background: #FFF;
}

.button span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button span:after 
{
  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button:hover span, .button:active span 
{
  padding-right: 30px;
}

.button:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: #0C5;
  right: 0;
  top: 50%;
}

  
  .new2 [title], .new [title],.new3 [title]{
	position:relative;
}
.new2 [title]:after, .new [title]:after, .new3 [title]:after{
	content:attr(title);
	color:#fff;
	background:#333;
	background:rgba(51,51,51,0.75);
	padding:5px;
	position:absolute;
	left:-9999px;
	opacity:0;
	bottom:100%;
	white-space:nowrap;
	-webkit-transition:0.25s linear opacity;
}
.new [title]:hover:after{
	left:-100px;
	opacity:1;
}
      .new2 a span, .new a span, .new3 a span{	
	
	
	
	
	
	text-align:center;
	
	z-index:10;
}
.new a , .new2 a, .new3 a{ display: inline-block;}
.new a:hover span, .new2 a:hover span,  .new3 a:hover span{ display:block; }
 body {
  background-color: #222;
  color: #ccc;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


.new2 [title]:hover:after{
	left:0px;
	opacity:0.6;
    height: 50px;
    bottom: 70px;
}
.new3 [title]:hover:after{
	left:-200px;
	opacity:1;
font-size:40px;
    height: 50px;
    bottom: 70px;
 font-family: "Nunito", sans-serif;
}


body > main {
  width: 100px;
  margin: 50px auto;
}
body main h1 {
  margin-bottom: 0.25em;
  font-size: 24px;
  font-weight: 300;
  text-shadow: 0 0 1px #ccc;
}
body b {
  font-weight: bold;
}
.notification {
  width: 300px;
  margin-bottom: 10px;
  background-color: #ccc;
}
.notification > aside {
  display: table-cell;
  width: 60px;
  background-color: rgba(0,0,0,0.267);
  color: #fff;
  font-size: 14px;
  text-align: center;
  vertical-align: middle;
}
.notification > main {
  display: table-cell;
  padding: 20px 10px;
  color: #333;
}
.notification.info {
  background-color: #48a;
}
.notification.success {
  background-color: #6a3;
}
.notification.warning {
  background-color: #ea3;
}
.notification.error {
  background-color: #e64;
}
.notification.pp {
  background-color: #ED4A96;
}


.oval-thought-border [title] {
  position:relative;
  padding:70px 30px;
  margin:1em auto 80px;
  border:10px solid #c81e2b;
  text-align:center;
  color:#333;
  background:#fff;
  /* css3 */
  /*

  -webkit-border-radius:240px 140px; // produces oval in safari 4 and chrome 4
  -webkit-border-radius:240px / 140px; // produces oval in chrome 4 (again!) but not supported in safari 4
  Not correct application of the current spec, therefore, using longhand to avoid future problems with webkit corrects this
  */
  -webkit-border-top-left-radius:240px 140px;
  -webkit-border-top-right-radius:240px 140px;
  -webkit-border-bottom-right-radius:240px 140px;
  -webkit-border-bottom-left-radius:240px 140px;
  -moz-border-radius:240px / 140px;
  border-radius:240px / 140px;
}

/* creates the larger circle */
.oval-thought-border:before {
  content:"";
  position:absolute;
  z-index:10;
  bottom:-40px;
  right:100px;
  width:50px;
  height:50px;
  border:10px solid #c81e2b;
  background:#fff;
  /* css3 */
  -webkit-border-radius:50px;
  -moz-border-radius:50px;
  border-radius:50px;
  /* reduce the damage in FF3.0 */
  display:block;
}

/* creates the smaller circle */
.oval-thought-border:after {
  content:"";
  position:absolute;
  z-index:10;
  bottom:-60px;
  right:50px;
  width:25px;
  height:25px;
  border:10px solid #c81e2b;
  background:#fff;
  /* css3 */
  -webkit-border-radius:25px;
  -moz-border-radius:25px;
  border-radius:25px;
  /* reduce the damage in FF3.0 */
  display:block;
  
}


</style>   
    
	<div style="position:fixed;right:0%;top:83%;z-index:9999;" class="new">
    
</div>
      
   
<header id="master-menu" style="top: -40px;">
	<div id="menu-nav" class="new2"><div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
	<nav id="content-nav-left" class="menu-left-menu-container" style="margin-right: 50px;"><ul id="menu-left-menu" class="item ">
<li id="menu-item-51" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51 sliding-middle-out">
<a href="product_details.php">ADD PRODUCT</a>
                </li>
	
<li id="menu-item-51" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51 sliding-middle-out">
<a href="supplier_details.php">ADD SUPPLIER</a>
                </li>
        <li id="menu-item-52" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52 sliding-middle-out">
		<a href="stock_details.php">ADD STOCK</a>
                </li>
</ul></nav>	<img id="logo-img" src="images/logo_img.png" style="transform: scale(1); display: block;">
       		<nav id="content-nav-right" class="menu-right-menu-container" style="margin-left: 50px;"><ul id="menu-right-menu" class="item">
        <li id="menu-item-58" class="sliding-middle-out">	
	              <li id="menu-item-58" class="sliding-middle-out"><a href="update2_stock.php">NEW STOCK</a><ul>
                    
                </ul></li>
<li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55  sliding-middle-out">
<a href="update_stock_details.php" style="opacity: 1;">STOCK UPDATE & SALES</a></li>

</ul></nav>	</ul></nav></div></div><!-- fin menu-nav  -->
    <div id="user-nav" style="height: 150px; opacity: 1;">
    	
    </div>
</header><section id="landing-intro">
	

    <div class="main-text"><h1><span>welcome to MEDICINE Stock Management system</span></h1></div>
			
    <div id="l-right" class="en"></div><!-- no space pour inline-block
	--><div id="l-left">
 		<div id="l-left-content">
        	<div id="soutient-container">
				<div class="new3"><a target="_blank" style="opacity: 1;">
				<img id="img-clip" src="images/green_icon.png" height="200px" width="200px"></a></div>
            </div><!-- fin soutient container --><a align=left>
 			
            
   

			
 		</div><!-- fin l-right-content -->
 	</div><!-- fin l-right -->
</section>
<body class="home blog" style="">

  <div style="position:fixed;left:88%;top:4%;z-index:9999;"><a href="logout.php" class="button">
  <span>LOGOUT</span>
</a></div> 
		
<main style="position:relative;left:28%;top:28%;z-index:99;">
<div class="notification error">
    <aside>
      <i class="fa fa-check"><img id="img-clip" src="images/file.png" height="23px" width="23px"></i>
    </aside>
    <main>
     <a href="view_supplier_details.php">VIEW SUPPLIERS</a>
    </main>
  </div> 
   <div class="notification warning">
    <aside>
      <i class="fa fa-warning"><i class="fa fa-check"><img id="img-clip" src="images/file.png" height="23px" width="23px"></i></i>
    </aside>
    <main>
     <a href="view_stock_details.php">VIEW STOCKS</a>
    </main>
  </div>
   <div class="notification warning">
    <aside>
      <i class="fa fa-warning"><i class="fa fa-check"><img id="img-clip" src="images/file.png" height="23px" width="23px"></i></i>
    </aside>
    <main>
     <a href="view_customer_details.php">VIEW CUSTOMERS</a>
    </main>
  </div>
 <div class="notification warning">
    <aside>
      <i class="fa fa-warning"><i class="fa fa-check"><img id="img-clip" src="images/file.png" height="23px" width="23px"></i></i>
    </aside>
    <main>
     <a href="view_stock_avail.php">VIEW STOCK AVAILIBILITY</a>
    </main>
  </div>
</main> 
 
      
		<link rel="stylesheet" type="text/css" href="style/default.css">
		<link rel="stylesheet" type="text/css" href="style/component.css">
		<script src="script/ga.js" async="" type="text/javascript"></script><script src="script/modernizr.js"></script>
<script src="script/pro.js" type="text/javascript" id="_adpacks_projs"></script><script async="async" src="a_002.txt"
 id="_bsaPRO_js" type="text/javascript"></script><script src="a.txt" async="" type="text/javascript"></script>
	
		<div class="container">	
			<div class="main1">

				<ul id="cbp-bislideshow" class="cbp-bislideshow">
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/108.jpg&quot;); opacity: 0;">
					<img src="images/108.jpg" alt="image01"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/109.jpg&quot;); opacity: 0;">
					<img src="images/109.jpg" alt="image02"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/110.jpg&quot;); opacity: 1;">
					<img src="images/110.jpg" alt="image03"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/77.jpg&quot;); opacity: 0;">
					<img src="images/77.jpg" alt="image04"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/88.jpg&quot;); opacity: 0;">
					<img src="images/88.jpg" alt="image05"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/99.jpg&quot;); opacity: 0;">
					<img src="images/99.jpg" alt="image06"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/101.jpg&quot;); opacity: 0;">
					<img src="images/101.jpg" alt="image07"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/102.jpg&quot;); opacity: 0;">
					<img src="images/102.jpg" alt="image08"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/103.jpg&quot;); opacity: 0;">
					<img src="images/103.jpg" alt="image09"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/104.jpg&quot;); opacity: 0;">
					<img src="images/104.jpg" alt="image10"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/105.jpg&quot;); opacity: 0;">
					<img src="images/105.jpg" alt="image11"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/106.jpg&quot;); opacity: 0;">
					<img src="images/106.jpg" alt="image12"></li>
					<li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/107.jpg&quot;); opacity: 0;">
					<img src="images/107.jpg" alt="image13"></li>
                    <li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/22.jpg&quot;); opacity: 0;">
					<img src="images/22.jpg" alt="image14"></li>
                    <li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/33.jpg&quot;); opacity: 0;">
					<img src="images/33.jpg" alt="image15"></li>
                    <li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/44.jpg&quot;); opacity: 0;">
					<img src="images/44.jpg" alt="image16"></li>
                    <li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/55.jpg&quot;); opacity: 0;">
					<img src="images/55.jpg" alt="image17"></li>
                    <li style="background-image: url(&quot;Blueprint%20%20Background%20Slideshow_files/66.jpg&quot;); opacity: 0;">
					<img src="images/66.jpg" alt="image18"></li>
                    
				</ul>
				<div id="cbp-bicontrols" class="cbp-bicontrols">
					
				</div>
			</div>
		</div>
		<script src="script/jquery_002_002.js"></script>
		
		<script src="script/jquery_002.js"></script>
		<script src="script/cbpBGSlideshow.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>



    <section id="landing-convention" style="background-position: center -200.6px;">
    <b><div align ="center" class="blue block-content twitter-feed" style="opacity: 0; transform: scale(0.5, 1);"><h2><li>It provide easy search tecnique of medicine by simply typing batch number.</li>
	<li>Maintain the record of medicine alphabetically.</li>
	<li>Provide easy technique.</li>
	
	<li>Updation of the recoers.</li></h2></b>
		
			
	
        
                
                
	</div>
    
	<div align ="center" id="intro-texte" class="block-content" style="opacity: 1; transform: scale(1, 1);">
		<div class="white-box1">
        				<p class="staring-infos1">
									</p>
			<div class="first-part">
			 	
                <h2 class="hed">This project entitled is "Medicine Stock Management" will help to make
				                the new stock stored process of medicine easier.
			                    Now a days it is difficult to keep track the status of different types of medicines
								in the present scenario in the stock house and in this 
			                     project we computerize this part of stock management process of medicine, 
								 so that it is easy to keep track the status of medicine.The "Medicine Stock Management System" is a web-based program aimed to make easier and more convenient way for the stock managing process.</h2>
           <p class="accueil">
				 </p>
			<p></p>				
			<p></p>
			</div>
		 <p></p>
		<p></p>
         <p></p>
        </div>
       	</div> 
<div id="intro-texte" class="block-content" style="opacity: 1; transform: scale(1, 1);">
		<div class="white-box1">
        				<p class="staring-infos1">
									</p>
			<div class="first-part" style="height:1%;overflow:hidden;">
                <h1 style="font-size:30px;"><span style="font-size:20px;">This project developed by</span><li>Mukunda Madhab Borah</li>
				<li>B.C.A 6th Semester</li>
				<li>Roll No:14BC013</li>
				</h1>    
                    <p class="accueil">
				
    </p></div>
	             </div>
     
			</div> 
	 <div class="graph-tip" style="display: none;"></div>
			 	<!-- fin graph titre -->
			 <!-- fin graph container -->	
<footer class="site-footer"><style>
                             .clr_cls{
							         background-color: #AFEEEE;
									 color:yellow;}</style>
<h4 align="center"><div class="clr_cls"><strong>NORTH LAKHIMPUR COLLEGE &nbsp&nbsp(Autonomous)</strong></div></h4></div>
        <ul>
          <li>
            
          </li>
          <li><b><p align="center">
          BCA 6th Semester Major project</p></b></li>
          <li><p align="center">
            2017</li></p>
          <li></li>
          <li></li>
          <li class="last"> </li>
        </ul>
	</footer>	
</section>
<!-- fin main content -->
<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="script/jquery-1.js"> </script>
<script type="text/javascript" src="script/jquery_004.js"> </script>
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery_006.js"></script>
<script type="text/javascript" src="script/jquery_005.js"></script>

<!--[if lt IE 9]>
	<script src="js/lib/html5shiv.js"></script>
<![endif]-->
<script src="script/index.js"></script>
<!--END Scripts-->

<!-- Spécifiqu
<script src="./assets/raphael.js"></script>
<script src="./assets/g.raphael.js"></script>
<script src="./assets/g.pie.js"></script>
<script src="./assets/home_graphique.js"></script>
    
</body></html>--></body></html>