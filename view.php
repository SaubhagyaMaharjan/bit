<head>
<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<?php
$a=1;
$conn=mysqli_connect("localhost","root","","student_information");
$sql="select * from data where id='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_object($result);
?>
<div class="form">
<table width="100%"><tr><td width="100%" height="80%" align="center"><table width="80%"cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
<tr bgcolor="#EEEEEE">
<td colspan="4" align="center" style="color:#0099ff">View Information</td>
</tr>        
<tr>
  <td>First Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Fname;?></td> 
  <td>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Lname;?></td>  
</tr> 
<tr>
<td>Father Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Father_name;?></td>                            
<td>Mother Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Mother_name;?> </td>   
            </tr> 
<tr>
<div class="profile"><td></td></div>
</tr>
           <tr>
           <td>Gender:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Gender;?></td>       
          <td>Date Of Birth:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->DOB;?></td>
           </tr>
           <tr>      
            <td>Course:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Course;?></td>  
          <td>Contact No:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Contact_no;?></td>
          </tr>
          <tr>  
           <td> City:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->City;?></td> 
	   <td> Hobby:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Hobby;?></td> 
           </tr>
           <tr>
           <td>Primary Email:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->P_email;?></td>
           <td>Secondary Email:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->S_email;?></td>
        </tr>
        <tr>
        <td>Address:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Address;?></td><td> ID:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->id;?></td>
        </tr> <tr>        
         <td> Description:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Description;?></td>
 
        </tr>
<td  align="center"><input type="button" name="btn1" value="Search"></td>
<td  align="center"><input type="button" name="btn2" value="close"></td>
<tr>
</tr>
  </div>  </table>