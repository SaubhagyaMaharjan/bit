<?php
ob_start();
session_start();
$conn=mysqli_connect("localhost","root","","student_information");
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $password=$_POST['password'];
  $item=$_POST['items'];
  $sql="select * from login where Log_id='$id' and Password='$password'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_object($result);
  $a=$row->Log_id;
  $b=$row->Password;

  $sqll="select * from student where Log_id='$id' and Password='$password'";
  $r=mysqli_query($conn,$sqll);
  $ro=mysqli_fetch_object($r);
  $c=$ro->Log_id;
  $d=$ro->Password;

  $sqli="select * from teacher where Log_id='$id' and Password='$password'";
  $resul=mysqli_query($conn,$sqli);
  $r=mysqli_fetch_object($resul);
  $ff=$r->Log_id;
  $gg=$r->Password;

  if($id=="$a" && $password=="$b"){
  if($item=="Admin")
  {
    $sql="select * from login where Log_id='$id'";
    $result=mysqli_query($conn,$sql);
    $r=mysqli_fetch_object($result);
    $p=$r->id;
    $_SESSION['hi']="login";
    if(isset($_POST['chb1'])){
    setcookie("logid",$id,time()+60*60);
    setcookie("password",$password,time()+60*60);
    header("location:welcome.php?id=$p");
    }else
    {
     setcookie("logid",$id,time()-60*60);
    setcookie("password",$password,time()-60*60);
    $_SESSION['error2']="<i>please checked the checkbox and Reenter id and password</i>";
     header("location:first.php");
    }
}else{
$_SESSION['error2']="<i>Invalid Log_id or/and Password or/and selected option</i>";
header("location:first.php");
} 
}
else if($id=="$c" && $password=="$d")
{
  if($item=="Student")
  {
    if(isset($_POST['chb1'])){
    setcookie("logid",$id,time()+60*60);
    setcookie("password",$password,time()+60*60);
    header("location:Student.php");
    }else
    {
     setcookie("logid",$id,time()-60*60);
    setcookie("password",$password,time()-60*60);
    header("location:Student.php");
    }
}else{
$_SESSION['error2']="<i>Invalid Log_id or/and Password or/and selected option</i>";
header("location:first.php");
}
}
else if($id==$ff && $password==$gg) 
{
  if($item=="Teacher")
  {
    if(isset($_POST['chb1'])){
    setcookie("logid",$id,time()+60*60);
    setcookie("password",$password,time()+60*60);
    header("location:Teacher.php");
    }else
    {
     setcookie("logid",$id,time()-60*60);
    setcookie("password",$password,time()-60*60);
    header("location:Teacher.php");
    }
}else{
$_SESSION['error2']="<i>Invalid Log_id or/and Password or/and selected option</i>";
header("location:first.php");
}
}
else{
$_SESSION['error2']="<i>Please enter correct Record</i>";
header("location:first.php");
}
}else
{
 header("location:first.php");

}
?>