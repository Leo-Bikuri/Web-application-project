<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/admin.css?dt=<%= DateTime.Now.Ticks %>" type="text/css" />
    <title>Document</title>
</head>
<body>
    <?php 
        require("admin-nav.php"); 
        $sql = "SELECT * FROM orders WHERE status = 'Pending'";
        require("database.php");
        $order = $con->query($sql)
    ?>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View all</a>
                    </div>
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Order-ID</td>
                            <td>Quantity</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row = $order->fetch_assoc()){
                            $id = $row['food_id'];
                            $sql = "SELECT * FROM tbl_products WHERE food_id = '$id'";
                            $orders = $con->query($sql);
                            $rows = $orders->fetch_assoc();
                            ?>
                        <form method="post" action="process-orders.php">
                        <tr>
                            <td><?php echo $rows['name']?></td>
                            <td><?php echo $row['order_id']?></td>
                            <td><?php echo $row['quantity']?></td>
                            <td>Paid</td>
                            <td><button type="submit" name="accept" class="confirm" title="confirm" value="<?php echo $row['order_id']?>"><i class="fas fa-check fa-2x"></i></button><button type ="submit" name="cancel" class="confirm" title="cancel" value="<?php echo $row['order_id']?>"><i class="fas fa-times fa-2x"></i></button></td>
                        </tr>
                        </form>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
</body>
</html>