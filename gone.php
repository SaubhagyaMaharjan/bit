<?php
session_start();
$i=$_GET['id'];
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","student_information");
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['id'];
$d=$_POST['pwd'];
$$folder="student/";
$filename= $folder.basename($_FILES['filetoupload']['name']);
$tempname=$_FILES['filetoupload']['tmp_name'];
move_uploaded_file($tempname,$filename);
$sql="insert into login set
`First_name`='$a',
`Last_name`='$b',
`Log_id`='$c',
`Password`='$d',
`Image`='$filename'";
$result=mysqli_query($conn,$sql);
if($result){
$_SESSION['msg']="Data inserted successfully!!!!";
}else{
	$_SESSION['msg']="Data is not inserted";
}
header("location:addadmin.php?id=$i");
}else{
header("location:addadmin.php?id=$i");
}
?>