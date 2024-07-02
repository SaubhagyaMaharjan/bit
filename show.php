<?php
include_once("connection.php");
$id=$_GET['id'];
$sql="select * from student_info where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
?>
<form>
<table>
<tr><th>First Name:</th><td><?php echo $row->Firs_name;?></td>
</tr>
<tr><th>Last Name:</th><td><?php echo $row->last_name;?></td>
</tr>
<tr><th>Father Name:</th><td><?php echo $row->Father_name;?></td>
</tr>
<tr><th>Mother Name:</th><td><?php echo $row->mother_name;?></td>
</tr>
<tr><th>Gender:</th><td><?php echo $row->Gender;?></td>
</tr>
<tr><th>Date of birth:</th><td><?php echo $row->dof;?></td>
</tr>
<tr><th>Course:</th><td><?php echo $row->course;?></td>
</tr>
<tr><th>Contact No:</th><td><?php echo $row->contact_no;?></td>
</tr>
<tr><th>City:</th><td><?php echo $row->city;?></td>
</tr>
<tr><th>Hobby:</th><td><?php echo $row->hobby;?></td>
</tr>
<tr><th>Primary Email:</th><td><?php echo $row->primary_email;?></td>
</tr>
<tr><th>Secondary Email:</th><td><?php echo $row->secondary_email;?></td>
</tr>
<tr><th>Address:</th><td><?php echo $row->address;?></td>
</tr>
<tr><th>Description:</th><td><?php echo $row->discription;?></td>
</tr>
<tr><th>Your Profile:</th><td><?php echo $row->image;?></td>
</tr>
</table>
</form>
