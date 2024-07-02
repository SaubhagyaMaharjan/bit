<?php
include_once("connection.php");
$id=$_GET['id'];
$sql="select * from student_info where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
echo ("Teahcer information");
?>
<form>
<table>
<tr><th>First Name:</th><td><?php echo $row->firs_name;?></td>
</tr>
<tr><th>Last Name:</th><td><?php echo $row->last_name;?></td>
</tr>
<tr><th>Gender:</th><td><?php echo $row->gender;?></td>
</tr>
<tr><th>Qualification:</th><td><?php echo $row->qualification;?></td>
</tr>
<tr><th>Address:</th><td><?php echo $row->address;?></td>
</tr>
<tr><th>City:</th><td><?php echo $row->city;?></td>
</tr>
<tr><th>Phone Number:</th><td><?php echo $row->phone;?></td>
</tr>
<tr><th>E-mail:</th><td><?php echo $row->email;?></td>
</tr>
<tr><th>Teaching Subject:</th><td><?php echo $row->teaching_subject;?></td>
</tr>
</table>
</form>
