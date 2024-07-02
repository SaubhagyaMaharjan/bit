<?php
session_start();
?>
<head>
<script type="text/javascript">
 function validation()
 {
 if(document.form1.first_name.value=="")
 {   
  alert("Please enter your first name."); 
  document.form1.first_name.focus();
   return false; 
} 
if(document.form1.last_name.value=="")
 { 
  alert("Please enter your last name.");
   document.form1.last_name.focus();
return false;
} 
if(document.form1.father_name.value=="") {
   alert("Please enter your Father name."); 
  document.form1.father_name.focus();  
 return false;
 } 
 if(document.form1.mother_name.value=="") {
   alert("Please enter your Mother name.");
   document.form1.mother_name.focus();  
 return false;
 } 
 if(document.form1.course.value=="") {
   alert("Please enter your course.");
   document.form1.course.focus();  
 return false;
 } 
  
  if(document.form1.contact_no.value=="")
 { 
  alert("Please enter contact no."); 
  document.form1.contact_no.focus(); 
  return false;
 }
 if(document.form1.city.value=="") 
{   
alert("Please enter your city.");
 document.form1.city.focus();
   return false;
 }
 if(document.form1.hobby.value=="") 
{   
alert("Please enter your hobby.");
 document.form1.hobby.focus();
   return false;
 }
 if(document.form1.email1.value=="") 
{  
 alert("Please enter your primary email.");
   document.form1.email1.focus(); 
  return false;
 }
if(document.form1.email2.value=="") 
{  
 alert("Are you sure,you dont have secondary email.");
   document.form1.email2.focus(); 
  return false;
 }
 if(document.form1.address.value != "" && document.form1.address.value.length > 100)
{ 
alert("You can enter address upto 100 characters only.");
document.form1.address.focus(); 
return false;
} 
if(document.form1.description.value != "" && document.form1.description.value.length > 200)
{ 
alert("You can enter description upto 200 characters only."); 
document.form1.description.focus(); 
return false;
 }

   
} </script>
</head>
<body onLoad="javascript:document.form1.first_name.focus()" >
<form name="form1" method="post" onSubmit="return validation()" enctype="multipart/form-data" action="add.php">
   <table width="100%"><tr><td width="100%" height="80%" align="center"><table width="80%"cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
           <tr bgcolor="#EEEEEE">
                 <td colspan="4" align="center" style="color:#0099ff">Student Information</td>
            </tr>        
            <tr class="stylesmall">
                      <th>First Name <span class="stylered">*</span> </th> 
                              <td><input  name="first_name" type="text"  maxlength="50"></td>    
                                    <th>Last Name <span class="stylered">*</span> </th>  
                                            <td><input name="last_name" type="text" maxlength="30"></td>  
            </tr> 
  <tr class="stylesmall">
                      <th>Father Name <span class="stylered">*</span> </th>  
                              <td><input name="father_name" type="text" maxlength="50"></td>    
                                    <th>Mother Name <span class="stylered">*</span> </th>  
                                            <td><input name="mother_name" type="text" maxlength="30"></td>  
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
          <td><input name="contact_no" type="text" id="contact_no" maxlength="20"></td>
          </tr>
          <tr class="stylesmall">  
           <th> City<span class="stylered"> *</span></th> 
           <td><input name="city" type="text" id="city" maxlength="30"></td>
	   <th> Hobby<span class="stylered"> *</span></th> 
           <td><input name="hobby" type="text" maxlength="20"></td>
           </tr>
           <tr class="stylesmall">
           <th>Primary Email <span class="stylered">*</span> </th>
           <td><input name="email1" type="text" id="email1" maxlength="100"></td>
           <th>Secondary Email</th>
           <td><input name="email2" type="text" id="email2" maxlength="100"></td>
        </tr>
        <tr class="stylesmall">
        <th>Address</th>
        <td colspan="3"><textarea name="address" cols="45" rows="2" id="address"></textarea></td>
        </tr> <tr class="stylesmall">        
         <th> Description</th>
        <td colspan="3"><textarea name="description" cols="45" rows="3" id="description"></textarea></td>
        </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td> 
   <td>&nbsp;</td> 
    <td>&nbsp;</td>
      </tr> <tr bgcolor="#EEEEEE">
        <td colspan="4" align="center" style="color:#0099ff"> Resume Information</td>
        </tr> <tr class="stylesmall">
          <th>Upload Resume </th> 
           <td colspan="3"><input name="resume" type="file" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><em><b style="color:red">.doc , .txt, .pdf file only<em></b></span></td>
           </tr> 
           <tr>
           <td colspan="4">&nbsp;</td>
           </tr> <tr align="center" class="stylemedium" bgcolor="#EEEEEE">
             <td colspan="4" style="color:#0099ff">Image Information</td>  </tr> <tr class="stylesmall">  <th>Upload Image </th> 
              <td colspan="3"><input type="file" name="image">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><em><b style="color:red">.jpg file and .gif file only</em></b></span></td> </tr> 
              <tr>
              <td colspan="4"><b><span style="color:brown">*<em>means fields are compulsory</b></em> </span><h4 style="color:green"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];session_unset();}?></i></h4></td>
              </tr> <tr>
          <td colspan="4" align="center"><input name="register" style="color:green" type="submit" id="register" value="Register">
          <input name="reset" type="Reset" style="color:red" id="reset" value="Reset">
          <input name="close" type="button" id="close" style="color:orange" value="Close" onClick="self.location='registrationform.php'"></td>
          </tr>
          </table>
           </form>
            </body>
             </html><br><br>