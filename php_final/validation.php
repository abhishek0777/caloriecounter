<?php
session_start();
error_reporting(0);
if(isset($_SESSION['email'])&&$_POST['email']==NULL)
{include('login.php');
}


else{
$a=$_POST['email'];
$b=$_POST['password'];
$con=mysqli_connect('localhost','id13650561_hackersquad_123','Abhisrisoro@1','id13650561_hackersquad');
 mysqli_select_db($con,'id13650561_hackersquad');
 $q= "SELECT * FROM user WHERE email='$a' && password='$b'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 
 if($num!=0)
 {
     $_SESSION['email']=$a;
     $_SESSION['password']=$b;
     
     $result=mysqli_query($con,"SELECT age FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['age']=$row['age'];}
     //echo $_SESSION['age'];
     
     $result=mysqli_query($con,"SELECT height FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['height']=$row['height'];}
    // echo $_SESSION['height'];
     
     $result=mysqli_query($con,"SELECT currentweight FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['currentweight']=$row['currentweight'];}
    // echo $_SESSION['currentweight'];
     
     $result=mysqli_query($con,"SELECT targetweight FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['targetweight']=$row['targetweight'];}
    // echo $_SESSION['targetweight'];
  
     
      $result=mysqli_query($con,"SELECT bmi FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['bmi']=$row['bmi'];}
    // echo $_SESSION['targetweight'];
    
     $result=mysqli_query($con,"SELECT gender FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['gender']=$row['gender'];}
    // echo $_SESSION['targetweight'];
    
     $result=mysqli_query($con,"SELECT lfm FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['lfm']=$row['lfm'];}
    // echo $_SESSION['targetweight'];
    
     $result=mysqli_query($con,"SELECT dam FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['dam']=$row['dam'];}
    // echo $_SESSION['targetweight'];
    
         $result=mysqli_query($con,"SELECT dcr FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['dcr']=$row['dcr'];}
    // echo $_SESSION['targetweight'];
    
            $result=mysqli_query($con,"SELECT lastdaycalorie FROM user WHERE email='$a' && password='$b';");
     while($row=$result->fetch_assoc()){
     $_SESSION['lastdaycalorie']=$row['lastdaycalorie'];}
    // echo $_SESSION['targetweight'];
    
   include('home.php');
     
  
 }
 else
 {
     include('login.php');
 }
}

?>