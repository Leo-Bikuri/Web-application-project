<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/admin.css" />
    <title>Customer information</title>
</head>
<body>
    <?php 
        require("admin-nav.php");
        $sql = "SELECT `customer_id` ,`fName`, `lName`, `email`, `tel_no` FROM `flavours_cust`";
        require_once("adminmethods.php");
        
    ?>
    
    <div class="details customer">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Customers</h2>
                <a href="#" class="btn">View all</a>
            </div>
            <form action="adminmethods.php" method="post">
        <table class="cust_table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Number</td>
                    <td>ID</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                   admin_readcust($sql);
                ?>
            </tbody>
        </table>
</form> 
        </div>
    </div>
</body>
</html>