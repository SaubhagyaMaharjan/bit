<?php
session_start();
include_once("connection.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$teaching=$_POST['subject'];
		
			$sql="insert into teacher_info set
			first_name='$fname',
			last_name='$lname',
			gender='$gender',
			qualification='$qualification',
			address='$address',
			city='$city',
			phone='$phone',
			email='$email',
			teaching_subject='$teaching'";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			$_SESSION['mgs']="Data inserted!!!!";
			header("location:Teacherform.php");
		}
		else
		{
			$_SESSION['mgs']="data not inserted!!!";
			header("location:Teacherform.php");
		}
	
}
else
{
	header("location:######");
}
?>