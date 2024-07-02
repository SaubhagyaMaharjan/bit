<?php
session_start();
ob_start();
if(isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$country=$_POST['country'];
	$message=$_POST['subject'];
	if($fname!="" && $lname!="" && $country!="" && $message!="")
	{
		$_SESSION['mgs']="<script>alert('message send sucessfully!!!')</script>";
		header("location:contact.php");
	}
	
}
?>