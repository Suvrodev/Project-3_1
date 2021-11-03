<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvrodev</title>
    <link rel="stylesheet" href="studentresult.css">
    <h2 class="title_cls">Result of Student</h2>
</head>

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

    <!-- Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?> -->

    <div class="Data">
            Welcome <?php echo $_POST["id_id_DT"]; ?><br>
            Your Password is: <?php echo $_POST["password_id_DT"]; ?>
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