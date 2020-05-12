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
                
                <p title="Type your username">Target Weight</p>
                <input type="number" step="0.01" name="tweight" placeholder="Enter target weight(kg)" required>
                
              
                <input type="submit"  name="" value="Sign up">
                <a href="#">Lost your password?</a> <br>
                <a href="login.php">Already have an account</a>
            </form>

        </div>
    </body>

</html>