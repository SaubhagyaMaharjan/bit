<?php
session_start();
$id=$_GET['id'];
if(isset($_SESSION['hi']))
{
?>
<head>
     <style type="text/css">
     .h{
    background-image: url("img.png"); 
  background-size: cover; 
  height: 400px;
  width: 27%;
  margin-left: 61%;
  margin-top:-26%;
}
.hi{
  height: 400px;
  width: 60%;
}
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
          <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top: 7px;">About This System</div>
                  <div style=" height: 10%; color: green ; width: 40%;font-weight: bold; text-transform:uppercase;margin-top:;-7px; margin-left: 80%;">Advertisement</div>
   </div>
   <div class="d">
    <div class="hi">
       <p>
            The ultimate target of an educational institution is to enhance the performance of every student.  This can promptly be achieved by analyzing the performance of each student using competent analytic tools such as a dashboard.The information thus obtained can be deployed for taking effective as well as corrective measures to help them in performing better and realizing their potential. If not done systematically, this process may become time consuming and tedious. The  Student Information System (SIS) assists the institutions to manage every single detail about students in a holistic, organized and cost-effective way. Education ERP completely and efficiently eliminates the need of faculty members to spend a considerable amount of time in compiling student data. Thereby assisting the faculty members in channelizing their concentration on the students and their performance enhancement. Student information system (SIS) is a web based application for student, teacher and secondary authorized person who want to get and retrieve the whole information of student. The major benefit of this web portal is to store the student information at one place (like database) and it can be access through this application, perform CRUD operation and search student more efficient manner. SIS will store all the details of the student including their background information, educational qualification, personal detail and all the information related to their resume. It provide the different searching technique so, all the related student available in a few second.  
        </p>
    </div>
    <div class="s">
   </div></div>
   <div class="h"></div>
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
