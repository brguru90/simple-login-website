<html>
<!--------------------------------------header-------------------------------------------->
<?php include("header.php"); ?>
<!--------------------------------------header-------------------------------------------->
<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
				<h1>VIEW DETAILS</h1><br />
				<p>
					<form action="display.php" method="post">
					<h3><u>Enter Register no of Student</u></h3><br />
					<input type="text" id="forminput" value="139cs13011" name="regno" />
					<input type="submit" id="formbutton" value="VIEW" name="view" /><br />
					</form>
				</p>
			</div>
<!--------------------------------------notification-------------------------------------------->
			<?php include("notification.php"); ?>
<!--------------------------------------notification-------------------------------------------->
		</div>
	</div>
</div>
<!--------------------------------------footer-------------------------------------------->
<?php include("footer.php"); ?>
<!--------------------------------------footer-------------------------------------------->
</html>