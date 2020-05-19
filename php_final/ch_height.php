<?php
session_start();

 $con=mysqli_connect('localhost','id13650561_hackersquad_123','Abhisrisoro@1','id13650561_hackersquad');
 mysqli_select_db($con,'id13650561_hackersquad');
 if(count($_POST)>0)
 {
     $result = mysqli_query($con, "SELECT *from user WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
     if ($_POST["currentheight"] == $row["currentheight"]) {
        mysqli_query($con, "UPDATE user set currentheight='" . $_POST["newheight"] . "' WHERE email='" . $_SESSION["email"] . "'");
        $message = "Height has Changed";
        
    } else
        $message = "Current Height is not correct";
 }
 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ch_height.css" type="text/css">
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
            <div class="image">
                <img src="set1.jpg" alt="" class="pic">
            </div>
            <div class="loginbox">
                <h1>Change Your Height
                </h1>
                <form action="ch_height.php" method="POST">
                    <p title="Type your current Height">Current Height: 
                    <input type="number" step="0.01" name="currentheight" placeholder="Enter  Height" size="15" maxlength="30" ></p>
                    <p title="Enter your new Height"> New Height:
                    <input type="number" step="0.01" name="newheight" placeholder= "Enter New Height"  size="15" maxlength="30"></p>
                    <!--<p title="Enter your new Height"> Confirm  Height:
                    <input type="Height" name="" placeholder= "Enter New Height"  size="15" maxlength="30"></p>-->
                    
                    <input type="submit"  name="submit" value="Save Changes">
                </form>
                
    
            </div>                     
        </div>
    </body>
</html>