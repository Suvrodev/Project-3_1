<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvrodev</title>
    <link rel="stylesheet" href="studentresult.css">

    <div class="Title_top">
    <link rel="stylesheet" href="admin_modify.css">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
     Result of Student</h2>
    </div>

    <!-- <h2 class="title_cls">Result of Student</h2> -->

    <style>
        table{
            margin-left:auto; 
            margin-right:auto;
            text-align: center;
            border-collapse: collapse;
            border: 2px solid black;
            width: 500px;
            background-color: violet;
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

<body>

    <marquee width="100%" direction="left" height="25px" class="mrk">
        This Project is developed by Suvrodev Howlader. BSC in CSE Engineering,
        Northwestern University. Summer-19 Batch...
        My Phone Number is <del>+8801951912997</del> <mark>01732887474</mark>
    </marquee>



    <div class="This_is_body_Class">


        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Student_Activity">
                    <small>Result of Students</small>
    </div>
    
     <?php
          $ID=$_GET['userid'];
        //  $GLOBALS['G_ID']=$ID;
         // define("C_ID", $G_ID);
       //echo "<br>User ID: $ID";
     ?>
      <?php
         // $ID=$_GET['userid'];
      // echo "<br>User ID: $ID";
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
                //echo "$IDD $NAME  $AGE $SEX  $DEPARTMENT $SEMESTER $CGPA   $MERITAL_STATUS $RELIGOION $PHN $DOB $MAIL  $LOC $PASSWORDD";
            }
         }else{
             echo "<br> $ID Not Found";
         }
     ?>
      <div class="student_own_table">

                <form action="STUDENTRESULT.php" method="POST" name="login_form" target="_self">
                   <table>
                       <tr>
                           <th colspan="2">Students Information</th>
                       </tr>
                       <tr>
                           <td>ID</td>
                           <td> <input type="number" name="id_id" id="id_id" value= <?php echo "$IDD";?> disabled> </td>
                       </tr>
                       <tr>
                           <td>NAME</td>
                           <td><?php echo "$NAME";?></td>
                       </tr>
                       <tr>
                           <td>AGE</td>
                           <td><?php echo "$AGE";?></td>
                       </tr>
                       <tr>
                           <td>SEX</td>
                           <td><?php echo "$SEX";?></td>
                       </tr>
                       <tr>
                           <td>DEPARTMENT</td>
                           <td><?php echo "$DEPARTMENT";?></td>
                       </tr>
                       <tr>
                           <td>SEMESTER</td>
                           <td><?php echo "$SEMESTER";?></td>
                       </tr>
                       <tr>
                           <td>CGPA</td>
                           <td><?php echo "$CGPA";?></td>
                       </tr>
                       <tr>
                           <td>MERITAL STATUS</td>
                           <td><?php echo "$MERITAL_STATUS";?></td>
                       </tr>
                       <tr>
                           <td>RELIGION</td>
                           <td><?php echo "$RELIGOION";?></td>
                       </tr>
                       <tr>
                           <td>PHONE NUMBER</td>
                           <td> <input type="number" name="phn_no" id="phn_no" value= <?php echo "$PHN";?> > </td>
                           
                       </tr>
                       <tr>
                           <td>DEATH OF BIRTH</td>
                           <td><?php echo "$DOB";?></td>
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
                           <td> <input type="number" name="pass_id" id="pass_id" value= <?php echo "$PASSWORDD";?>> </td>
                       </tr>
                   </table>
                    <br>
                   <!-- <input type="submit" name="submit" id="submit_id" value="modify"> -->
                </form>          
            </div>

            <div class="Hala">
                <?php     
                // $IDN=$_POST['id_id'];
                // $PHONE=$_POST['phn_no'];
                // echo "My ID: $IDN Phone: $PHONE<br>" ;         
               ?>
               </div>

               <div class="MDF">
               <?php
               if(isset($_POST['submit']))
               {
               $IDN=$_POST['id_id'];
               $PHONE=$_POST['phn_no'];
               $MAIL=$_POST['mail_id'];
               $LOCATION=$_POST['loc_id'];
               $PASSWORD=$_POST['pass_id'];
               

               echo "Pressed Modify Button and ID: $IDN PHONE: $PHONE";
               
             

               echo "<br> ID: $IDN Phone: $PHONE MAIL: $MAIL PASSWORD: $PASSWORD";

            $con=new mysqli("localhost","root","","project");
            if (!$con) {
               die("Connection failed: " . mysqli_connect_error());
             }

             $Modify_sql= "UPDATE info 
             SET Phone_Number='".$PHONE."',Email='".$MAIL."',Location='".$LOCATION."',Password='".$PASSWORD."'
             WHERE ID='".$IDD."'";
             
                if(mysqli_query($con,$Modify_sql)){
                    echo "<br> Data Modified successfully";
                }else{
                   echo "Error: " . $sql . "<br>" . mysqli_error($con);
               }
             }
            ?>
               </div>

           

                


</body>

</html>