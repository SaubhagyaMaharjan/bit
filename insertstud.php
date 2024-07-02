<?php
include_once("connection.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$log=$_POST['log'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
$folder="student/";
$filename= $folder.basename($_FILES['image']['name']);
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,$filename);


	$sql="insert into student set
	Fiset_name='$fname',
	Last_name='$lname',
	Log_id='$log',
	Password='$password',
	Phone_number='$phone',
	Image='$filename'";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo "data insert";
	}
	else
	{
		echo "data not insert";
	}
}
?>