<!--Sign up page-->

<!DOCTYPE html>
<html>
    <head>
        <title>calorie counter</title>
        <meta charset="UTF-8">
        <link rel= "stylesheet" type='text/css' href="index.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="avatar.jpg" class="avatar">
            <h1>Sign Up</h1>
            
            <!--from starts here-->
            
            <form action="registration.php" method="post">
                <p >Email</p>
                <input type="email" name="email" placeholder="Enter email" required>
                
                <p >Password</p>
                <input type="password" name="password" placeholder= "Enter password" required>
                
              
                
                <p >Height</p>
                <input type="number" step="0.01" name="height" placeholder="Enter height(mt.)" required>
                
  
                
                  <p >Age</p>
                <input type="number" name="age" placeholder="Enter age" required>
                
                <p >Current Weight</p>
                <input type="number"  step="0.01" name="cweight" placeholder="Enter current weight(kg)" required>
                
                <p >Target Weight</p>
                <input type="number" step="0.01" name="tweight" placeholder="Enter target weight(kg)" required>
                
                <p>Gender</p>
                <select name="gender">
                       <option value="0.9">Male</option>
                       <option value="1">Female</option>
                </select>
                <!--<input type="number" step="0.01" name="tweight" placeholder="Male/Female" required>-->
                
                <p>Body Fat Percentage</p>
                 <select name="bfp">
                       <option value="1">10-18</option>
                       <option value="0.95">19-28</option>
                       <option value="0.85">29-38</option>
                       <option value="0.8">39 or above</option>
                </select>
                <!--<input type="number" step="0.01" name="tweight" placeholder="Body fat %age" required>-->
                
                <p >Daily Activity Multiplier</p>
                <select name="dam">
                       <option value="1.3">Very light</option>
                       <option value="1.55">Light</option>
                       <option value="1.65">Moderate</option>
                       <option value="1.80">Heavy</option>
                       <option value="2">Very heavy</option>
                </select>
                <!--<input type="number" step="0.01" name="tweight" placeholder="Daily activity " required>-->
                
              
                <input type="submit"  name="" value="Sign up">
                <!--<a href="#">Lost your password?</a> <br>-->
                <a href="login.php">Already have an account</a>
            </form>

        </div>
    </body>

</html>