<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
     <style type="text/css">
     .h{
    background-image: url("img.png"); 
  background-size: cover; 
  height: 400px;
  width: 27%;
  margin-left: 61%;
  margin-top:-26%;
}
   </style>
<link rel="stylesheet" type="text/css" href="m.css">
   <style type="text/css">
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
            <li><a href="abouthi.php?id=<?php echo $id?>">About </a></li>
            <li><a href="dashbord.php?id=<?php echo $id?>">dashboard</a></li>
            <li><a href="my account.php?id=<?php echo $id?>">My Account</a>
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
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">change your acccount password</div>
                  <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top:;-7px; margin-left: 80%;">Advertisement</div>
   </div>
   <div class="d">
<form action="ch.php" method="post">
  <table> 
     <tr><th>Log_id:</th><td><input type="text" name="li" required=""></td></tr>
    <tr><th>New Password:</th><td><input type="text" name="np" required=""></td></tr>
    <tr><th>Confirm Password:</th><td><input type="text" name="cp" required=""></td></tr>
    <tr style="margin-left: 5px;">
      <td><input type="submit" name="submit" style="background: green;color: white; font-weight: bold;" value="Change Password"></td>
      <td><input type="reset" name="reset" style="background: black;color: white; font-weight: bold;" value="Reset"></td>
    </tr>
  </table>
  
</form>
   </div>
   <div class="h"></div>
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
