<?php
 session_start();
//  error_reporting(0);

if(isset($_SESSION['email']))
{
    
   ?>
   <!--here html code start-->
<!DOCTYPE html>
<html>
    <head>
	<style>
	input[type=text], select, textarea {
  width:400px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}
	</style>
        <title>home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="home.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	    
	

    </head>
    <body>
        <!--navigation bar-->
            <nav class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li ><a href="#" class="active"><i class="fa fa-home"></i>Home</a> 
                      </li>
                    <li ><a href="/food/food.php"><i class="fa fa-cutlery"></i>  Food</a>
                         </li>
                    <li ><a href="exercise.php"><i class="fa fa-child"></i>   Exercise</a> </li>
                    <li ><a href="report.php"><i class="fa fa-calendar"></i> Reports</a> </li>
                     <li ><a href="calculator.html"><i class="fa fa-calculator"></i>Calculator</a> </li>
                    <li ><a href="help.php"><i class="fa fa-question-circle"></i>  Help</a> </li>
                    <li ><a href="setting.php"><i class="fa fa-cog"></i> Setting</a> </li>
                    <li ><a href="logout.php"><i class="fa fa-sign-out"></i>  Logout</a> </li>
                </ul>
            </nav>
            
             
          
         <!--welcome on home page-->
         <?php $BMI=(int)$_SESSION['bmi']; ?> 
        
        <div class="firstpage">

        <div class="welcomee">
		 <div class="welcome">
  <span class="text1"><i>Welcome to Calorie Management</i></div>
		</div>
		<div class="desc">
		<p class="desc1">This is the platform where you will get guidelines for how you will gain or loose extra weight.Calorie Management platform is solely dedicated for health concerned peoples and for old age peoles.We have a section of exercise,you can go there and do while early morning.</p></div>
    </div>
    
    <div class="secondpage">
         <!--Profile card of user-->
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
              <p style="color:black;">(Weight)x(lean factor)x(daily activity multiplier)</p><br>
              <p  ><b> <i class="fa fa-hourglass" ></i>Lean Factor Multiplier : <?php echo $_SESSION['lfm']?></b></p> <br>
              <p style="color:black;">Proportion of difference between body weight and body fat weight using your body fat percentage</p><br>
              <p><b> <i class="fa fa-paper-plane-o"></i>Body Mass Index:<?php echo $BMI." kg/mt.sq."?></b></p><br><p style="color:black;">BMI is a measure of body fat based on height and weight that applies to adult men and women.</p>
             <br>
             <!--  <ul>
                <li> <a href="#"> Add Food </a></li>
                <li> <a href="#"> Add Exercise </a></li>
              </ul> -->
              
          </div>
      </div>
</div>
</div> 

     <!--Report card-->
  
     <div class="content">
          <div class="cupper">
            <div class="cimage">
                <img src="report.jpg">
                <div class="cpersonal">
             <br> <h3> <i class="fa fa-info info" ></i>Initial Weight :<?php echo $_SESSION['currentweight']." kg."?></h3><br>
            <h3> <i class="fa fa-info info"></i>Target Weight :<?php echo $_SESSION['targetweight']." kg."?></h3><br>
            
            <h3> <i class="fa fa-info info"></i>Regular Exercise :<a color:red href="exercise.php">Visit portal</a></h3>
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

  <!--how to calculate per day calorie needs-->
  <div class="information">
 
  
  <h2>Basic Terms:</h2>
  <h1>How to calculate your daily calorie needs</h1><br><br>
  <p>Step 1: Find your body weight in kilograms (if you live in the US, just divide your weight in pounds by 2.2 to get your weight in kilograms)</p><br>
  <p>Step 2: Multiply your weight in kilograms by 0.9 if you are a woman or 1.0 if you are a man.</p><br>
 <p>Step 3: Multiply by 24</p><br>
 <p>Step 4: Multiply by your “Lean Factor” from the table below</p><br>
 <img class="iimg" src="bfp.PNG"><br><br><br>
 <b>Example using my stats: 61 kg (134.5 lbs.) x 0.9 (female) x 24 x 0.95 (20% body fat) = 1252</b><br><br>
 
  <p>Step 5: Multiply by Activity Modifier</p><br>
  <img class="iimg" src="dam.PNG"><br><br>
  <b>My daily calorie need would be: 1252 (my BMR) x 1.55 (Light Activity) = 1940 calories/day</b><br><br>
<p><i>As you can see, calculating your daily calorie needs is actually pretty simple, as long as you know your body fat percentage. Most gyms should be able to measure that for you, or a trainer can give you a very good estimate just by looking.<i></p> <br> 
  </div>
  
  
  <!--portal for suggestions-->
  
  <div class="contact">
  <h3 class="h8">For any Suggestions</h3>

<div class="container">
  <form>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <input type="text" name="country" placeholder="country">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
  </div>
  <h3 class="copyright">&copy . All rights reserved . Calorie Management</h3>
  </div>
  
  <!--picture section-->
  <div class="thirdpage">
     <div class="healthy">
   <h3><i>Some Healthier nuts and vegetables</i></h3>
   </div>
  <img class="almond" src="almond.jpg">
  <img class="brazilnut" src="brazil.jpg">
  <img class="spinach" src="spinach.jpg">
  <img class="carrot" src="carrot.jpg">
  <img class="broccoli" src="broccoli.jpg">
  <img class="pecans" src="pecans.jpg">
  <img class="garlic" src="garlic.jpg">
  <img class="greenpeas" src="greenpeas.jpg">
  <img class="sweetpotatoes" src="sweetpotatoes.jpg">
  <img class="orange" src="orange.jpg">
</div>
          


    </body>
</html>
<?php }
else
include('login.php');
?>