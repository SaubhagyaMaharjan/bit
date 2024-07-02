<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
<link rel="stylesheet" type="text/css" href="m.css">
<style type="text/css">
.di{
  margin-top: 1px;
    height: 400px;
  width: 78.8%;
  background-color:white;
  margin-left: 9%;
  border:solid white; 
  overflow-y: auto;
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
                    <li><a href="table.php?id=<?php echo $id?>">Student Listing</li></a></li>
                </ul>
            </li>
            </li><li><a href="logout.php">Logout</a>
              <<li><a href="addadmin.php?id=<?php echo $id ?>">Add Admin</a></li>
            </li>
        </li>
        </ul>
</div></div>
   <div class="S"></div>
   </div>
   <div class="S1">
        <div style=" height: 10%; color: red ; width: 20%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">student report</div>
   </div>
   <div class="di">
    
<center>
<table border="1" class="content">
<tr><td colspan=16  align="center" style="color:green" ><b>All student Record</b></td></tr>
<tr><td colspan=16  align="center" style="color:brown" ><b><i><?php if(isset($_SESSION['error'])){echo $_SESSION['error']; session_unset();}?></b></i></td></tr>
<tr class="table_head">
<th
 align="center"><b>ID</b></td>
<td align="center"><b>Fname</b></td>
<td align="center"><b>Lname</b></td>
<td align="center"><b>Father Name</b></td>
<td align="center"><b>Mother Name</b></td>
<td align="center"><b>Gender</b></td>
<td align="center"><b>Course</b></td>
<td align="center"><b>contact_no</b></td>
<td align="center"><b>DOB</b></td>
<td align="center"><b>City</b></td>
<td align="center"><b>Hobby</b></td>
<td align="center"><b>Primary Email</b></td>
<td align="center"><b>Address</b></td>
<td align="center"><b>Description</b></td>
<td align="center"><b>Image</b></td>
<td align="center"><b>Action</b></td>
</tr>
<?php
$i=1;
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data order by id asc";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==0)
{
echo "<tr align='center'><td colspan=16 style='color:red'><b><i>No result found</b></i></td></tr>"; 
}
else
{
   while($row=mysqli_fetch_object($result))
    {
?>
        <tr class=" <?php if($i%2==0) echo "even"; else echo "odd";?>">
        <td align="center"> <?php echo $row->id;?></td>
        <td align="center"> <?php echo $row->Fname;?></td>
        <td align="center"> <?php echo $row->Lname;?></td>
        <td align="center"> <?php echo $row->Father_name;?></td>
        <td align="center"> <?php echo $row->Mother_name;?></td>
        <td align="center"> <?php echo $row->Gender;?></td>
     <td align="center"> <?php echo $row->Course;?></td>
        <td align="center"> <?php echo $row->Contact_no;?></td>
        <td align="center"> <?php echo $row->DOB;?></td>
         <td align="center"> <?php echo $row->City;?></td>
    <td align="center"> <?php echo $row->Hobby;?></td>
         <td align="center"> <?php echo $row->P_email;?></td>
    <td align="center"> <?php echo $row->Address;?></td>
    <td align="center"> <?php echo $row->Description;?></td>
        <td align="center"><img src="<?php echo $row->Image;?>" height="50" width="50"></td>
        <td align="center"><a href="edit_profile.php?id=<?php echo $row->id;?>&amp ide=<?php echo $id ?>"> Edit </a> |<a href="delete.php?id=<?php echo $row->id;?>&amp ide=<?php echo $id ?>" onClick="return confirm('Are you sure???');">Delete</a></td>
        </tr>
        <?php
        $i++;
    }
}
?>
</table>
</center>
   </div>
   <div class="s2">
 <footer>
      <b><p style="color: red;text-align: right;"> &copy; 2020 web besed Student Information System</p></b>
    </footer></div>
    <?php
  }

  else{
    session_unset();
    header("location:first.php");
  }

    ?>
