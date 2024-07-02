<?php
session_start();
ob_start();
$conn=mysqli_connect("localhost","root","","student_information");
if(isset($_POST['register']))
{
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
if(isset($_POST['gender'])){
$gender=$_POST['gender'];
}
$y=$_POST['YYY'];
$i=$_GET['id'];
$D1=$_POST['DDD'];
$M1=$_POST['MMM'];
$mearge=$y."-".$D1."-".$M1;
$father=$_POST['father_name'];
$mother=$_POST['mother_name'];
$co=$_POST['course'];
$con=$_POST['contact_no'];
$city=$_POST['city'];
$h=$_POST['hobby'];
$email=$_POST['email1'];
$em2=$_POST['email2'];
$add=$_POST['address'];
$d=$_POST['description'];
$folder="student/";
$filename= $folder.basename($_FILES['resume']['name']);
$tempname=$_FILES['resume']['tmp_name'];
move_uploaded_file($tempname,$filename);

$filename1= $folder.basename($_FILES['image']['name']);
$tempname1=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname1,$filename1);

$sql="insert into data set
`Fname`='$fname',
`Lname`='$lname',
`Father_name`='$father',
`Mother_name`='$mother',
`Gender`='$gender',
`DOB`='$mearge',
`Course`='$co',
`Contact_no`='$con',
`City`='$city',
`Hobby`='$h',
`P_email`='$email',
`S_email`='$em2',
`Address`='$add',
`Description`='$d',
`Resume`='$filename',
`Image`='$filename1'";
$result=mysqli_query($conn,$sql);
$_SESSION['msg']="Data inserted successfully!!!!";
header("location:hi.php?id=$i");
}else{
header("location:hi.php?id=$i");
}
?>