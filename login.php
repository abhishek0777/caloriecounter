<!--login page-->

<!DOCTYPE html>
<html>
    <head>
        <title>calorie counter</title>
        <meta charset="UTF-8">
        <link rel= "stylesheet" type='text/css' href="login.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="avatar.jpg" class="avatar">
            <h1>Login here</h1>
            <form action="validation.php" method="post">
                <p title="Type your username">Username</p>
                <input type="text" name="email" placeholder="Enter email">
                <p title="Enter your password">Password</p>
                <input type="password" name="password" placeholder= "Enter password">
                <input type="submit"  name="" value="Login">
                <a href="#">Lost your password?</a> <br>
                <a href="index.php">Don't have an account?</a>
            </form>

        </div>
    </body>

</html>