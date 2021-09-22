<?php
    $id = 0; 
    $row = 0;
    if(isset($_POST["delete2"])){
        require("database.php");
        $id = (int)$_POST['delete2'];
        $sql2 = "DELETE FROM `tbl_products` WHERE food_id = $id";
        if($result = $con->query($sql2)){
            header("Location:a_fooditems.php");
        }
    }elseif(isset($_POST['edit'])){
        $id = (int)$_POST['edit'];
        $sql = "SELECT * FROM `tbl_products` WHERE `food_id` = $id";
        require("database.php");
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
    }
?>
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
    ?>

    <div class ="details customer">
        <div class = "recentOrders food">
            <div class = "cardHeader">
                <h2>Edit food</h2>
            </div>
            <form class = "form" action="adminmethods.php" method="post" enctype="multipart/form-data">
            <div class="food_details">
                <div class = "content">
                <label for="file" id="uploadBtn">Choose photo</label>
                <input type="file" id = "file" name="food-image">
                </div>
                <div class="content">
                    <input type="text" placeholder="Food title" name="name" class="food-name" value="<?php echo $row['name']?>"><br>
                </div>
                <div class = "content">
                    <input type="text" placeholder="Image label" name="image-name" class="image-name" value="<?php echo $row['image']?>"><br>   
                </div>
                <div class="content">
                    <select id="category" name="category" value="<?php echo $row['category']?>">
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                    </select><br>
                </div>
                <div class="content">
                    <input type="text" placeholder="Price" name="price"  class="food-price" value="<?php echo $row['price']?>">
                                <br><button class="submit_btn" type="submit" name="update-food" value = "<?php echo $id ?>">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</form>
    
</body>
</html>