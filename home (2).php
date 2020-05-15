<?php
session_start();
if(!isset($_SESSION['email']))
header('location:login.php');
if(isset($_SESSION['email']))
{
    
   
?>
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
                    <li ><a href="/food/food.php"><i class="fa fa-cutlery"></i>  Food</a>
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
              <p > <b><i class="fa fa-hourglass-end"></i> Daily Calorie Requirement : <?php echo $_SESSION['dcr']." Calories"?></b></p><br>
              <p>(Weight)x(lean factor)x(daily activity multiplier)</p><br>
              <p  ><b> <i class="fa fa-hourglass" ></i>Lean Factor Multiplier : <?php echo $_SESSION['lfm']?></b></p> <br>
              <p>Proportion of difference between body weight and body fat weight using your body fat percentage</p><br>
              <p><b> <i class="fa fa-paper-plane-o"></i>Body Mass Index:<?php echo $_SESSION['bmi']." kg/mt.sq."?></b></p><br><p>BMI is a measure of body fat based on height and weight that applies to adult men and women.</p>
             <br>
              <ul>
                <li> <a href="#"> Add Food </a></li>
                <li> <a href="#"> Add Exercise </a></li>
              </ul>
              
          </div>
      </div>
</div>
</div>
  
     <div class="content">
          <div class="cupper">
            <div class="cimage">
                <img src="report.jpg">
                <div class="cpersonal">
             <br> <h3> <i class="fa fa-info info" ></i>Current Weight :<?php echo $_SESSION['currentweight']." kg."?></h3><br>
            <h3> <i class="fa fa-info info"></i>Target Weight :<?php echo $_SESSION['targetweight']." kg."?></h3><br>
            
            <h3> <i class="fa fa-info info"></i>Regular Exercise :<a href="exercise.php">Visit portal</a></h3>
               </div>
               
              <!--php to cal number of days-->
              <?php
              if($_SESSION['currentweight']<$_SESSION['targetweight'])
              {
                   $_SESSION['extra']=$_SESSION['targetweight']-$_SESSION['currentweight'];
                  $_SESSION['days']=($_SESSION['targetweight']-$_SESSION['currentweight'])*15;
              }
              else
              {
                  $_SESSION['extra']=$_SESSION['currentweight']-$_SESSION['targetweight'];
              $_SESSION['days']=($_SESSION['currentweight']-$_SESSION['targetweight'])*15;}
              ?>
          <div class= "clower">
               <p > <b><i class="fa fa-hourglass-end"></i> No. of Days  : <?php echo $_SESSION['days']." days"?></b></p><br>
              <p>You have to take extra 500 calories per day for differential of <?php echo $_SESSION['extra'] ?> kg. for <?php echo $_SESSION['days'] ?> days(recommended by us).</p><br>
              <p  ><b> <i class="fa fa-hourglass" ></i>Lean Factor Multiplier : <?php echo $_SESSION['lfm']?></b></p> <br>
              <p>Proportion of difference between body weight and body fat weight using your body fat percentage</p><br>
              <p><b> <i class="fa fa-paper-plane-o"></i>Body Mass Index:<?php echo $_SESSION['bmi']." kg/mt.sq."?></b></p><br><p>BMI is a measure of body fat based on height and weight that applies to adult men and women.</p>
             <br>
            
              
          </div>
      </div>
</div>
</div>
     
        
     

          <!--table-->
          


    </body>
</html>
<?php } ?>