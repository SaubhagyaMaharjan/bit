
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Homepage</title>
</head>
<body>
    
    <div class="container">
        <div class="title">
            <span class="heading">Student Information System</span>
        </div>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="homepage.html">Home</a>
                </li>
                <li>
                    <a href="login.php">Admin Login</a>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">Faculties &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="">Arts</a>
                        <a href="">Science</a>
                        <a href="">Commerce</a>
                        <a href="">Technology</a>
                        <a href="">Sports</a>
                        <a href="">Others</a>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Student &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="">Admissions</a>
                        <a href="">Scholarship</a>
                        <a href="">Examination</a>
                        <a href="./login.php">Results</a>
                        <a href="">Manage Results</a>
                    </div>
                </li>
            </ul>
        </div>
      <!---<div class="slider">
            <img src="images/home3.jpg" class="slider-image" alt="img">
        </div>-->

        <div class="footer">
            <div class="footer--contact">
                <span>Contact Us</span>
                <p>+977-9849708921</p>
                <p>rajumainali1111@gmail.com</p>
            </div>
            <div class="footer--info">
                <span>Important Links</span>
                <a href="homepage.html" style="color: green">Home</a>
                <a href="login.php" style="color: green">Admin Login</a>
            </div>
        </div>

    </div>

</body>
</html>