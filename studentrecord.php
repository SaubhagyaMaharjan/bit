<head>
    <style type="text/css">
    .de{
    height: 5%;
    width: 70.3%;
    background-color: white;
    margin-left: 230px;
    margin-top: 6px;
}
  .d{
    height: 50%;
    width: 70.3%;
    background-color: white;
    margin-left: 230px;
    margin-top: 4px;
    overflow-y: auto;

}
.fo{
    height: 4%;
    width:25%;
    background-color: yellow;
    margin-left: 60.4%;
    margin-top: -1%;
}
</style>
    <link rel="stylesheet" type="text/css" href="madestyle.css">
    <div class="war"><h2 style="color: Red; margin-left: 38%; margin-bottom: 2%;">STUDENT INFORMTION SYSTEM<hr> </h2>
   </div>
<showcase>
</showcase>
    <div class="wrapper">
    <nav>
        <ul>
            
    <title>schoool web Template</title>
    <link rel="stylesheet" type="text/css" href="madestyle1.css"> 
</head>
<body bgcolor="green">
<li><a href="index.php">Home</a></li>
            <li><a href="studentrecord.php">All student</a></li>
            <li><a href="first.php">Login</a>

            </li>
            <li><a href="about.php">About Us</a></li>
        </ul>
</div>
<div class="de"></div>
<div class="d">
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
        <td align="center"><?php echo $row->Image;?></td>
        </tr>
        <?php
        $i++;
    }
}
?>
</table>
</center>
</div>
 <div class="fo"> <footer>
      <b><p style="color: red"> &copy; 2020 web besed Student Information System</p></b>
    </footer></div>

