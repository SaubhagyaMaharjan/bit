<?php
$a=$_POST['np'];
$b=$_POST['cp'];
$c=$_POST['li'];
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","student_information");
if($a==$b){
	$sql="update login set
    `Password`='$a' where Log_id='$c'";
$result=mysqli_query($conn,$sql);
header("location:first.php");
}
}else{
	header("location:first.php");
}
?>