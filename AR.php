<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="ar.css">
    <h2 id="h" alihn >Welcome to Admin Registration</h2>
</head>
<body id="b">
    <div class="d">
     
    <form action="AR.php" method="POST" name="Adimn_reg_form" target="_self" id="idf">
    <center>
        <img src="reg.jpg" class="rgimg"></img>
        </center>
                    
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="Enter Your ID" id="form" required><br>

                    <label for="fname">Name :</label>
                    <input type="text" name="name_id" placeholder="Enter Name" id="form" required><br>

                    <label for="fmai">Emai :</label>
                    <input type="email" name="mail_id" placeholder="Enter Email" id="form" required><br>

                    <label for="fpassword">Password :</label>
                    <input type="password" name="pass_id" placeholder="Your Password" id="form" required><br>



                    <!-- <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                    <input type="submit" name="submit" id="button" value="Sign Up">
                    <input type="reset" name="Reset" id="button" value="Reset" >
                    <a href="AL.php">   <input type="button" name="login" id="button" value="Back to Login" ></a>
                </form> 
    </div>

    <div class="Admin_insertion_php">
              <?php 
                 if(isset($_POST['submit'])){
                     echo "Submit";
                     $count=0;

                     $ID=$_POST['id_id'];
                     $NAME=$_POST['name_id'];                            
                     $MAIL=$_POST['mail_id'];               
                     $PASSWORD=$_POST['pass_id'];

                   
                      $con=new mysqli("localhost","root","","project");
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $Select_sqll="SELECT * FROM admin WHERE ID='".$ID."'";
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
                             `admin`(`ID`, `Name`, `Mail`,  `Password`, `Status`) 
                              VALUES 
                            ('".$ID."','".$NAME."','".$MAIL."','".$PASSWORD."','False')";
                        //  $sql = "INSERT INTO info  VALUES ('".$ID."','".$NAME."','".$AGE."','".$SEX."','".$DEPARTMENT."','".$SEMESTER."',
                        //  '".$CGPA."','".$MERITAL."','".$RELIGION."','".$PHONE."','".$DOB."','".$MAIL."','".$LOCATION."','".$PASSWORD."')";
                         if(mysqli_query($con,$sql)){
                             echo "<br> Admin Added successfully";
                         }else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                         }
                        }else{

                        }
                     }
              ?>
          </div>

    
</body>
</html>