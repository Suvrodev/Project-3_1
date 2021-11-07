<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insert</title>
    <link rel="stylesheet" href="admin_insert.css">

    <div class="Title_top">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
       Welcome to Admin Panel(Insertion)</h2>
    </div>
   
    <!-- <h2 class="title_cls">Welcome to Admin Panel(Insertion)</h2> -->
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
                <a href="ADMIN_SHOW.php" >Show Students</a> <br><br>
                <a href="DL.php" >Dean Profile</a>
            </div>
        </div>

        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Admin_insert_Activity">
                    <small>This is Admin Activity</small>
                </div>

                <div class="insert_stu">
                <h3>Insert Students Information</h3>
                </div>
          </div>
          <div class="insert_DataForm">

          <form action="ADMIN_INSERT.php" method="POST" name="insert_form" target="_self" id="idf" enctype="multipart/form-data">
                    <br><br><br><br>
                    <label for="fimg">Choose Picture :</label>
                    <input type="file" name="img_id"  id="id_id" > <br><br>

                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="20192011010" id="id_id" required><br><br>

                    <label for="fname">Name :</label>
                    <input type="text" name="name_id" placeholder="Suvrodev" id="name_id" required><br><br>

                    <label for="fage">Age :</label>
                    <input type="number" name="age_id"  id="age_id" required><br><br>

                    <label for="fsex">Sex :</label>
                    <input type="radio" name="sex_id"  id="sex_id_male" value="Male" required>Male
                    <input type="radio" name="sex_id"  id="sex_id_female" value="Female">Female  <br><br>

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

                    <label for="fcg">CGPA :</label>
                    <input type="number" step="0.01" name="cgpa_id"  id="cgpa_id" required><br><br>


                    <label for="fmaritalstatus">Merital Status :</label>
                    <input type="checkbox" name="merital_id"  id="Married" value="Married" >Merried
                    <input type="checkbox" name="merital_id"  id="Unmerried" value="Unmarried">Unmerried <br><br>

                
                    <label for="freligious">Religion :</label>
                    <input type="checkbox" name="religion_id"  id="Hindu" value="Hindu" >Hindu
                    <input type="checkbox" name="religion_id"  id="Muslim" value="Muslim" >Muslim
                    <input type="checkbox" name="religion_id"  id="Christian" value="christian" >Christian
                    <input type="checkbox" name="religion_id"  id="Buddhist" value="Buddhist">Buddhist
                     <br><br>
                    


                    <label for="fphone">Phone Number :</label>
                    <input type="number" name="phn_id"  id="phn_id" ><br><br>

                    <label for="fdob">DOB :</label>
                    <input type="date" name="dob_id"  id="dob_id"><br><br>

                    <label for="femail">Email :</label>
                    <input type="email" name="mail_id"  id="mail_id" required><br><br>

                    <label for="flocation">Location :</label>
                    <input type="text" name="address_id"  id="location_id" required><br><br>
                    <!-- <textarea name="address_id"   id="location_id" required cols="25" rows="2"> -->
                    <!-- </textarea> -->
                   


                    <label for="fpass">Password:</label>
                    &nbsp; &nbsp;
                    <input type="password" name="password_id" id="password_id" required><br>


                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" >
                </form>
          </div>
          <!-- Component Class End -->
          <div class="insertion_php">
              <?php 
                 if(isset($_POST['submit'])){
                     echo "Submit";
                     $MERITAL_COUNT=0;
                     $RELIGION_COUNT=0;
                     $SH=0;
                     $count=0;

                     $ID=$_POST['id_id'];
                     $NAME=$_POST['name_id'];
                     $AGE=$_POST['age_id'];
                     $SEX=$_POST['sex_id'];
                     $DEPARTMENT=$_POST['dep_id'];
                     $SEMESTER=$_POST['semester_id'];
                     $CGPA=$_POST['cgpa_id'];
                    // $MERITAL=$_POST['merital_id'];
                     if(isset($_POST['merital_id'])){
                        $MERITAL=$_POST['merital_id'];
                        $MERITAL_COUNT++;
                     }
                    // $RElIGION=$_POST['religion_id'];
                     if(isset($_POST['religion_id'])){
                        $RELIGION=$_POST['religion_id'];
                        $RELIGION_COUNT++;
                     }
                     $PHONE=$_POST['phn_id'];
                     $DOB=$_POST['dob_id'];
                     $MAIL=$_POST['mail_id'];
                     $LOCATION=$_POST['address_id'];
                     $PASSWORD=$_POST['password_id'];

                     /////////////Image/////////////////////
                     $IMG=$_FILES['img_id']['name'];
                     $IMG_TYPE=$_FILES['img_id']['type'];
                     $IMG_SIZE=$_FILES['img_id']['size'];
                     $IMG_LOC=$_FILES['img_id']['tmp_name'];
                     $IMG_STORE="img/std/".$IMG;
         
                     move_uploaded_file($IMG_LOC,$IMG_STORE);
                     ///////////End Image///////////////////

                     if($MERITAL_COUNT==0 || $RELIGION_COUNT==0){
                         echo "Input Not Valid<br>";
                     }
                     
                     if($MERITAL_COUNT==0){
                        echo "Check Merital status<br>";
                     }
                     if($RELIGION_COUNT==0){
                         echo "Check Religion status<br>";
                     }else{
                       // echo "$ID $NAME $AGE $SEX $DEPARTMENT $SEMESTER $CGPA $MERITAL $RElIGION $PHONE $DOB
                       // $MAIL $LOCATION $PASSWORD";
                        $SH++;
                     }

                     if($SH>0){
                         $con=new mysqli("localhost","root","","project");
                         if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                          }

                        $Select_sqll="SELECT * FROM info WHERE ID='".$ID."'";
                        $Result=mysqli_query($con,$Select_sqll);
                        $Found_Row=mysqli_num_rows($Result);
                        if($Found_Row>0){
                            $count++;
                            echo "<br> ".$ID." did not added<br> ID Already exists<br>";
                        }else{
                            echo "<br> ".$ID." will be added<br>";
                        }

                        if($count==0){
                            $sql="INSERT INTO
                             `info`(`ID`, `Name`, `Age`, `Sex`, `Department`, `Semester`, `CGPA`, `MeritalStatus`, `Religion`, `Phone_Number`,
                              `DOB`, `Email`, `Location`, `Password`, `Picture`) 
                              VALUES 
                            ('".$ID."','".$NAME."','".$AGE."','".$SEX."','".$DEPARTMENT."','".$SEMESTER."','".$CGPA."','".$MERITAL."','".$RELIGION."','".$PHONE."','".$DOB."',
                             '".$MAIL."','".$LOCATION."','".$PASSWORD."','".$IMG."')";
                        //  $sql = "INSERT INTO info  VALUES ('".$ID."','".$NAME."','".$AGE."','".$SEX."','".$DEPARTMENT."','".$SEMESTER."',
                        //  '".$CGPA."','".$MERITAL."','".$RELIGION."','".$PHONE."','".$DOB."','".$MAIL."','".$LOCATION."','".$PASSWORD."')";
                         if(mysqli_query($con,$sql)){
                             echo "<br> Student Added successfully";
                         }else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                         }
                        }else{

                        }
                     }
                 }
              ?>
          </div>
        </div>

        <div class="Advertisement_Class">
            Advertisement_After
        <!-- Anvertisement class end -->
        </div>


        <!-- Body Class End -->
    </div>

    <div class="Footer_Class">
        <address id="footerid">
            Developed By:<br /> <abbr title="Facebook ID">
                <a href="https://facebook.com/suvrodev.1122" target="_blank" style=" text-decoration:none;border-bottom: none !important;
                cursor: default !important; text-decoration:none; color:aqua">Suvrodev Howlader</a> </abbr>
            <br> Mail to <a href="mailto:suvrodev.cse@yahoo.com" target="_blank" style="color:aqua; text-decoration:none;">Suvrodev</a>
        </address>
        <button onclick="document.location='https://twitter.com/home'">Twitter</button>
        <button onclick="document.location='https://github.com/Suvrodev'">Github</button>
    </div>
    
</body>
</html>