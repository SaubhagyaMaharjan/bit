<?php
session_start();
ob_start();
if(isset($_POST['create']))
{
	$f=$_POST['firstname'];
	$i=$_POST['Lastname'];
	$e=$_POST['email'];
	$p=$_POST['phonenumber'];
	$pass=$_POST['pwd'];
	$folder="student/";
$filename= $folder.basename($_FILES['image']['name']);
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,$filename);
    
	$conn=mysqli_connect("localhost","root","","student_information");
	      $s="select * from student";
	      $re=mysqli_query($conn,$s);
	      $r=mysqli_fetch_object($re);
	     $a=$r->Log_id;
	     if($a==$e){$_SESSION['error1']="<script>alert('Please enter unique log id')</script>";header("location:Registration.php");}
         	else{
         	 $sql="insert into student set
             `First_name`='$f',
             `Last_name`='$i',
             `Log_id`='$e',
             `Password`='$pass',
             `Phone_number`='$p',
              `Image`='$filename'";
             $result=mysqli_query($conn,$sql);
             $_SESSION['error1']="<script>alert('Data inserted sucessfully!!!!')</script>";
             header("location:Registration.php");
         }
         
}

?>