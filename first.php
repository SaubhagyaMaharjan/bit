<?php
session_start();
if(isset($_SESSION['error1'])){
echo $_SESSION['error1'];
session_unset();
}
?>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div>
 <h4 align="center" class="hi4">Welcome to login page of System</h4></div>
    <div class="container">
        <br><br><br><br>

            <div class="col-md-4 col-md-offset-4">

                <div class="panel panel-primary">

                    <div class="panel-heading">
                     <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="validate.php" class="contact_form">
                            <fieldset>
                                <div class="form-group">
             <label for="Login Id"></label>
             <input class="form-control" placeholder="Login Id"  required name="id" type="text" autofocus autocomplete="off" value="<?php if(isset($_COOKIE['logid'])){ echo $_COOKIE['logid'];}?>">
             
                                </div>
                                <div class="form-group"><label for="Login Id"></label>
                                    <input class="form-control" placeholder="Password" required name="password" type="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>">
                                </div>
                              <input type="checkbox" value="chb" name="chb1">&nbsp;&nbsp;Remember Me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select  name="items"  style="color:green;border: dotted;"><option>Admin</option></select><br><br>
                            
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block"><br>
                        
				      <div class="message">  <?php
                 		if(isset($_SESSION['error2'])){
				echo $_SESSION['error2'];
				session_unset();
				}
				?></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br>
 <div>
 <h6 align="center" class="hi5">Copyright@ Web Based student Information System <br>
 </h6></div>