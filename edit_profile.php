<?php
session_start();
$a=$_GET['id'];
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data where id='$a'";
$result=mysqli_query($conn,$sql);
$ro=mysqli_fetch_object($result);
?>
<?php
$id=$_GET['ide'];
if(isset($_SESSION['hi']))
{
?>
<head>
<link rel="stylesheet" type="text/css" href="m.css">
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
            
            </li><li><a href="logout.php">Logout</a></li>
              <li><a href="">Student Management</a>
                   <ul>
                    <li><a href="hi.php?id=<?php echo $id ?>">Add Student</a></li>
                    <li><a href="report.php?id=<?php echo $id ?>">Student Report</a></li>
                    <li><a href="table.php?id=<?php echo $id?>">Student Listing</li></a>
                </ul>
            </li><li><a href="addadmin.php?id=<?php echo $id ?>">Add Admin</a></li>
        </ul>
</div></div>
   <div class="S"></div>
   </div>
   <div class="S1">
   <div style=" height: 10%; color: red ; width: 20%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">Edit Student</div>
   </div>
   <div class="d">
<body onLoad="javascript:document.form1.first_name.focus()" >
<form name="form1" method="post" onSubmit="return validation()" enctype="multipart/form-data" action="edit.php?id=<?php echo $id ?>">
   <center><table width="80%"cellpadding="2"  cellspacing="0" bordercolor="#CCCCCC">        
            <tr class="stylesmall">
                      <th>First Name <span class="stylered">*</span> </th> 
                              <td><input  name="first_name" type="text" value="<?php echo $ro->Fname;?>"  maxlength="50"></td>    
                                    <th>Last Name <span class="stylered">*</span> </th>  
                                            <td><input name="last_name" type="text" value="<?php echo $ro->Lname;?>"  maxlength="30"></td>  
            </tr> 
  <tr class="stylesmall">
                      <th>Father Name <span class="stylered">*</span> </th>  
                              <td><input name="father_name" value="<?php echo $ro->Father_name;?>" type="text" maxlength="50"></td>    
                                    <th>Mother Name <span class="stylered">*</span> </th>  
                                            <td><input name="mother_name" value="<?php echo $ro->Mother_name;?>" type="text" maxlength="30"></td>  
            </tr> 
           <tr class="stylesmall">
           <th>Gender<span class="stylered"> *</span></th>       
              <td><input name="gender" type="radio" value="Male" checked> Male &nbsp; &nbsp;<input name="gender" type="radio" value="Female">Female</td>
          <th>Date Of Birth <span class="stylered">*</span> </th>
<td><select name="YYY">
<script>
for(var i=2000;i<=2075;i++)
document.write("<option>"+i+"</option>");
</script></select>
YY<select name="MMM">
<option>January</option>
<option>february</option>
<option>April</option>
<option>may</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>september</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>
MM<select name="DDD"><script>
for(var i=1;i<=31;i++)
document.write("<option>"+i+"</option>");
</script></select>DD
 </td> 
           </tr>
           <tr class="stylesmall">      
            <th>Course <span class="stylered">*</span> </th>
            <td><select name="course">
            <option value="">-----select-----</option> 
            <option value="DIT">DIT</option>
             <option value="DEE">DEE</option>
              <option value="MIT">MIT</option> 
              <option value="BCA">BCA</option> 
  <option value="BIT">BIT</option> 
  <option value="HM">HM</option> 
  <option value="BCE">BCE</option> 
  <option value="BCC">BCC</option> 
  <option value="BGE">BGE</option>  
              <option value="Master Degree">Master Degree</option>
          </select></td>  
          <th>Contact No<span class="stylered"> *</span></th>
          <td><input name="contact_no" value="<?php echo $ro->Contact_no;?>" type="text" id="contact_no" maxlength="20"></td>
          </tr>
          <tr class="stylesmall">  
           <th> City<span class="stylered"> *</span></th> 
           <td><input name="city" type="text" value="<?php echo $ro->City;?>" id="city" maxlength="30"></td>
     <th> Hobby<span class="stylered"> *</span></th> 
           <td><input name="hobby" value="<?php echo $ro->Hobby;?>" type="text" maxlength="20"></td>
           </tr>
           <tr class="stylesmall">
           <th>Primary Email <span class="stylered">*</span> </th>
           <td><input name="email1" type="text" value="<?php echo $ro->P_email;?>" id="email1" maxlength="100"></td>
           <th>Secondary Email</th>
           <td><input name="email2" type="text" id="email2" value="<?php echo $ro->S_email;?>" maxlength="100"></td>
        </tr>
        <tr class="stylesmall">
        <th>Address</th>
        <td colspan="3"><textarea name="address" value="<?php echo $ro->Address;?>" cols="45" rows="2" id="address"></textarea></td>
        </tr> <tr class="stylesmall">        
         <th> Description</th>
        <td colspan="3"><textarea name="description" cols="45" rows="3" value="<?php echo $ro->Description;?>" id="description"></textarea></td>
        </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td> 
   <td>&nbsp;</td> 
    <td>&nbsp;</td>
      </tr> 
       <tr class="stylesmall">
          <th>Upload Resume </th> 
           <td colspan="3"><input name="resume" type="file" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><em><b style="color:red">.doc , .txt, .pdf file only<em></b></span></td>
           </tr> 
           <tr>
           <td colspan="4">&nbsp;</td>
           </tr> 
            <tr class="stylesmall">  <th>Upload Image </th> 
              <td colspan="3"><input type="file" name="image">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><em><b style="color:red">.jpg file and .gif file only</em></b></span></td> </tr> 
              <tr>
<td colspan="4"><b><span style="color:brown">*<em>means fields are compulsory</b></em> </span><h4>
 <script type="text/javascript">
<?php 
if(isset($_SESSION['msg']))
  {
    $a=$_SESSION['msg'];
    echo "alert('$a');";
    session_unset();
  }?></script> 
</h4></td>
              </tr> <tr>
          <td colspan="4" align="center"><input name="register" style="color:green" type="submit" id="register" value="Edit">
          <input name="reset" type="Reset" style="color:red" id="reset" value="Reset">
          </tr>
          </table></center>
           </form>
            </body>
             </html><br><br>
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
