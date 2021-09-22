<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/admin.css" />
    <title>Food items</title>
</head>
<body>
    <?php 
        require("admin-nav.php");
        $sql = "SELECT `food_id` ,`name`, `image`, `category`, `price` FROM `tbl_products`";
    ?>
    <!-- <form action="update-food.php" method="post"> -->
    <div class="details food">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Food Items</h2>
                <a href="addfood.php" class="btn">Add food</a>
            </div>
        <table class="cust_table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>ID</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("database.php");
                    $result = $con ->query($sql);
                        while($rows = $result ->fetch_assoc()){
                            $name = strval($rows['name']);
                            echo "<form method='post' action='update-food.php'>";
                            echo "<tr>"; 
                            echo "<td>".$name."</td>";
                            echo "<td>".$rows['category']."</td>";
                            echo "<td>".$rows['price']."</td>";
                            echo "<td>".$rows['food_id']."</td>";
                            echo '<td><button type = "submit" class = "edit_btn" name ="edit" value='.$rows['food_id'].'><i class="fas fa-pen"></i></button>
                                <button type = "submit" class = "del_btn" name ="delete2" value='.$rows['food_id'].'><i class="fas fa-trash-alt"></button></td>';
                            echo "</tr>";
                            echo "</form>"; 
                        }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!-- </form>  -->
</body>
</html>