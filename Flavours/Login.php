<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body class="login">
        <div class="login-box">
            <h1>Login</h1>
            <form action = "login_id.php" method="POST">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" name="email" value="" id="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" value="" id="password">
            </div>

            <a href="Index.php"><input class="btn" type="submit" name="Login" value = "LOGIN"></a>
        </form>
            <p class="nav">New here?<a href="Registration.php" style="color: rgb(0, 102, 102);">Create an account</a></p>
            
        </div>
    
    </body>
</html>
