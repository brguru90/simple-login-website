<?php
$servername = "localhost";
$username = "root";
$password = "";
$flag=0;
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
$sql = "create table student_details
(
reg VARCHAR(20) PRIMARY KEY,
name VARCHAR(40) NOT NULL,
sem VARCHAR(20) NOT NULL,
branch VARCHAR(50) NOT NULL,
img VARCHAR(100) NOT NULL
);";
if ($conn->query($sql) === TRUE) {
    echo "table created successfully<br />";
}
//else{echo "Error: " . $sql . "<br>" . $conn->error;}
//-------------------------------------------------------------------------
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "<script>alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.')</script>;";
		$flag=1;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//---------------------------------------------------------------------
	if($flag==1)
	{		
$reg=$_POST["reg"];
$name=$_POST["name"];
$sem=$_POST["sem"];
$branch=$_POST["branch"];
$photo=basename( $_FILES["fileToUpload"]["name"]);	
$sql="insert into student_details values('".$reg."','".$name."','".$sem."','".$branch."','".$photo."');";
if ($conn->query($sql) === TRUE) 
{
    echo "<script>alert('your detail has been updated');history.go(-1);</script>";
}
else
{
	$sql= "UPDATE student_details SET name='".$name."',sem='".$sem."',branch='".$branch."',img='".$photo."' WHERE reg='".$reg."';";
	if ($conn->query($sql) === TRUE) {
    echo "<script>alert('your detail has been updated');history.go(-1);</script>";
	} 
	else 
	{
    echo "<script>alert('enter details incorrectly or repeated!');history.go(-1);</script>";
	}
	
}
//else {echo "Error: " . $sql . "<br>" . $conn->error;}
	}
$conn->close();
?> 