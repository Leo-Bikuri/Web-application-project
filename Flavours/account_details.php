<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?dt=<%= DateTime.Now.Ticks %>" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <?php
        require("header.php");
        session_start();
        $id = (int)$_SESSION['user_id'];
        $sql = "SELECT `fName`, `lName`, `email`, `tel_no`, `address` FROM `flavours_cust` WHERE customer_id = $id"; 
        require_once("database.php");
        $row = read_customer($sql);
        ?>
<div class="account-page">
    <div class="profile">
        <div class="profile-detail">
            <img src="https://images.unsplash.com/photo-1579781403337-de692320718a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=640&q=80">
            <h2><?php echo $row['fName']?><?php echo " ".$row['lName']?></h2>
            <p><?php echo $row['email']?></p>
            <ul>
                <li><a href="account.html" class="active">Account<span>></span></a></li>
                <li><a href="change_password.html">Change password<span>></span></a></li>
                <li><a href="order-history.php">My orders<span>></span></a></li>
                <li><a onclick="confirmdelete();">Delete Account<span>></span></a></li>
                <li><a href="logout.php">Logout<span>></span></a></li>
            </ul>
        </div>
    </div>
    
    <div class="center">
        <form method="post" action="database.php">
        <div class="content">
            <div class="title">
                <h2>CONFIRM</h2>
            </div>
            <p style="color:black">Are you sure you want to delete your account?</p>
            <div class="line">
            <button onclick="reloadpage();" class="cancel_btn">Cancel</button>

            <button type="submit" class="confirm_button" name="delete">Confirm</button>
            </div>   
        </div>
    </form>
    </div>
    <div class="account-detail">
        <h2>ACCOUNT</h2>
        <form action="registration_handler.php" method="post">
           <label for="name">First Name</label><label for="name" class='lnamepos'>Last Name</label><br>
           <input type="text" placeholder="First name" name="fName" class="acc-fname" value="<?php echo $row['fName']?>">
           <input type="text" placeholder="Last name" name="lName" class="acc-lname" value="<?php echo $row['lName']?>"><br>
           <label for="name">Email</label><br>
           <input type="email" placeholder="Email" name="email" class="acc-mail" value="<?php echo $row['email']?>"><br>
           <label for="name">Mobile Number</label><br>
           <input type="tel" placeholder="Mobile number" name="" value="+254" readonly class="acc-tel">
           <input type="tel" placeholder="Mobile number" name="tel_number" class='acc-mobile' value="<?php echo $row['tel_no']?>"><br>
           <label for="name">Address</label><br>
           <input type="text" placeholder="Address" name="address" class="acc-address" value="<?php echo $row['address']?>">
           <br><input class="acc-btn" type="submit" name="update_user" value = "Update">
           </form>
            
    </div>
</div>
 <?php
 require('footer.php');
 ?>
 <script>
     function confirmdelete(){
     let visible = document.querySelector('.content');
     visible.classList.toggle('active');
     }
     function reloadpage(){
         window.location.href = "account_details.php";
     }
 </script>
</body>
</html>