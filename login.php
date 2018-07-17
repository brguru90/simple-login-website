<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="student";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$user=$_POST["user"];
$pwd=$_POST["pwd"];
$sql="select * from log_details where user='".$user."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        $passwd=$row["pwd"];
		if($pwd===$passwd)
		{
			//echo "<script>window.location.assign('home.php');</script>";
			$cookie_name = "user";
			$cookie_value = "guru";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			//$_SESSION['username'] = "guru";
			//include("pages/home.php");
			echo "<script>window.location.assign('pages/home.php');</script>";
			//header('Location: pages/home.php');
		}
		else
		{
			echo "<script>alert('entered password is incorrect');history.go(-1);</script>";
			
		}
    }
	} else {
   echo "<script>alert('you have entered invalid user name');history.go(-1);</script>";
}
 

$conn->close();
?> 