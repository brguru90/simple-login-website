
<!DOCTYPE html>
<html>
<head>
	<title>The Entrar-shadow Website form | w3layouts</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<style>
		.head {
		position: absolute;
		top:-10%;
		left:35%;
}
		.main h1 {
	padding-top: 20%;
	font-size: 20px;
	}
		</style>
		<!--webfonts-->
		
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Create account</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form action="create.php" method="post">
				<pre style="font-size:20px">Enter following details</pre>
						<h2>name :</h2>
						<input type="text" required="required" value="" name="name" /><br />
						<h2>username :</h2>
						<input type="text" required="required" value="" name="user" /><br />
						<h2>password:</h2>
						<input type="text" required="required" value="" name="pwd" /><br />
						<h2>email :</h2>
						<input type="email" required="required" value="" name="email" /><br />
						<h2>Ph no :</h2>
						<input type="text" required="required" value="" name="phno" /><br />
						<div class="submit">
						<input type="submit" onclick="myFunction()" value="SIGN IN" >
					</div>	
					
				</form>
			</div>
			<!--//End-login-form-->
			 <!-----start-copyright---->
   				
				<!-----//end-copyright---->
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>