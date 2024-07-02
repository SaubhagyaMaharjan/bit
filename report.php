<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
<link rel="stylesheet" type="text/css" href="m1.css">
 <style type="text/css">
  .image{
    height: 200px;
    width:140px;
    float: left;
    border:1px solid black;
    margin:10px;
    overflow:auto;
  }
.image img{
  width: 130px;
  height: 160px;
  margin-left: 4.5px;
  margin-top: 6.5px;

}
.inside{
  height: 18px;
  width:100px;
  margin-left: 21px;
  margin-top: 6px;
  font-weight: bold;
  overflow-x: auto;
}
</style>  
</head>
<body>
  <div class="nav">
    <div class="Show">
       <h2 style="color: white;padding: 2px;">STUDENT INFORMATION SYSTEM</h2>
<div style="height: 10px;width:50%;  margin-left: 84%; color: white; margin-top: -3.7%;"> 
<?php 
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from login where id='$id'";
$result=mysqli_query($conn,$sql);
$ro=mysqli_fetch_object($result);
$f=$ro->First_name;
$l=$ro->Last_name; 
echo "Welcome ".$f." ".$l;

?></div>
</div></div>
       <div class="fw">
    <div class="w">   
      <ul>
<li><a href="welcome.php?id=<?php echo $id ?>">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">dashboard</a></li>
            <li><a href="">My Account</a>
            </li>
            <li><a href="">Change Password</a>
            <li><a href="">Student Management</a>
                  <ul>
                   <li><a href="hi.php?id=<?php echo $id ?>">Add Student</a></li>
                    <li><a href="report.php?id=<?php echo $id ?>">Student Report</a></li>
                    <li><a href="table.php?id=<?php echo $id?>">Student Listing</li></a>
                </ul>
            </li>
            </li><li><a href="logout.php">Logout</a>
              <li><a href="">Add file</a></li>
            </li>
        </li>
        </ul>
</div></div>
   <div class="S"></div>
   </div>
   <div class="S1">
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">All students</div>
   </div>
   <div class="d">
<?php
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data";
$result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_object($result))
    {
?>
<div class="image"><a href="tb.php?i=<?php echo $row->id ?>&amp id=<?php echo $id ?>"><img src="<?php echo $row->Image;?>" height="150" width="120"></a>
 <div class="inside"> <?php
  $f=$row->Fname;
  $l=$row->Lname; 
  echo $f." ".$l;
  ?></div>
</div>
<?php

}
?>
   <div class="ho"></div>
   </div>
   <div class="s2">
 <footer>
      <b><p style="color: green;text-align: right;"> &copy; 2020 web besed Student Information System</p></b>
    </footer></div>
    <?php
  }

  else{
    session_unset();
    header("location:first.php");
  }

    ?>
