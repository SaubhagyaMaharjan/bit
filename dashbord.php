<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
<link rel="stylesheet" type="text/css" href="m.css">
<style type="text/css">
  .ds{
  margin-top: 1px;
    height: 400px;
  width: 78.8%;
  background-color:white;
  margin-left: 9%;
  border:solid white; 
}
  .ds li{
  height: 9%;
  width: 70%;
  border-radius: 7px;
  background-color: green;
  color: white;
  font-size: 15px;
  list-style: none;
  margin-right: 53px;
  text-align: left;
  line-height: 40px;
}
.ds a{
  text-decoration: none;
}
.ds li:hover{
  display: inline-block;
  color: green;
  background-color: white;
  font-weight: bold;
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
$row=mysqli_fetch_object($result);
$f=$row->First_name;
$l=$row->Last_name; 
echo "Welcome ".$f." ".$l;

?></div>
</div></div>
       <div class="fw">
    <div class="w">   
    <ul>
<li><a href="welcome.php?id=<?php echo $id ?>">Home</a></li>
            <li><a href="abouthi.php?id=<?php echo $id ?>">About </a></li>
            <li><a href="dashbord.php?id=<?php echo $id ?>">dashboard</a></li>
            <li><a href="my account.php?id=<?php echo $id ?>">My Account</a>
            </li>
            <li><a href="change.php?id=<?php echo $id ?>">Change Password</a>
            <li><a href="">Student Management</a>
                  <ul>
                   <li><a href="hi.php?id=<?php echo $id ?>">Add Student</a></li>
                    <li><a href="report.php?id=<?php echo $id ?>">Student Report</a></li>
                    <li><a href="table.php?id=<?php echo $id?>">Student Listing</li></a>
                </ul>
            </li>
            </li><li><a href="logout.php">Logout</a>
              <li><a href="addadmin.php?id=<?php echo $id ?>">Add Admin</a></li>
            </li>
        </li>
        </ul>
</div></div>
   <div class="S"></div>
   </div>
   <div class="S1">
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">welcome to student information system</div>
   </div>
   <div class="ds">

  <a href="welcome.php?id=<?php echo $id ?>"> <li style="padding: 3px;margin-top: 2px;">HOME</li></a>
    <a href="abouthi.php?id=<?php echo $id ?>">  <li style="padding: 3px;margin-top: 2px;">ABOUT US</li></a>
    <a href="my account.php?id=<?php echo $id ?> ">  <li style="padding: 3px;margin-top: 2px;">MY ACCOUNT</li></a>
   <a href="hi.php?id=<?php echo $id ?> ">   <li style="padding: 3px;margin-top: 2px;">ADD STUDENT</li></a>
   <a href="report.php?id=<?php echo $id ?>">   <li style="padding: 3px;margin-top: 2px;">STUDENT REPORT</li></a>
   <a href="table.php?id=<?php echo $id ?>">   <li style="padding:3px;margin-top: 2px;">STUDENT LISTING</li></a>
   <a href="addadmin.php?id=<?php echo $id ?>">   <li style="padding: 3px;margin-top: 2px;">ADD ADMIN</li></a>
   <a href="change.php?id=<?php echo $id ?>">   <li style="padding: 3px;margin-top: 2px;">CHANGE PASSWORD</li></a>
   <a href="logout.php?id=<?php echo $id ?>">   <li style="padding: 3px;margin-top: 2px;">LOGOUT</li></a>
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
