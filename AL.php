<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="al.css">
    <h2 id="h" >Welcome to Admin Login</h2>
</head>
<body id="b">

<div class="d">  
     <form action="AL.php" method="POST" name="Adimn_reg_form" target="_self" id="idf">
     <center>
         <img src="login.jpg" class="rgimg"></img>
         </center>
                     <br><br><br><br>
                     <label for="fid">ID Number :</label>
                     <input type="number" name="id_id" placeholder="Enter Your ID" id="form" required><br>
 
                     <label for="fpassword">Password :</label>
                     <input type="password" name="pass_id" placeholder="Your Password" id="form" required><br>
 
 
 
                     <!-- <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                     <input type="submit" name="submit" id="button" value="Sign in">
                     <input type="reset" name="Reset" id="button" value="Reset" >
                     <a href="AR.php">   <input type="button" name="reg" id="button" value="Registration" ></a>
                 </form> 
     </div>

     <div class="Admin_login_php">
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

                      //  $Select_sqll="SELECT * FROM admin WHERE ID='".$ID."' AND Password='".$PASSWORD."'";
                        $Select_sqll="SELECT Status
                        FROM admin
                        WHERE ID='".$ID."' AND Password='".$PASSWORD."'";
                        $result = $con->query($Select_sqll);
                        
                        $Result=mysqli_query($con,$Select_sqll);
                        $Found_Row=mysqli_num_rows($Result);

                        if($Found_Row>0){
                            $count++;
                            while($row = $result->fetch_assoc()) {
                            $STATUS=  $row["Status"];
                            }
                            echo "<br>ID has founded";  
                         if($STATUS=="True"){
                            header('Location:ADMIN_INSERT.php');
                         }else{
                            echo "<br>Can Not Login Because you Status: $STATUS , Contact with dean"; 
                         }   

                           // echo "<br>Status: $STATUS";
                           // header('Location:ADMIN_INSERT.php');
                            
                        }else{
                            echo "<br> ID has not founded <br>";
                        }

                        // if($count>0 && $STATUS=="True"){
                        //     header('Location:ADMIN_INSERT.php');
                        // }else{            
                        //     echo "<br>Can Not Login Bechause you Status: $STATUS , Contact with dean";
                        // }
                     }
              ?>
          </div>
    
</body>
</html>