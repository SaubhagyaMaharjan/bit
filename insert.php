<?php
include_once("connection.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$dof=$_POST['dof'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	if($fname!="" && $lname!="" && $father!="" && $mother!="" && $dof!="" && $city!="" && $phone!="")
	{
		$sql="insert into student set
		First_Name='$fname',
		Last_Name='$lname',
		Father_Name='$father',
		Mother_Name='$mother',
		Date_of_birth='$dof',
		City='$city',
		Phone_Number='$phone'";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo"data inserted on database";
		}
		
	}
	else
	{
		echo "no value given";
	}	
}
else
{
}
?>