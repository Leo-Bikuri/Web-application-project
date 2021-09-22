<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css?dt=<%= DateTime.Now.Ticks %>" type="text/css" />
    <title>Document</title>
</head>
<body>
<?php 
        require("admin-nav.php");
        $sql = "SELECT * FROM `admins`";
        require_once("adminmethods.php");
        
    ?>
<form method="post" action="adminmethods.php">
    <div class="details customer">
        <div class="recentOrders register">
            <div class="cardHeader">
                <h2>Admin Registration</h2>
            </div>
            <label for="name">Full Name</label>
           <input type="text" placeholder="Full Name" name="fName" class="admin_input" required>
           <label for="name">Email</label>
           <input type="email" placeholder="Email" name="email" class="admin_input" required>
           <label for="name">Mobile Number</label>
           <input type="tel" name="" value="+254" class="admin-tel" readonly>
           <input type="tel" placeholder="Mobile number" name="tel_number" class='admin_input' value="" required>
           <label for="name">Password</label>
           <input type="text" placeholder="Password" name="password" class="admin_input" value="" required>
           <input type="text" placeholder="Confirm password" name="confirm_password" class="admin_input" value="" required>
           <input class="admin-btn" type="submit" name="register" value="Register"> 
        </div>
    </div>
</form>
</body>
</html>