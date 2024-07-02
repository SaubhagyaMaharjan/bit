<head>
	<title>Student Information System</title>
	<link rel="stylesheet" media="screen" href="style.css" >
</head>
<body>
<form class="contact_form" action="verify.php" method="post" name="contact_form">
    <ul>
        <li>
            <center> <h2>Please Login</h2></Center>
             <span class="required_notification"></span>
        </li>
        <li>
            <label for="name">User Name:</label>
            <input type="text"  placeholder="Enter Valid Name" required  name="name"/>
	    <span class="form_hint">Proper format  Raju...@..</span>
        </li>
	 <li>
            <label for="name">Password:</label>
            <input type="password"  placeholder="**********" required name="pass"/>
	    <span class="form_hint">Proper format  R..@....M...</span>
       
        <li>
        	<button class="submit" type="submit">Login</button>
        </li>
</form>
</body>
</html>
