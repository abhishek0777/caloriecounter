<!--page after sign up-->
<?php
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['height'];
$d=$_POST['age'];
$e=$_POST['cweight'];
$f=$_POST['tweight'];
$g=$c*$c;
$h=$e/$g;
$i=$_POST['gender'];
$j=$_POST['bfp'];
$k=$_POST['dam'];
$l=0;

//$x is daily calorie needs
$x=$e*24*$j*$k*$i;   

//connection setup 
 $con=mysqli_connect('localhost','id13650561_hackersquad_123','Abhisrisoro@1','id13650561_hackersquad');
 mysqli_select_db($con,'id13650561_hackersquad');
$query="SELECT * FROM user WHERE email='$a' OR password='$b'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);
if($row==0)
{
$query1="INSERT INTO user(email,password,height,age,currentweight,targetweight,bmi,gender,lfm,dam,dcr,lastdaycalorie) VALUES ('$a','$b','$c','$d','$e','$f','$h','$i','$j','$k','$x','$l')";
$status=mysqli_query($con,$query1);
?>
  <html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="registration.css">
    </head>
    <body>
        <div class="header">Your account has been created successfully!</div>
        
        <div class="container">
        <h2>You have entered your:</h2>
        <div class="content1"><?php if($row==0)
         echo "Email : ".$a;?></div><br>
         
          <div class="content2"><?php if($row==0)
        echo "\nPassword : ".$b;?></div><br>
        
        <div class="content1"> <?php if($row==0)
        echo "\nHeight : ".$c;?></div><br>
        
        
        
        <div class="content2"> <?php if($row==0)
        echo "\nAge : ".$d;?></div><br>
        
        <div class="content1"> <?php if($row==0)
        echo "\nCurrent weight : ".$e;?></div><br>
        
        <div class="content2"> <?php if($row==0)
        echo "\nTarget weight : ".$f;?></div><br>
        
        <div class="content1"> <?php if($row==0)
        echo "\nBMI : ".$h;echo " Kg/mt.sq.";
        ?></div><br>
        
        <div class="login"><a href="login.php">   LOGIN</a></div>
        </div>
        
        
    </body>
</html>
<?php

} ?>
<?php
if($row!=0)
{
    echo"user already exists";
    include('index.php');
}    
?>

<!--html code starts here-->
