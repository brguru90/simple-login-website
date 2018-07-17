<?php
		$log=$_POST["logout"];
		if($log=="logout")
		{
			if (isset($_COOKIE['user']))
			{
				unset($_COOKIE['user']);
				setcookie('user', '', time() - 3600, '/'); // empty value and old timestamp
				//echo "<script>window.location.assign('index.php');alert('logout');</script>";
				header('Location: //localhost/guru/0/index.php');
			}
		}
?>