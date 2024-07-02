<?php
session_start();
$conn=mysqli_connect("localhost","root","","student_information"); 
$i=$_GET['id'];
$id=$_GET['ide'];
$sql="delete from data where id='$i'";
$result=mysqli_query($conn,$sql);
$_SESSION['error']="Data deleted successfully!";
header("location:table.php?id=$id");
?>
