<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
     <style type="text/css">

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
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;"><?php $f=$row->First_name;
$l=$row->Last_name; 
echo $f." ".$l; ?> details</div>
        
   </div>
   <div class="d">
            <table>
             <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Student Name
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php $f=$row->First_name;
$l=$row->Last_name; 
echo $f." ".$l; ?></td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Log_id
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Log_id;?></td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Address
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px">Naybasti-3</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">City
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px">Banepa,Kavre</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Password
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"><?php echo $row->Password;?></td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Student Gender
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px">Male</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Father name
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> Ram Hari</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Mother Nmane
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px"> Rama Mainali</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Date of birth
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:400px">2000-1-January</td>
</tr>
        <tr>
    <td style="background-color: green; text-align: center;color: white; font-weight: bold; height:30px; width:400px">Hobby
</td>
<td style=" border: 1px solid; height:30px; text-align: center; font-weight: bold; width:200px"> Football</td>
</tr>
           </table> 
    <div class="ho"> <img src="<?php echo $row->Image?>"></div>
    <div class="s">
   </div></div>
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
