<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insert</title>
    <div class="Title_top">
    <link rel="stylesheet" href="admin_modify.css">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
       Welcome to Admin Panel(Modification)</h2>
    </div>
    <!-- <h2 class="title_cls">Welcome to Admin Panel(Modification)</h2> -->

    <style>
        #submit_id_m{
            visibility: hidden;
        }

        table{
            border-collapse: collapse;
            border: 2px solid black;
            width: 500px;
            background-color: violet;
            visibility: hidden;
        }

        th, td {
       border: 2px solid black;
       text-align: center;
       padding: 3px;
      
       }

       th {
        column-span: all;
        background-color: darkcyan;
        color: whitesmoke;
        height: 30px;
        border: 1px solid black;
        text-align: center;   
    }
    tr:nth-child(even){
        background-color: greenyellow;
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
                <a href="#" >Modify</a> <br><br>
                <a href="ADMIN_DELETE.php" >Delete</a> <br><br>
                <a href="ADMIN_SHOW.php" >Show Students</a> <br><br>
                <a href="DL.php" >Dean Profile</a>
            </div>
        </div>

        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Admin_modify_Activity">
                    <small>This is Admin Activity</small>
                </div>

                <div class="insert_stu">
                <h3>Modify Students Information</h3>
                </div>
          </div>
          <div class="ModifyDataForm">
          <form action="ADMIN_MODIFY.php" method="POST" name="show_form" target="_self" id="idf">
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="20192011010" id="id_id" required><br>

                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" value="Reset" >
                </form>       
          </div>

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
                       ?> <style>
                            table{
                             visibility: visible;
                            }
                            #submit_id_m{
                           visibility: visible;
                           }
                       </style>
                        <?php
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $IDD=  $row["ID"];
                            $NAME=   $row["Name"];
                            $AGE=  $row["Age"];
                            $SEX=  $row["Sex"];
                            $DEPARTMENT=   $row["Department"];
                            $SEMESTER=  $row["Semester"];
                            $CGPA=  $row["CGPA"];
                            $MERITAL_STATUS=    $row["MeritalStatus"];
                            $RELIGOION=  $row["Religion"];
                             $PHN=  $row["Phone_Number"];
                            $DOB=   $row["DOB"];
                            $MAIL=  $row["Email"];
                            $LOC=  $row["Location"];
                            $PASSWORDD=  $row["Password"] ;
                            echo "$IDD $NAME  $AGE $SEX  $DEPARTMENT $SEMESTER $CGPA   $MERITAL_STATUS $RELIGOION $PHN $DOB $MAIL  $LOC $PASSWORDD";
                        }
                     }else{
                         echo "<br> $ID Not Found";
                     }
                }
              ?>
               </div>

             <div class="student_own_table">

                <form action="ADMIN_MODIFY.php" method="POST" name="login_form" target="_self">
                   <table>
                       <tr>
                           <th colspan="2">Students Information</th>
                       </tr>
                       <tr>
                           <td>ID</td>
                           <td> <input type="number" name="id_id" id="id_id" value= <?php echo "$IDD";?> > </td>
                       </tr>
                       <tr>
                           <td>NAME</td>
                           <td> <input type="text" name="name_id" id="name_id" value= <?php echo "$NAME";?> > </td>
                       </tr>
                       <tr>
                           <td>AGE</td>
                           <td> <input type="number" name="age_id" id="age_id" value= <?php echo "$AGE";?> > </td>
                       </tr>
                       <tr>
                           <td>SEX</td>
                           <td> <input type="text" name="sex_id" id="sex_id" value= <?php echo "$SEX";?> > </td>
                       </tr>
                       <tr>
                           <td>DEPARTMENT</td>
                           <td> <input type="text" name="dep_id" id="dep_id" value= <?php echo "$DEPARTMENT";?> > </td>
                       </tr>
                       <tr>
                           <td>SEMESTER</td>
                           <td> <input type="text" name="semester_id" id="semester_id" value= <?php echo "$SEMESTER";?> > </td>
                       </tr>
                       <tr>
                           <td>CGPA</td>
                           <td> <input type="number" step="0.01" name="cg_id" id="cg_id" value= <?php echo "$CGPA";?> > </td>
                       </tr>
                       <tr>
                           <td>MERITAL STATUS</td>
                           <td> <input type="text" name="mr_id" id="mr_id" value= <?php echo "$MERITAL_STATUS";?> > </td>
                       </tr>
                       <tr>
                           <td>RELIGION</td>
                           <td> <input type="text" name="rel_id" id="rel_id" value= <?php echo "$RELIGOION";?> > </td>
                       </tr>
                       <tr>
                           <td>PHONE NUMBER</td>
                           <td> <input type="number" name="phn_id" id="phn_id" value= <?php echo "$PHN";?> > </td>
                           
                       </tr>
                       <tr>
                           <td>DEATH OF BIRTH</td>
                           <td> <input type="text" name="dob_id" id="dob_id" value= <?php echo "$DOB";?> > </td>
                       </tr>
                       <tr>
                           <td>EMAIL</td>
                           <td> <input type="email" name="mail_id" id="mail_id" value= <?php echo "$MAIL";?>> </td>
                       </tr>
                       <tr>
                           <td>ADDRESS</td>
                           <td> <input type="text" name="loc_id" id="loc_id" value= <?php echo "$LOC";?>> </td>
                       </tr>
                       <tr>
                           <td>PASSWORD</td>
                           <td> <input type="text" name="pass_id" id="pass_id" value= <?php echo "$PASSWORDD";?>> </td>
                       </tr>
                   </table>
                    <br>
                   <input type="submit" name="submit_m" id="submit_id_m" value="modify">
                </form>          
            </div>

            <div class="Modify_php">
                <?php
                 if(isset($_POST['submit_m']))
                 {
                     echo "<br>Clicked Modify Button";
                     $IDD=  $_POST['id_id'];
                     $NAME=  $_POST['name_id'];
                     $AGE= $_POST['age_id'];
                     $SEX= $_POST['sex_id'];
                     $DEPARTMENT=  $_POST['dep_id'];
                     $SEMESTER= $_POST['semester_id'];
                     $CGPA=  $_POST['cg_id'];
                     $MERITAL_STATUS=   $_POST['mr_id'];
                     $RELIGOION= $_POST['rel_id'];
                     $PHN=$_POST['phn_id'];
                     $DOB=  $_POST['dob_id'];
                     $MAIL=  $_POST["mail_id"];
                     $LOC= $_POST['loc_id'];
                     $PASSWORDD= $_POST['pass_id'];

                     echo "$IDD $NAME  $AGE $SEX  $DEPARTMENT $SEMESTER $CGPA   $MERITAL_STATUS $RELIGOION $PHN $DOB $MAIL  $LOC $PASSWORDD";
                     $con=new mysqli("localhost","root","","project");
                     if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      
                      $Modify_sql=" UPDATE info 
                      SET Name='".$NAME."',Age='".$AGE."',Sex='".$SEX."',Department='".$DEPARTMENT."',Semester='".$SEMESTER."',CGPA=".$CGPA.",
                      MeritalStatus='".$MERITAL_STATUS."',Religion='".$RELIGOION."',Phone_Number='".$PHN."',DOB='".$DOB."',
                      Email='".$MAIL."',Location='".$LOC."',Password='".$PASSWORDD."'
                      WHERE ID='".$IDD."'";
                      if(mysqli_query($con,$Modify_sql)){
                        echo "<br> Data Modified successfully";
                    }else{
                       echo "Error: " . $sql . "<br>" . mysqli_error($con);
                   }

                 }
                ?>
                
            </div>
         
          <!-- Component Class End -->
        </div>

        <!-- <div class="Advertisement_Class">
            Advertisement_After
        </div> -->


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