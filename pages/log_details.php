<?php
	if(!isset($_COOKIE["user"]))
	{
		echo "<script>window.location.assign('index.php');</script>";
		header('Location: //localhost/guru/0/index.php');
	} 
	else
	{
		if($_COOKIE["user"]!="guru")
		{
			//echo "<script>window.location.assign('index.php');</script>";
			header('Location: //localhost/guru/0/index.php');
		}
	}
	
?>