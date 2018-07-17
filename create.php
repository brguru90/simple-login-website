<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE student";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br />";
}
$conn->close();


$dbname ="student";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "create table log_details
(
name VARCHAR(20) NOT NULL,
user VARCHAR(20) UNIQUE,
pwd VARCHAR(20) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
phno DECIMAL(12) NOT NULL
);";
if ($conn->query($sql) === TRUE) {
    echo "table created successfully<br />";
}
//else{echo "Error: " . $sql . "<br>" . $conn->error;}
$name=$_POST["name"];
$user=$_POST["user"];
$pwd=$_POST["pwd"];
$email=$_POST["email"];
$phno=$_POST["phno"];	
$sql="insert into log_details values('".$name."','".$user."','".$pwd."','".$email."','".$phno."');";
if ($conn->query($sql) === TRUE) 
{
    echo "<script>alert('your account created successfully');window.location.assign('index.php');</script>";
}
else {echo "<script>alert('enter details incorrectly or repeated!choose other username');history.go(-1);</script>";}
//else {echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
?> 