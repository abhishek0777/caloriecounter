<?php
session_start();

 $con=mysqli_connect('localhost','id13650561_hackersquad_123','Abhisrisoro@1','id13650561_hackersquad');
 mysqli_select_db($con,'id13650561_hackersquad');
 if(count($_POST)>0)
 {
     $result = mysqli_query($con, "SELECT *from user WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
     if ($_POST["currentpass"] == $row["password"]) {
        mysqli_query($con, "UPDATE user set password='" . $_POST["newpass"] . "' WHERE email='" . $_SESSION["email"] . "'");
        $message = "Password Changed";
        
    } else
        $message = "Current Password is not correct";
 }
 






?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ch_pass.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="../home.php" ><i class="fa fa-home"></i>Home</a></li>
                    <li ><a href="../food/food.php"><i class="fa fa-cutlery"></i>  Food</a></li>
                    <li ><a href="../exercise.php" ><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="../report.php"><i class="fa fa-calendar"></i> Reports</a> </li>
                    <li ><a href="../calculator.html"><i class="fa fa-calculator"></i>Calculator</a> </li>
                    <li ><a href="../help.php"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="../setting.php" class="active"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="../logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav> 
            
            <div class="loginbox">
                <h1>Change Your Password</h1>
                <form action="" method="POST">
                    <?php if(isset($message)) echo$message; ?>
                    <p title="Type your current Password">Current Password: 
                    <input type="password" name="currentpass" placeholder="Enter  Password" size="15" maxlength="30" required></p>
                    <p title="Enter your new password"> New Password:
                    <input type="password" name="newpass" placeholder= "Enter New password"  size="15" maxlength="30" required></p>
                    <p title="Enter your new password"> Confirm  Password:
                    <input type="password" name="newpass" placeholder= "Enter New password"  size="15" maxlength="30" required></p>
                    
                    <input type="submit"  name="submit" value="Save Changes">
                </form>
                
    
            </div>                     
        </div>
    </body>
</html>
