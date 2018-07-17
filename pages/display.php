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
$reg=$_POST["regno"];
$sql="select * from student_details where reg='".$reg."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		$regno=$row["reg"];
		$name=$row["name"];
		$sem=$row["sem"];
		$branch=$row["branch"];
		$img=$row["img"];
		include('header.php');
		echo '<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			';
			//------------------------------------>
			include('notification.php');
			//------------------------------------->
		echo
		"
		<style>
		th,td{text-align:center;font-size:20px;height:45px;background:AntiqueWhite}
			th{padding-left:20px;padding-right:20px;}
			tr{border-radius:10px;border:solid 3px silver;height:50px;}
			table{background:lime;width:800px;height:100px;}
			tr,th,td[padding-right:200px}
			#forminput{height:40px;margin:0px 40px 0px 10px;border:solid 1px silver;border-radius:10px;background:aqua;padding:0px 0px 0px 0px;}
			.formbutton2{height:40px;width:80px;border-radius:10px;}
		</style>
		<h1><u>student details is</u></h1><br />
		<table>
			<tr>
			<td><img src='uploads/$img' alt='img' width=200px /></td>
			</tr>
		</table><br />
		<table border='8'>
			<tr>
				<th>register no</th>
				<th>name</th>
				<th>sem</th>
				<th>branch</th>
			</tr>
			<tr>
				<td>$reg</td>
				<td>$name</td>
				<td>$sem</td>
				<td>$branch</td>
			</tr>
		</table><br />
	    </center>
		<input type='button' value='back' onclick='history.go(-1);' class='formbutton2' /><br />";	
		echo 
			'</div>
		</div>
	</div>';
		//------------------------------->
		include('footer.php');
	}
}
else 
{
		echo "<script>alert('you have entered invalid register no');history.go(-1);</script>";
}

?>