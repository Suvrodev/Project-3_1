<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dean Log in</title>
    <link rel="stylesheet" href="dl.css">
    <h2 id="h" >Welcome to Dean Login</h2>

</head>
<body id="b">
<div class="d">  
     <form action="DL.php" method="POST" name="Adimn_reg_form" target="_self" id="idf">
     <center>
         <img src="login.jpg" class="rgimg"></img>
         </center>
                     <br><br><br><br>
                     <label for="fid">ID Number :</label>
                     <input type="text" name="id_id" placeholder="Enter Your ID" id="form" required><br>
 
                     <label for="fpassword">Password :</label>
                     <input type="password" name="pass_id" placeholder="Your Password" id="form" required><br>
 
 
 
                     <!-- <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                     <input type="submit" name="submit" id="button" value="Sign in">
                     
                 </form> 
     </div>

     <div class="Dean_login_php">
              <?php 
                 if(isset($_POST['submit'])){
                     echo "Submit";
                     $count=0;

                     $ID=$_POST['id_id'];            
                     $PASSWORD=$_POST['pass_id'];

                   
                      $con=new mysqli("localhost","root","","project");
                        if (!$con) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $Select_sqll="SELECT * FROM dean WHERE ID='".$ID."' AND Password='".$PASSWORD."'";
                        $Result=mysqli_query($con,$Select_sqll);
                        $Found_Row=mysqli_num_rows($Result);
                        if($Found_Row>0){
                            $count++;
                            header('Location:DEAN.php');
                            echo "<br>ID had founded";
                        }else{
                            echo "<br> ID Has not founded <br>";
                        }
                     }
              ?>
          </div>
    
</body>
</html>