<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="#" class="active"><i class="fa fa-home"></i>Home</a> 
                        <div class="list1">
                            <ul>
                                <li ><a href="#">My Home</a> </li><br><hr>
                                <li ><a href="#">Goals</a> </li><br><hr>
                                <li ><a href="#">Check in</a> </li><br><hr>
                            </ul>
                        </div></li>
                    <li ><a href="#"><i class="fa fa-cutlery"></i>  Food</a>
                        <div class="list2">
                            <ul>
                                <li ><a href="#">Food diary</a> </li><br><hr>
                                <li ><a href="#">Database</a> </li><br><hr>
                            </ul>
                        </div> </li>
                    <li ><a href="exercise.php"><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="#"><i class="fa fa-calendar"></i> Reports</a> </li>
                    <li ><a href="#"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="#"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav>
        </div>
        <div class="profile-card">
         
          <div class="upper">
            <div class="image">
                <img src="profile.png">
                <div class="personal">
              <h3> <i class="fa fa-smile-o info" ></i>Age :<?php echo $_SESSION['age']." yrs"?></h3><br>
            <h3> <i class="fa fa-envelope info"></i>Email :<?php echo $_SESSION['email']?></h3><br>
            <h3> <i class="fa fa-male info"></i>Height :<?php echo $_SESSION['height']." mt."?></h3>
               </div>
          <div class= "lower">
              <p > <b><i class="fa fa-hourglass-end"></i> Calories Burnt:<?php echo "work on progress"?></b></p><br><br><br>
              <p  ><b> <i class="fa fa-hourglass" ></i>Calories Gain:<?php echo "work on progress"?></b></p> <br><br><br>
              <p><b> <i class="fa fa-paper-plane-o"></i>Body Mass Index:<?php echo $_SESSION['bmi']?></b></p><br><br><br>
              <ul>
                <li> <a href="#"> Add Food </a></li>
                <li> <a href="#"> Add Exercise </a></li>
              </ul>
              
          </div>
      </div>
</div>
<div class="welcome">
            <span class="text1"> Welcome to Calorie Management </span><br><br><br>
            <span class="text2"> Fitter,Healthier,Happier!!</span>
          </div>
    </body>
</html>
