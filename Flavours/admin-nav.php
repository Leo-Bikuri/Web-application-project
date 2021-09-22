<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/admin.css" />
</head>
<body>
    <?php
        session_start();
    ?>
<div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <span class="icon"><i class="fas fa-pizza-slice"></i></span>
                    <span class = "title"><h2>FLAVOURS</h2></span>
                    </a>
                </li>
                <li>
                    <a href="admin.php" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class = "title">Dashboard</span>
                </a>
                </li>
                <li>
                    <a href="a_customers.php">
                    <span class="icon"><i class="fas fa-users"></i></span>
                    <span class = "title">Customers</span>
                </a>
                </li>
                <li>
                    <a href="adminsview.php">
                    <span class="icon"><i class="fas fa-users"></i></span>
                    <span class = "title">Administrators</span>
                </a>
                </li>
                <li>
                    <a href="a_fooditems.php">
                    <span class="icon"><i class="fas fa-utensils"></i></span>
                    <span class = "title">Food items</span>
                </a>
                </li>
                <li>
                    <a href="admin-sales.php">
                    <span class="icon"><i class="fas fa-dollar-sign"></i></span>
                    <span class = "title">Sales</span>
                </a>
                </li>
                <li>
                    <a href="admin_orders.php">
                    <span class="icon"><i class="fas fa-clock"></i></span>
                    <span class = "title">Pending orders</span>
                </a>
                </li>
                <li>
                    <a href="">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <span class = "title">Password</span>
                </a>
                </li>
                <li>
                    <a href="admin-logout.php">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class = "title">Sign out</span>
                </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="user">
                    <img src="default/user.png">
                </div>
                <div class="username">
                <h4><?php echo $_SESSION['name'] ?></h4>
                </div>
            </div>
            <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');

        }
    </script>
    

</body>
</html>