<?php
include_once("connection.php");
$sql="select * from login";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_object($result))
{
?>
<div id="courses">
<table>
	<tr>
		<td><img src="<?php echo $row->Image;?> "height=200px width=200px></td>
	</tr>
	<tr>
		<th>Fist Name:</th><td><?php echo $row->First_name;?></td>
	</tr>
	<tr>
		<th>Last Name:</th><td><?php echo $row->Last_name;?></td>
	</tr>

</table></div>
<?php
}
?>