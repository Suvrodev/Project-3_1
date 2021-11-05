<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insert</title>
    <link rel="stylesheet" href="admin_show.css">
    <h2 class="title_cls">Welcome to Admin Panel(Show All Students)</h2>

    <style>
table, th, td {
    border: 1px solid black;
    text-align: center;
}
</style>
</head>
<body>

<marquee width="100%" direction="left" height="25px" class="mrk">
        This Project is developed by Suvrodev Howlader. BSC in CSE Engineering,
        Northwestern University. Summer-19 Batch...
        My Phone Number is <del>+8801951912997</del> <mark>01732887474</mark>
    </marquee>

    <div class="This_is_body_Class">

        <div class="Link_Clss">
            <!-- Link Name -->
            <div class="Link_Name">
                Page
            </div>

            <!-- Link List -->
            <div class="Link_List">
                <a href="LOGIN.php" >Student Panel</a><br><br>
                 Admin Panel<br><br>
                <a href="ADMIN_INSERT.php" >Insert</a> <br> <br>
                <a href="ADMIN_MODIFY.php" >Modify</a> <br><br>
                <a href="ADMIN_DELETE.php" >Delete</a> <br><br>
                <a href="#.php" >Show Students</a> <br><br>
                <a href="DL.php" >Dean Profile</a>
            </div>
        </div>

        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Admin_show_Activity">
                    <small>This is Admin Activity</small>
                </div>

                <div class="insert_stu">
                <h3>Show All Students</h3>
                </div>
          </div>
          <div class="ShowDataForm">
          <form action="ADMIN_SHOW.php" method="POST" name="show_form" target="_self" id="idf">
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="20192011010" id="id_id" required><br>

                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" value="Reset" >
                </form>       
          </div>


         

          <!-- Here is the php code for q student -->

          <div class="show_php">
              <?php
                  if(isset($_POST['submit'])){
                    echo "Submit";
                    $Count=0;

                    $ID=$_POST['id_id'];

                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                    
                     $Select_sqll="SELECT ID, Name, Age, Sex, Department, Semester, CGPA, MeritalStatus, Religion, Phone_Number, DOB, Email, Location, Password 
                     FROM info WHERE ID='".$ID."'";
                     $result = $con->query($Select_sqll);

                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);

                     if($Found_Row>0){
                        echo "
                        <table><tr><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Department</th><th>Semester</th><th>CGPA</th>
                        <th>MeritalStatus</th><th>Religion</th><th>Phone_Number</th>
                        <th>DOB</th><th>Email</th><th>Location</th><th>Password</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["ID"]. "</td>
                            <td>" . $row["Name"]. "</td>
                            <td>" . $row["Age"]. "</td>
                            <td>" . $row["Sex"]. "</td>
                            <td>" . $row["Department"]. "</td>
                            <td>" . $row["Semester"]. "</td>
                            <td>" . $row["CGPA"]. "</td>
                            <td>" . $row["MeritalStatus"]. "</td>
                            <td>" . $row["Religion"]. "</td>
                            <td>" . $row["Phone_Number"]. "</td>
                            <td>" . $row["DOB"]. "</td>
                            <td>" . $row["Age"]. "</td>
                            <td>" . $row["Location"]. "</td>
                            <td>" . $row["Password"]. "</td>   
                            </tr>";
                        }
                        echo "</table>";
                     }else{
                         echo "<br> $ID Not Found";
                     }
                }
              ?>
          </div>

           <!-- Show All Students Data -->
           <div class="ShowDataForm_All">
          <form action="ADMIN_SHOW.php" method="POST" name="show_form_all" target="_self_all" id="idf_all">
                    <br><br><br><br>
                    <label for="fdepartment">Department :</label>
                    <select name="dep_id">
                        <option value="cse">CSE</option>
                        <option value="eee">EEE</option>
                        <option value="civil">CILIV</option>
                        <option value="bba">BBA</option>
                        <option value="english">ENGLISH</option>
                        <option value="llb">LLB</option>
                    </select> <br><br>

                    <label for="fsemester">Semester :</label>
                    <select name="semester_id">
                        <option value="1_1">1_1</option>
                        <option value="1_2">1_2</option>
                        <option value="2_1">2_1</option>
                        <option value="2_2">2_2</option>
                        <option value="2_3">2_3</option>
                        <option value="3_1">3_1</option>
                        <option value="3_2">3_2</option>
                        <option value="3_3">3_3</option>
                        <option value="4_1">4_1</option>
                        <option value="4_2">4_2</option>
                        <option value="4_3">4_3</option>
                    </select> <br><br>

                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit_ALL" id="submit_id">
                    <input type="reset" name="Reset_ALL" id="reset_id" value="Reset" >
                </form>       
          </div>

          <div class="show_php_All">
              <?php
                  if(isset($_POST['submit_ALL'])){
                    echo "Submit";
                    $Count=0;

                    $DEPARTMENT=$_POST['dep_id'];
                    $SEMESTER=$_POST['semester_id'];

                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                    
                     $Select_sqll="SELECT ID, Name, Age, Sex, Department, Semester, CGPA, MeritalStatus, Religion, Phone_Number, DOB, Email, Location, Password 
                     FROM info WHERE Department='".$DEPARTMENT."' AND Semester='".$SEMESTER."'";
                     $result = $con->query($Select_sqll);

                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);

                     if($Found_Row>0){
                        echo "
                        <table><tr><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Department</th><th>Semester</th><th>CGPA</th>
                        <th>MeritalStatus</th><th>Religion</th><th>Phone_Number</th>
                        <th>DOB</th><th>Email</th><th>Location</th><th>Password</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["ID"]. "</td>
                            <td>" . $row["Name"]. "</td>
                            <td>" . $row["Age"]. "</td>
                            <td>" . $row["Sex"]. "</td>
                            <td>" . $row["Department"]. "</td>
                            <td>" . $row["Semester"]. "</td>
                            <td>" . $row["CGPA"]. "</td>
                            <td>" . $row["MeritalStatus"]. "</td>
                            <td>" . $row["Religion"]. "</td>
                            <td>" . $row["Phone_Number"]. "</td>
                            <td>" . $row["DOB"]. "</td>
                            <td>" . $row["Age"]. "</td>
                            <td>" . $row["Location"]. "</td>
                            <td>" . $row["Password"]. "</td>   
                            </tr>";
                        }
                        echo "</table>";
                     }else{
                         echo "<br> Any ID Not Found";
                     }
                }
              ?>
          </div>
          <!-- Component Class End -->
        </div>

        <!-- <div class="Advertisement_Class">
            Advertisement_After -->
        <!-- Anvertisement class end -->
        <!-- </div> -->


        <!-- Body Class End -->
    </div>

    <!-- <div class="Footer_Class">
        <address id="footerid">
            Developed By:<br /> <abbr title="Facebook ID">
                <a href="https://facebook.com/suvrodev.1122" target="_blank" style=" text-decoration:none;border-bottom: none !important;
                cursor: default !important; text-decoration:none; color:aqua">Suvrodev Howlader</a> </abbr>
            <br> Mail to <a href="mailto:suvrodev.cse@yahoo.com" target="_blank" style="color:aqua; text-decoration:none;">Suvrodev</a>
        </address>
        <button onclick="document.location='https://twitter.com/home'">Twitter</button>
        <button onclick="document.location='https://github.com/Suvrodev'">Github</button>
    </div> -->
    
</body>
</html>