<?php 
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<div style="background-color: #ffgg99;
width: 20%;
  margin-top: 5%;">
<form action="data.php" method="post" name="form2">
<div class="container">
	<div class="row">
		<div class="col-sm-3">
     <hr class="mb-3">
     <b>Your Name:</b> <input type="text" class="form-control" name="firstname" required placeholder="Write your Name.....">
      <b>Address:</b>
     <input type="text" class="form-control" name="Lastname" required placeholder="Your Address...">

      <label for="email"><b>Email ID:</b></label>
     <input type="text" class="form-control" name="email" required placeholder="Enter your Email...... ">
<?php if(isset($_SESSION['error'])){ echo $_SESSION['error'];session_unset();}?>
      <label for="phonenumber"><b>Phone Number:</b></label>
     <input type="text" class="form-control" name="phonenumber" required  placeholder="Enter Your phonenumber.....">

      <label for="pwd"><b>country:</b></label>
     <select class="form-control">
      <option>Nepal</option>
      <option>China</option>
      <option>India</option>
      <option>America</option>
      <option>Japan</option>
     </select>
     <b>Write Your Comment:</b>
     <textarea name="Comment" class="form-control"  placeholder="Write Something........" maxlength="800"></textarea>
     <hr class="mb-3"> 
     <input type="submit" name="create" style="color: red" class="btn btn-lg btn-primary btn-block" value="Submit">
     <input type="submit" name="create" style="color: green"  class="btn btn-lg btn-primary btn-block" value="Reset">
 </div>
 </div>
</div></form></div>
<?php if(isset($_SESSION['error1'])){ echo $_SESSION['error1'];session_unset();}?>
</body>
</html>