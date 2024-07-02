<center>
<head><script type="text/javascript">
</script></head>
<h1> Student Admission Billing Process</h1>
<form method="post" action="print_bill.php">
<table>
<th>id</th>
<th> Student Name</th> 
<th>Registration No</th> 
<th> Class</th> 
<th> Date</th> 
<th> Deposite by</th>
<tr><td style="padding:10px;"><label for="Id"></label> <input  type="text" name="id" placeholder="ID" required></td> 
<td style="padding:10px;"> <input type="text" name="name" placeholder="Name" required></td> 
<td><input type="number" name="reg_num" placeholder="Reg no" required></td>
<td><select name="class" required><option selected>--class--</option>
<option value="DIT">DIT</option>
<option value="DHM">DHM</option>
<option value="DGE">DGE</option>
<option value="DCE">DCE</option>
<option value="DEE">DEE</option></select></td>
<td><input type="text" name="date" value="<?php echo date('d-m-y');?>">
 <td><input type="text" name="depositer" placeholder="Depositer" required></td></tr>
 <tr bgcolor="#666666"><td colspan="5">
 <fieldset>
 <legend> particulars</legend>
 <label>New Addmission </label> <input type="checkbox" name="admission" value="admission" required>
    <label>Book </label> <input type="checkbox" name="book" value="book">
      <label>id card </label> <input type="checkbox" name="adform" value="adform">
 </fieldset></td></tr>
 <tr>
 <td colspan="5">
 <fieldset>
 <legend>Tution Fee</legend>
 <label>April</label><input type="checkbox" name="apr">
 
  <label>Jan</label><input type="checkbox" name="jan">
  
   <label>Feb</label><input type="checkbox" name="feb">
   
    <label>Mar</label><input type="checkbox" name="mar">
    
     <label>may</label><input type="checkbox" name="may"> 
     
      <label>Jun</label><input type="checkbox" name="jun">
      
       <label>July</label><input type="checkbox" name="july">
       
        <label>Aug</label><input type="checkbox" name="aug">
        
         <label>Sep</label><input type="checkbox" name="sep">
          <label>Oct</label><input type="checkbox" name="oct">
           <label>Nov</label><input type="checkbox" name="nov">
            <label>Dec</label><input type="checkbox" name="dec"></fieldset></td></tr></table><br><br>
            <input type="submit" name="submit" value="Show_bill"></form></center>