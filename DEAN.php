<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dean Profile</title>
    <link rel="stylesheet" href="dean.css">

    <div class="Title_top">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
      Welcome to Dean Profile</h2>
    </div>

    <!-- <h2 class="title_cls">Welcome to Dean Profile</h2> -->
    <style>
        #submit_id_m{
            visibility: hidden;
        }

        #mtable{
            border-collapse: collapse;
            border: 2px solid black;
            width: 500px;
            background-color: violet;
            visibility: hidden;
           
        }

       #mtable th, td {
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
        background-color: #B987F7;
    }
 


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
                <a href="ADMIN_SHOW.php" >Show Students</a> <br><br>
            </div>
            <!-- Link_Clss End -->
        </div>

         <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Dean_modify_Activity">
                    <small>This is Admin Activity</small>
                </div>

                <div class="insert_stu">
                <h3>Give Message</h3>
                </div>
          </div>

          <!-- Form for Give Message -->
          <div class="d">
    <form action="DEAN.php" method="POST" name="Dean_msg_form" target="_self" id="idf">
 
                     <label for="fmessage">Message :</label>
                     <br>
                     <textarea name="msgid" cols="30" rows="5" id="msg_dean_id">
                     </textarea>
 
                     <!-- <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                     <input type="submit" name="submit" id="button" value="Send Message">
                     <input type="reset" name="Reset" id="button" value="Reset" >
                 </form> 
                 <br>
     </div>
                <div class="show_admins">
                <h3>Show All Admin</h3>
                </div>

                <div class="d_showadmins">
                <form action="DEAN.php" method="POST" name="Dean_alladmin_form" target="_self" id="idf">
                     <!-- <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                     <input type="submit" name="submit_all_admin" id="button" value="Show Admin">
                     <input type="reset" name="Reset" id="button" value="Hide" >
                 </form> 
                 <br>
     </div>

     <!-- Show All Admins Detail -->
     <div class="Show_all_admin_php">
     <?php
                  if(isset($_POST['submit_all_admin'])){
                    echo "Submit";
                    $Count=0;
                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                    
                     $Select_sqll="SELECT ID, Name, Mail,Password,Status
                     FROM admin";
                     $result = $con->query($Select_sqll);

                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);

                     if($Found_Row>0){
                        echo "
                        <table><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Status</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["ID"]. "</td>
                            <td>" . $row["Name"]. "</td>
                            <td>" . $row["Mail"]. "</td>
                            <td>" . $row["Password"]. "</td>   
                            <td>" . $row["Status"]. "</td>   
                            </tr>";
                        }
                        echo "</table>";
                     }else{
                         echo "<br> Any ID Not Found";
                     }
                }
              ?>

     </div>

     <!-- Form For Modify Admins Data -->

     <div class="ModifyAdminData">
          <form action="DEAN.php" method="POST" name="show_form" target="_self" id="idf">
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="20192011010" id="id_id" required><br>

                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit_m_admin" id="submit_id" value="Show">
                    <input type="reset" name="Reset" id="reset_id" value="Reset" >
                </form>       
          </div>

          <!-- php code for retrive Admins data for modify -->
         
          <div class="show_Admismodify_php">
              <?php
                   if(isset($_POST['submit_m_admin'])){
                    echo "Submit";
                    $Count=0;

                    $ID=$_POST['id_id'];

                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                    
                     $Select_sqll="SELECT *
                     FROM admin WHERE ID='".$ID."'";
                     $result = $con->query($Select_sqll);

                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);

                     if($Found_Row>0){
                       ?> <style>
                            #mtable{
                             visibility: visible;
                            }
                            #submit_id_m{
                           visibility: visible;
                           }
                       </style>
                        <?php
                        
                        while($row = $result->fetch_assoc()) {
                            $IDD=  $row["ID"];
                            $NAME=   $row["Name"];
                            $MAIL=  $row["Mail"];
                            $PASSWORDD=  $row["Password"] ;
                            $STATUS=  $row["Status"];
                            echo "$IDD $NAME $MAIL $PASSWORDD $STATUS ";
                        }
                     }else{
                         echo "<br> $ID Not Found";
                     }
                }
              ?>
               </div>

               <div class="Admins_own_table_forModify">

                <form action="DEAN.php" method="POST" name="login_form" target="_self">
                   
                   <table id="mtable">
                       <tr>
                           <th colspan="2">Admin Information</th>
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
                           <td>EMAIL</td>
                           <td> <input type="email" name="mail_id" id="mail_id" value= <?php echo "$MAIL";?>> </td>
                       </tr>
                       <tr>
                           <td>PASSWORD</td>
                           <td> <input type="text" name="pass_id" id="pass_id" value= <?php echo "$PASSWORDD";?>> </td>
                       </tr>

                       <tr>
                           <td>STATUS</td>
                           <td> <input type="text" name="status_id" id="status_id" value= <?php echo "$STATUS";?>> </td>
                       </tr>
                   </table>
                    <br>
                   <input type="submit" name="submit_m_adminn" id="submit_id_m" value="modify">
                </form>          
            </div>

            <div class="AdmindData_Modify_php">
                <?php
                 if(isset($_POST['submit_m_adminn']))
                 {
                     echo "<br>Clicked Modify Button";
                     $IDD=  $_POST['id_id'];
                     $NAME=  $_POST['name_id'];
                     $MAIL=  $_POST["mail_id"];
                     $PASSWORDD= $_POST['pass_id'];
                     $STATUS=  $_POST["status_id"];

                     echo "$IDD $NAME $MAIL $PASSWORDD $STATUS";

                     $con=new mysqli("localhost","root","","project");
                     if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      
                      $Modify_sql=" UPDATE admin 
                      SET Name='".$NAME."',Mail='".$MAIL."',Password='".$PASSWORDD."',Status='".$STATUS."'
                      WHERE ID='".$IDD."'";
                      if(mysqli_query($con,$Modify_sql)){
                        echo "<br> Data Modified successfully";
                    }else{
                       echo "Error: " . $sql . "<br>" . mysqli_error($con);
                   }

                 }
                ?>
                
            </div>




          <!-- php Code for Give Message -->
    
     <div class="msg_php">
         <?php
              if(isset($_POST['submit'])){
              //  echo "Submit";

                $MESSAGE=  $_POST['msgid'];
                echo "<br> $MESSAGE";

                $con=new mysqli("localhost","root","","project");
                     if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                      }

                      $Modify_sql="UPDATE `dean`
                      SET Message='".$MESSAGE."'
                      WHERE ID='admin' AND password='dean'";
                      if(mysqli_query($con,$Modify_sql)){
                        echo "<br> Data Modified successfully";
                    }else{
                       echo "Error: " . $sql . "<br>" . mysqli_error($con);
                   }

              }
         ?>
         <!-- MSG php End -->
     </div>
      
     <div class="pdf_form">
         <h2>Upload Routine For(PDF)</h2>
         <form action="DEAN.php" method="POST" name="pdfform" enctype="multipart/form-data">
          <label for="cse">CSE Department:</label><br>
          <input type="file" name="cse_id" id="id_id" ><br>
          <input type="submit" name="submit_cse" id="upload_file" value="Upload"> <br><br>

          <label for="cse">EEE Department:</label><br>
          <input type="file" name="eee_id" id="id_id" ><br>
          <input type="submit" name="submit_eee" id="upload_file" value="Upload"> <br><br>

          <label for="cse">CIVIL Department:</label><br>
          <input type="file" name="civil_id" id="id_id" ><br>
          <input type="submit" name="submit_civil" id="upload_file" value="Upload"> <br><br>

          <?php
           $con=new mysqli("localhost","root","","project");
           if (!$con) {
              die("Connection failed: " . mysqli_connect_error());
            }


          if(isset($_POST['submit_cse']))  {
              $PDF=$_FILES['cse_id']['name'];
              $PDF_TYPE=$_FILES['cse_id']['type'];
              $PDF_SIZE=$_FILES['cse_id']['size'];
              $PDF_LOC=$_FILES['cse_id']['tmp_name'];
              $PDF_STORE="pdf/cse/".$PDF;

              move_uploaded_file($PDF_LOC,$PDF_STORE);

              $con=new mysqli("localhost","root","","project");
              if (!$con) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              $SQL="UPDATE pdf SET `CSE`='$PDF'
              WHERE Number='1'";
            //  $SQL="INSERT INTO pdf(CSE) VALUES ('$PDF')";
              if(mysqli_query($con,$SQL)){
                echo "<br> PDF Added successfully";
            }else{
               echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }

          }    
          
          if(isset($_POST['submit_eee']))  {
            $PDF=$_FILES['eee_id']['name'];
            $PDF_TYPE=$_FILES['eee_id']['type'];
            $PDF_SIZE=$_FILES['eee_id']['size'];
            $PDF_LOC=$_FILES['eee_id']['tmp_name'];
            $PDF_STORE="pdf/eee/".$PDF;

            move_uploaded_file($PDF_LOC,$PDF_STORE);

            $con=new mysqli("localhost","root","","project");
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $SQL="UPDATE pdf
            SET eee = '$PDF'
            WHERE Number = '1'";
          //  $SQL="INSERT INTO pdf(CSE) VALUES ('$PDF')";
            if(mysqli_query($con,$SQL)){
              echo "<br> PDF Added successfully";
          }else{
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }

        }     

        if(isset($_POST['submit_civil']))  {
            $PDF=$_FILES['civil_id']['name'];
            $PDF_TYPE=$_FILES['civil_id']['type'];
            $PDF_SIZE=$_FILES['civil_id']['size'];
            $PDF_LOC=$_FILES['civil_id']['tmp_name'];
            $PDF_STORE="pdf/civil/".$PDF;

            move_uploaded_file($PDF_LOC,$PDF_STORE);

            $con=new mysqli("localhost","root","","project");
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $SQL="UPDATE pdf
            SET CIVIL = '$PDF'
            WHERE Number = '1'";
          //  $SQL="INSERT INTO pdf(CSE) VALUES ('$PDF')";
            if(mysqli_query($con,$SQL)){
              echo "<br> PDF Added successfully";
          }else{
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }

        }   
          

          ?>

         </form>
     </div>

     <!-- Component End -->
    </div>

    <!-- This_is_body_Class End -->
    </div>
    

    
    
</body>
</html>