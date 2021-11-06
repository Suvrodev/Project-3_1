<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF File</title>
    <link rel="stylesheet" href="displaypdf.css">

    <div class="Title_top">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
      Show Your PDF</h2>
    </div>
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
            </div>
            <!-- Link_Clss End -->
        </div>

         <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Dean_modify_Activity">
                    <small>SHOW ROUTINE</small>
                </div>
          </div>

          <div class="cseroutine">
              <div class="routine">
                   Download  Routine
              </div>
              <div class="Button">
              <form action="DISPLAYPDF.php" method="POST" name="pdfform" enctype="multipart/form-data">
              <input type="submit" name="cser" id="cseb" value="CSE"> 
              <input type="submit" name="eeer" id="cseb" value="EEE">
              <input type="submit" name="civilr" id="cseb" value="Civil">

              <div class="routinephp">
              <?php

              if(isset($_POST['cser'])){
                 $con=mysqli_connect("localhost","root","","project");
                 $SQL="SELECT CSE 
                 FROM pdf
                 WHERE Number='1'";

                 $QUERY=mysqli_query($con,$SQL);
                 while($info=mysqli_fetch_array($QUERY)){
                     ?>
                   <embed type="application/pdf" src="pdf/cse/<?php echo $info['CSE']; ?>" width="300" height="300" >

                     <?php

                 }
                }

                if(isset($_POST['civilr'])){
                    $con=mysqli_connect("localhost","root","","project");
                    $SQL="SELECT CIVIL 
                    FROM pdf
                    WHERE Number='1'";
   
                    $QUERY=mysqli_query($con,$SQL);
                    while($info=mysqli_fetch_array($QUERY)){
                        ?>
                        <embed type="application/pdf" src="pdf/civil/<?php echo $info['CIVIL']; ?>" width="300" height="300" >
   
                        <?php
   
                    }
                   }


                   if(isset($_POST['eeer'])){
                    $con=mysqli_connect("localhost","root","","project");
                    $SQL="SELECT EEE 
                    FROM pdf
                    WHERE Number='1'";
   
                    $QUERY=mysqli_query($con,$SQL);
                    while($info=mysqli_fetch_array($QUERY)){
                        ?>
                      <embed type="application/pdf" src="pdf/eee/<?php echo $info['EEE']; ?>" width="300" height="300" >
   
                        <?php
   
                    }
                   }


               
                //   $conn=new mysqli("localhost","root","","project");
                //   if (!$conn) {
                //       die("Connection failed: " . mysqli_connect_error());
                //   }

                //  $SQL="SELECT CSE 
                //  FROM pdf
                //  WHERE Number='1'";

                //    if(isset($_POST['cser'])){
                //          header("Content-type: application/pdf");
                // header("Content-Disposition: attachment; filename=pdf\Fall-2021-Routine-4-Year-Tri-Semester.pdf");
                // header("Peagma: no-cache");
                // header("Expires: 0");
                // readfile("pdf\Fall-2021-Routine-4-Year-Tri-Semester.pdf");
                // exit;
                //    }         
              ?>      
              </div>
              </form>



              </div>
                



            
          </div>


     <!-- Component End -->
    </div>

    <!-- This_is_body_Class End -->
    </div>
    
</body>
</html>