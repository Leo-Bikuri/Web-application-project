<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?dt=<%= DateTime.Now.Ticks %>" type="text/css" />
    <title>Document</title>
</head>
<body>
<?php
        require("header.php");
        session_start();
        $id = (int)$_SESSION['user_id'];
        $sql = "SELECT * FROM `flavours_cust` WHERE customer_id = $id"; 
        require_once("database.php");
        $row = read_customer($sql);
        $query = "SELECT * FROM `orders` WHERE customer_id = $id";
        $result = $con->query($query); 
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
                <li><a href="">My orders<span>></span></a></li>
                <li><a onclick="confirmdelete();">Delete Account<span>></span></a></li>
                <li><a href="logout.php">Logout<span>></span></a></li>
            </ul>
        </div>
    </div>
    
    <div class="order">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Order History</h2>
            </div>
        <table class="cust_table">
            <thead>
                <tr>
                    <td><h4>Order-ID</h4></td>
                    <td><h4>Item</h4></td>
                    <td><h4>Quantity</h4></td>
                    <td><h4>Sub-total</h4></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($rows = $result->fetch_assoc()){
                        $id = $rows['food_id'];
                        $qry = "SELECT * FROM `tbl_products` WHERE `food_id` = $id";
                        $outcome = $con->query($qry);
                        $rw = $outcome->fetch_assoc();
                    
                ?>
                <tr>
                <td><?php echo $rows['order_id'] ?></td>
                <td><?php echo $rw['name'] ?></td>
                <td><?php echo $rows['quantity'] ?></td>
                <td><?php echo $rw['price'] * $rows['quantity'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>