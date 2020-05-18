<?php
session_start();
if(isset($_SESSION['email']))
{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="setting.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="home.php" ><i class="fa fa-home"></i>Home</a></li>
                    <li ><a href="food/food.php"><i class="fa fa-cutlery"></i>  Food</a></li>
                    <li ><a href="exercise.php" ><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="report.php"><i class="fa fa-calendar"></i> Reports</a> </li>
                    <li ><a href="calculator.html"><i class="fa fa-calculator"></i>Calculator</a> </li>
                    <li ><a href="help.php"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="setting.php" class="active"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav>
            <div class="acccount_setting">
                <h2>Account Setting</h2>
                <a href="setting/ch_pass.php">Change Password</a><br>
                <a href="setting/ch_email.php">Change email address</a><br>
                <a href="setting/ch_height.php">Change Height</a><br>
                <a href="setting/ch_weight.php">Change weight</a><br>  
                <a href="report.php"> See my Report</a><br>
            </div>
            <div class="acccount_setting1">
                <h2>Privacy Setting</h2>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Contact Us </a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>         
            </div>
         
                      
        </div>
    </body>
</html>

<?php  }
?>