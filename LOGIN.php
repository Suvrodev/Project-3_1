<div class="Retrive_Data">
                <?php
                if(isset($_POST['submit'])){
                   // echo "Submit Button Clicked";
                    $ID=$_POST['id_id_DT'];
                    $PASSWORD=$_POST['password_id_DT'];
                   // echo "<br> ID: $ID AND Password: $PASSWORD";
                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                     $Select_sqll="SELECT ID, Name, Age, Sex, Department, Semester, CGPA, MeritalStatus, Religion, Phone_Number, DOB, Email, Location, Password 
                     FROM info WHERE ID='".$ID."' AND Password='".$PASSWORD."'";
                     $result = $con->query($Select_sqll);
                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);
                     if($Found_Row>0){
                       //  echo "<br> $ID Founded";
                       //  echo "<br>STUDENTRESULT"; 
                       $url= "STUDENTRESULT.php?userid=".$ID;
                         header('Location:'.$url);
                         exit();
                     }
                     //exit();
                }
                ?>
            </div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvrodev</title>
    <link rel="stylesheet" href="home.css">
   

    <div class="Title_top">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
        Welcome to Student Management System</h2>
    </div>
   
   
</head>

<body>

    <marquee width="100%" direction="left" height="25px" class="mrk">
        This Project is developed by Suvrodev Howlader. BSC in CSE Engineering,
        Northwestern University. Summer-19 Batch...
        My Phone Number is <del>+8801951912997</del> <mark>01732887474</mark>
    </marquee>

    <!-- This is Head Class -->
    <div class="head_class">
        <a href="http://localhost/Student_management_system/#">Home</a>

        <div class="Academic_container">
            <a href="#">Academic</a>
            <div class="Academic_content">
                <a href="DISPLAYPDF.php" target="_blank">Routine</a>
                <a href="https://drive.google.com/file/d/1VKz-_dN9DqC61DXMSiU-ZiVw-rT1LzTy/view?fbclid=IwAR2jHA3mM-7G4TYv
                _sHa43MrOkHW8M2DzsLsy5hrsGS-5Xl_ME8vNOR76hs" target="_blank">Syllebus</a>
            </div>
        </div>


        <div class="Faculty_container">
            <a href="#">Facilty</a>
            <div class="Faculty_content">
                <a href="https://www.nwu.edu.bd/cse_teacher.php" target="_blank">CSE</a>
                <a href="https://www.nwu.edu.bd/eee_teacher.php" target="_blank">EEE</a>
                <a href="https://www.nwu.edu.bd/civil_teacher.php" target="_blank">CIVIL</a>
                <a href="https://www.nwu.edu.bd/bba_teacher.php" target="_blank">BBA</a>
                <a href="https://nwu.edu.bd/english_teacher.php" target="_blank">English</a>
                <a href="https://www.nwu.edu.bd/llb_teacher.php" target="_blank">LLB</a>
            </div>
        </div>

        <a href="https://nwu.edu.bd/photo_gallery.php" target="_blank">Gallery</a>

        <div class="contactme_container">
            <a href="#">Contact Me</a>
            <div class="contactme_content">
                <a href="https://www.facebook.com/suvrodev.1122" target="_blank">Facebook</a>
                <a href="https://twitter.com/suvrodev1408" target="_blank">Twitter</a>
                <a href="mailto:suvrodev.cse@yahoo.com" target="_blank">Email</a>
            </div>

        </div>


        <a href="https://github.com/Suvrodev/Project_3_1/commits?author=Suvrodev" target="_blank">About
            Developer</a>&nbsp;&nbsp;

    </div>

    <div class="This_is_body_Class">

        <div class="Link_Clss">
            <!-- Link Name -->
            <div class="Link_Name">
                Page
            </div>

            <!-- Link List -->
            <div class="Link_List">
                <a href="#" >Student Panel</a><br><br>
                <a href="AL.php" >Admin Panel</a><br><br>
                <a href="DL.php" >Dean Profile</a>
            </div>
        </div>

        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Student_Activity">
                    <small>This is Students Activity</small>
                </div>

                <h3> Welcome Students </h3>
                Show Your Result
            </div>
           
            <!-- Here used STUDENTSRESULT because of datapassing -->
            <!-- <div class="Login_Form">

                <form action="STUDENTRESULT.php" method="POST" name="login_form" target="_self">
                   
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id_DT" placeholder="20192011010" id="id_id"> <br><br>

                    <label for="fpass">Password:</label>
                    &nbsp; &nbsp;
                    <input type="password" name="password_id_DT" id="password_id" value="123">
                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" >
                </form>

            </div> -->

             <div class="Login_Form_header">

                <form action="LOGIN.php" method="POST" name="login_form" target="_self">
                   
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id_DT"  id="id_id" value="20192011010"> <br><br>

                    <label for="fpass">Password:</label>
                    &nbsp; &nbsp;
                    <input type="password" name="password_id_DT" id="password_id" value="78876338">
                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" >
                </form>
            </div>

            <div class="Retrive_Data_">
                <?php
                if(isset($_POST['submit'])){
                    echo "Submit Button Clicked";
                    $ID=$_POST['id_id_DT'];
                    $PASSWORD=$_POST['password_id_DT'];
                    echo "<br> ID: $ID AND Password: $PASSWORD";
                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                     $Select_sqll="SELECT ID, Name, Age, Sex, Department, Semester, CGPA, MeritalStatus, Religion, Phone_Number, DOB, Email, Location, Password 
                     FROM info WHERE ID='".$ID."' AND Password='".$PASSWORD."'";
                     $result = $con->query($Select_sqll);
                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);
                     if($Found_Row>0){
                        //  echo "<br> $ID Founded";
                        //  echo "<br>STUDENTRESULT"; 
                        //  header('Location:STUDENTRESULT.php');
                     }else{
                         echo "<br> Not Found";
                     }
                }
                ?>
            </div>

         


        </div>

        <div class="Advertisement_Class">
           <div class="NationalSong">
               National Song of Bangladesh
           </div>
           <div class="song">
           <audio controls >
             <source src="NationalSong.mp3" type="audio/mpeg">
      </audio>
           </div>
           <div class="Msgofdean">
               Show Dean Sir's Message
           </div>

           <!-- Message -->
           <div class="phpcodeformsg">
            <?php 
                 $con=new mysqli("localhost","root","","project");
                 if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                  }
                  $Select_sqll="SELECT  Message
                  FROM dean
                  WHERE ID='admin'";
                   $result = $con->query($Select_sqll);

                   $Result=mysqli_query($con,$Select_sqll);
                   $Found_Row=mysqli_num_rows($Result);
                   if($Found_Row>0){
                    while($row = $result->fetch_assoc()) {
                        $MSG=  $row["Message"];
                    }
                   }
                  // echo "<br>Message: $MSG";
            ?>
        </div>

        <div class="MessageShow">
          <?php
             echo "$MSG"
          ?>

        </div>
        </div>
        
       


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