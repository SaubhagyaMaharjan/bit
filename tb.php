<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
  <style type="text/css">
    .di{

  margin-top: 0.5px;
    height: 430px;
  width: 78.8%;
  background-color:white;
  margin-left: 9%;
  border:solid white; 
}
.ho{
  height: 210px;
  width:230px;
  margin-left: 77%; 
  margin-top: -34%;
}
.ho img {
   height: 210px;
  width:230px;
  background-size: cover;
  border: 2px solid;
  border: 6px 7px;

  }
  </style>
<link rel="stylesheet" type="text/css" href="m1.css">  
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
    <?php
 $id=$_GET['i'];
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data where id='$id'";
$result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_object($result)
?>
   <div class="S1">
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;"><?php $f=$row->Fname;
$l=$row->Lname; 
echo $f." ".$l;?> Student Dtails</div>
 <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; margin-left: 77%; text-transform:uppercase;margin-top: 7px;"><?php $f=$row->Fname;
$l=$row->Lname; 
echo $f." ".$l;?> Profile Picture</div>
   </div>

   <div class="di">

   	<table border=2px>

	<tr>
		<td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Student Name
</td>
		<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php $f=$row->Fname;
$l=$row->Lname; 
echo $f." ".$l;?></td>
	</tr>
		<tr>
		    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Course
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Course ?></td>
	</tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Date Of Birth
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->DOB ?></td></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">City
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> <?php echo $row->City ?> </td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Student Email
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> <?php echo $row->P_email ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">contact No
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Contact_no?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Address
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Address ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Student Gender
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Gender ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Secondary Email
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->S_email ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Hobby
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Hobby?>
          </td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Father Name
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> <?php echo $row->Father_name ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Mother Name
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Mother_name ?></td>
  </tr>
  <tr>
        <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Description
          <td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> <?php echo $row->Description ?></td>
  </tr>
</table>


   <div class="ho">
     <img src="<?php echo $row->Image?>">
   </div>
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
