<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insert</title>
    <link rel="stylesheet" href="admin_delete.css">
    <div class="Title_top">
    <a href="LOGIN.php"> <img src="logo.jpeg" class="logoimg" width="50" height="50"></img> </a>
    <h2 class="title_cls">
        Welcome to Admin Panel(Deletion)</h2>
    </div>
    <!-- <h2 class="title_cls">Welcome to Admin Panel(Deletion)</h2> -->
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
                <a href="#.php" >Delete</a> <br><br>
                <a href="ADMIN_SHOW.php" >Show Students</a> <br><br>
                <a href="DL.php" >Dean Profile</a>
            </div>
        </div>

        <!-- It is Component Class -->
        <div class="Component_Class">

            <div class="Component_First_Text">

                <div class="Admin_delete_Activity">
                    <small>This is Admin Activity</small>
                </div>

                <div class="insert_stu">
                <h3>Delete Students Information</h3>
                </div>
          </div>
          <div class="DeleteDataForm">
          <form action="ADMIN_DELETE.php" method="POST" name="delete_form" target="_self" id="idf">
                    <br><br><br><br>
                    <label for="fid">ID Number :</label>
                    <input type="number" name="id_id" placeholder="20192011010" id="id_id" required><br><br>

                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="submit" name="submit" id="submit_id">
                    <input type="reset" name="Reset" id="reset_id" >
                </form>       
          </div>

          <div class="deletion_php">
              <?php
                  if(isset($_POST['submit'])){
                    echo "Submit";
                    $Count=0;

                    $ID=$_POST['id_id'];

                    $con=new mysqli("localhost","root","","project");
                    if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                     }
                    
                     $Select_sqll="SELECT * FROM info WHERE ID='".$ID."'";
                     $Result=mysqli_query($con,$Select_sqll);
                     $Found_Row=mysqli_num_rows($Result);
                     if($Found_Row>0){
                         $Count++;
                     }else{
                         echo "<br> ID did Not Found";
                     }


                    if($Count>0){
                    $sql="DELETE FROM info  WHERE ID='".$ID."'";

                    if(mysqli_query($con,$sql)){
                        echo "<br> ID deleted successfully";
                    }else{
                       echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                }else{
                    echo "<br>ID did not Found";
                }
                   
                }
              ?>
          </div>
          <!-- Component Class End -->
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