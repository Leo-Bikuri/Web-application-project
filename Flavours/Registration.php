<!DOCTYPE html>
<htm>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body class="register">
        <form action="registration_handler.php" method="post">
        <div class="register-box">
            <h1>Sign up</h1>
            <div class="regtextbox">
                <input type="text" placeholder="First name" name="fName" value="" size="12">
                <input type="text" placeholder="Last name" name="lName" value="" size="12">
            </div>

            <div class="regtextbox">
                <input type="email" placeholder="Email" name="email" value="" size="29"><br>
                <input type="tel" placeholder="Mobile number" name="" value="+254" size="3" readonly>
                <input type="tel" placeholder="Mobile number" name="tel_number" value="">
                <input type="text" placeholder="Address" name="address" value="" size="29">
            </div>
            <div class="regtextbox">
                <input type="password" placeholder="Password" name="password" value="">
                <input type="password" placeholder="Re-enter password" name="" value="">
            </div>

            <input class="regbtn" type="submit" name="sign_up" value = "Sign up">
            <p class="nav2">Already have an account?<a href="Login.php" style="color: rgb(0, 102, 102);">Login</a></p>
        </div>
    </form>
    </body>
</htm>