<?php
session_start();
if(isset($_SESSION['email']))
{
  if(isset($_POST['lastDayCalorie'])&&isset($_POST['submit']))
  {
      

      $calorie=$_POST['lastDayCalorie'];
 $con=mysqli_connect('localhost','id13650561_hackersquad_123','Abhisrisoro@1','id13650561_hackersquad');
 mysqli_select_db($con,'id13650561_hackersquad');
 $a=$_SESSION['email'];
 $b=$_SESSION['password'];
$query="SELECT * FROM user WHERE email='$a' OR password='$b'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);
if($row==1)
{
  
$query1="UPDATE user SET lastdaycalorie='$calorie' WHERE email='$a' && password='$b'";
// $query1="INSERT INTO user(lastdaycalorie) VALUES ('$calorie')";
$status=mysqli_query($con,$query1);

  $result=mysqli_query($con,"SELECT lastdaycalorie FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['lastdaycalorie']=$row['lastdaycalorie'];
       
     }
}
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="report.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
<script src="https://code.highcharts.com/modules/export-data.js"></script> 
 <script src="https://code.highcharts.com/modules/accessibility.js"></script>

 <script src="https://code.highcharts.com/highcharts-3d.js"></script>
 <script src="https://code.highcharts.com/modules/cylinder.js"></script>



    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="home.php" ><i class="fa fa-home"></i>Home</a> 
                     </li>
                    <li ><a href="food/food.php"><i class="fa fa-cutlery"></i>  Food</a>
                       </li>
                    <li ><a href="exercise.php"><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="report.php" class="active"><i class="fa fa-calendar"></i> Reports</a> </li>
                     <li ><a href="calculator.html"><i class="fa fa-calculator"></i>Calculator</a> </li>
                    <li ><a href="help.php"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="setting.php"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav>
        </div>
        
        <!--bar graph-->
        <!--<div class="graph">-->
        <!-- <div class="orange"></div>-->
        <!-- <p>Calories you take</p>-->
        <!-- <div class="purple"></div>-->
        <!-- <p>Calories you have to take</p>-->
        <!--</div>-->
        
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6"><div id="container2"></div></div>
                <div class="col-sm-6 col-md-6"><div id="container0">
                    <form  class="calorieintake" action="report.php" method="POST">
                        <label>Today's Caloarie intake:</label>
                        <input  name="lastDayCalorie" placeholder="Total intake calorie"></input>
                       <input type="submit"  name="submit" value="Submit">
                    </form></div>
                    <div class="orange"></div>
         <p>Calories you take</p>
         <div class="purple"></div>
         <p>Calories you have to take</p></div>
                <div class="col-sm-6 col-md-6"><div id="container0"></div></div> 
                <div class="col-sm-6 col-md-6"><div id="container1"></div></div>
            </div>
        </div>
     
        <script src="piechart.js"></script>
     
        <?php include('bargraph.php'); ?> 
        
             <!--Report card-->
  <div class="endreport">
     <div class="content">
          <div class="cupper">
            <div class="cimage">
                <img src="report.jpg">
                <div class="cpersonal">
             <br> <h3> <i class="fa fa-info info" ></i>Initial Weight :<?php echo $_SESSION['currentweight']." kg."?></h3><br>
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
               
              <p style="color:black;">You have to take extra 500 calories per day for differential of <?php echo $_SESSION['extra'] ?> kg. for <?php echo $_SESSION['days'] ?> days(recommended by us).</p><br>
              
              <p  ><b> <i class="fa fa-hourglass" ></i>Recommended Foods : To be a healthy person</b></p> <br>
              
              <p style="color:black;">Plenty of colourful vegetables, legumes/beans
fruit,
grain foods – mostly wholegrain and high fibre varieties,
lean meats and poultry, fish, eggs, tofu, nuts and seeds,
milk, yoghurt, cheese or their alternatives, mostly reduced fat.
Drink plenty of water</p><br>
              
              <p><b> <i class="fa fa-paper-plane-o"></i>NOTE::<?php echo $_SESSION['days']." days."?></b></p><br>
              
              <p style="color:black;">Continuous for <?php echo $_SESSION['days']." days."?> ,you have to take/remove 500 calories per day with <?php echo $_SESSION['dcr']." calorie"?> ,in order to achieve target weight.</p>
             <br>
            
              
          </div>
      </div>
</div>
</div>
</div>
        
    </body>
</html>

<?php }
else
include('login.php');
?>
