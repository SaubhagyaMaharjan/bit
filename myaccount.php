<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="a.css">
</head>
<body>
<?php
$a=1;
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data where id='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
?>
<form>
<table  cellpadding="7" cellpadding="8"><br>
	<tr bgcolor="#EEEEEE">
<td colspan="4" align="center" style="color:blue">Your Information</td>
</tr> 
<tr><td><img src="<?php echo $row->Image;?>" height="200px" width="200px"></td>
</tr>

		<tr>
			<td><b>First Name:</b></td><td align="center"><?php echo $row->Fname;?></td>
		</tr>
		<tr>
			<td><b>Last Name:</b></td><td align="center"><?php echo $row->Lname;?></td>
		</tr>
		<tr>
			<td><b><b><b>Gender:</b></td><td align="center"><?php echo $row->Gender;?></td>
		</tr>
		<tr>
			<td><b><b>Date Of Birth:</b></td ><td align="center"><?php echo $row->DOB;?></td>
		</tr>
		<tr>
			<td><b>Course:</b></td><td align="center"><?php echo $row->Course;?></td>
		</tr>
		<tr>
			<td><b>Contact:</b></td><td align="center"><?php echo $row->Contact_no;?></td>
		</tr>
		<tr>
			<td><b>City:</b></td><td align="center"><?php echo $row->City;?></td>
		</tr>
		<tr>
			<td><b>Hobby:</b></td><td align="center"><?php echo $row->Hobby;?></td>
		</tr>
		<tr>
			<td><b>Primary Email:</b></td><td align="center"><?php echo $row->P_email;?></td>
		</tr>
		<tr>
			<td><b>Secondary Email:</b></td><td align="center"><?php echo $row->S_email;?></td>
		</tr>
		<tr>
			<td><b>Address:</b></td><td align="center"><?php echo $row->Address;?></td>
		</tr>

</table></form><br>
<a href="welcome.php"><input type="button" name="back" value="back"></a>
<input type="button" name="btn1" style="color: green;" value="Edit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" style="color: red;" name="btl2"  value="Delete">
</body>
</html>
