<?php
include("log_details.php");
?>
<!DOCTYPE html>
<html id="guru">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>STUDENT DETAILS</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#mycarousel').jcarousel({
		scroll: 1,
		animation: "slow",
		wrap: "both"
	});
});
</script>
		<!--webfonts-->
		
		<!--//webfonts-->
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<style>
.log{
	background:transparent;
	width:60px;
	height:10px;
	font-size:8px;
}
</style>
</head>
<body>
<div id="header-wrapper">
<form action="logout.php" method="post" class="log" style='float:right;'>
	<input type="submit" value="logout" name="logout" />
</form>
	<div id="header">
		<div id="logo">
			<h1><a href="#">GPT SORAB</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="home.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="view.php" accesskey="2" title="">view student data</a></li>
				<li><a href="update.php" accesskey="3" title="">update data</a></li>
				<li ><a href="about.php"   accesskey="5" title="">About</a></li>
			</ul>
		</div>
	</div>
	<div id="banner">
	<center>
		<div class="img-border"> 
		 <div id="slider">
      <ul id="mycarousel">
        <li>
          <div class="img-cnt"> <a href=""><img src="1.jpg" alt="" /> </a> </div>
        </li>
        <li>
          <div class="img-cnt"> <a href=""><img src="2.jpg" alt="" /> </a> </div>
        </li>
        <li>
          <div class="img-cnt"> <a href=""><img src="3.jpg" alt="" /> </a> </div>
        </li>
        <li>
          <div class="img-cnt"> <a href=""><img src="4.jpg" alt="" /> </a> </div>
        </li>
		<li>
          <div class="img-cnt"> <a href=""><img src="5.jpg" alt="" /> </a> </div>
        </li>
      </ul>
    </div>
		</div>
	</center>
	</div>
</div>