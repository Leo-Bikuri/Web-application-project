<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css?dt=<%= DateTime.Now.Ticks %>" type="text/css"/>
    <title>Sales</title>
</head>
<body>
    <?php
        require("admin-nav.php");
        $sql = "SELECT * FROM orders";
        require("database.php");
        $order = $con->query($sql)    
    ?>
    <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Sale items</h2>
                    </div>
                    <form method="post" action="adminmethods.php">
                <table>
                    <thead>
                        <tr>
                            <td>Customer name</td>
                            <td>Customer ID</td>
                            <td>Food item</td>
                            <td>Quantity</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row = $order->fetch_assoc()){
                            $u_id = $row['customer_id'];
                            $id = $row['food_id'];
                            $sql = "SELECT * FROM tbl_products WHERE food_id = $id";
                            $orders = $con->query($sql);
                            $rows = $orders->fetch_assoc();
                            $query = "SELECT * FROM flavours_cust WHERE customer_id = $u_id";
                            $customer = $con->query($query);
                            $line = $customer->fetch_assoc();

                            ?>
                        <tr>
                            <td><?php echo $line['fName']." ".$line['lName'] ?></td>
                            <td><?php echo $line['customer_id']?></td>
                            <td><?php echo $rows['name']?></td>
                            <td><?php echo $row['quantity']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </form>
                </div>
            </div>
</body>
</html>