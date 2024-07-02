 
                            <h2>Student's information</h2>
                            <form action="search.php" method="post">
                <input type="text" name="roll" placeholder="Enter Roll Number" style="width: 240px;height: 35px;"><span>OR/AND<span>
                 <select name="standard" class="btn btn-info" >
                                    <option>SELET FACULTY</option>
                                    <option>DIT</option>
                                    <option>DEE</option>
                                    <option>MIT</option>
                                    <option>BCA</option>
                                    <option>BIT</option>
                                    <option>HM</option>
                                    <option>BCE</option>
                                    <option>BGE</option>
                                    <option>BCC</option>
                                    <option>Master Degree</option>
                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table border="1">
    <tr >
        <th class="text-center">ID</th>
        <th class="text-center">Fname</th>
        <th class="text-center">Lname</th>
        <th class="text-center">Father Name</th>
        <th class="text-center">Mother Name</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Course</th>
        <th class="text-center">Contact_no</th>
        <th class="text-center">DOB</th>
        <th class="text-center">City</th>
        <th class="text-center">Hobby</th>
        <th class="text-center">Primary_email</th>
        <th class="text-center">Address</th>
        <th class="text-center">Discription</th>
        <th class="text-center">Image</th>
    </tr>
<?php 
    $conn=mysqli_connect("localhost","root","","student_information");
    if (isset($_POST['show'])) {

        $Standard = $_POST['standard'];
        $RollNo = $_POST['roll'];

        $sql = "SELECT * FROM `data` WHERE `Course` = '$Standard' OR `Id`='$RollNo'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $Fname = $DataRows['Fname'];
                $Lname = $DataRows['Lname'];
                $Fathername = $DataRows['Father_name'];
                $mothername = $DataRows['Mother_name'];
                $Gender = $DataRows['Gender'];
                $DOB = $DataRows['DOB'];
                $Course = $DataRows['Course'];
                $contactno = $DataRows['Contact_no'];
                $city = $DataRows['City'];
                $hobby = $DataRows['Hobby'];
                $pemail = $DataRows['P_email'];
                $Address= $DataRows['Address'];
                $dis = $DataRows['Description'];
                $image=$DataRows['Image'];
                ?>
                <tr>
                    <td><?php echo $Id;?></td>
                    <td><?php echo $Fname;?></td>
                    <td><?php echo $Lname; ?></td>
                    <td><?php echo $Fathername; ?></td>
                    <td><?php echo $mothername; ?></td>
                    <td><?php echo $Gender; ?></td>
                    <td><?php echo $Course; ?></td>
                    <td><?php echo $contactno; ?></td>
                    <td><?php echo $DOB; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $hobby; ?></td>
                    <td><?php echo $pemail; ?></td>
                    <td><?php echo $Address; ?></td>
                    <td><?php echo $dis; ?></td>

                    <td><img src="<?php echo $image;?>" alt="img" height="50" width="50"></td>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='15' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    
</table>

