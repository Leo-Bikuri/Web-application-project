<?php
if(!function_exists('status')){
    function status($status){
        if($status = true){
            echo '<script>alert("Task completed")</script>';
        }else{
            echo '<script>alert("Task failed")</script>';
        }

        }
    }

    if(!function_exists('admin_readcust')){
        function admin_readcust($statement){
                require("database.php");
                $result = $con ->query($statement);
                    while($rows = $result ->fetch_assoc()){
                        echo "<tr>"; 
                        echo "<td>".$rows['fName']." ".$rows['lName']."</td>";
                        echo "<td>".$rows['email']."</td>";
                        echo "<td>".$rows['tel_no']."</td>";
                        echo "<td>".$rows['customer_id']."</td>";
                        echo '<td><button type = "submit" class = "del_btn" name ="delete" value='.$rows['customer_id'].'><i class="fas fa-trash-alt"></button></td>';
                        echo "</tr>"; 
                    }
        }
    }

    if(!function_exists('readadmins')){
        function readadmins($statement){
                require("database.php");
                $result = $con ->query($statement);
                    while($rows = $result ->fetch_assoc()){
                        echo "<tr>"; 
                        echo "<td>".$rows['name']."</td>";
                        echo "<td>".$rows['email']."</td>";
                        echo "<td>".$rows['tel-no']."</td>";
                        echo "<td>".$rows['admin-id']."</td>";
                        echo '<td><button type = "submit" class = "del_btn" name ="delete" value='.$rows['admin-id'].'><i class="fas fa-trash-alt"></button></td>';
                        echo "</tr>"; 
                    }
        }
    }
    if(isset($_POST["delete"])){
        require("database.php");
        $id = (int)$_POST['delete'];
        $sql = "DELETE FROM `flavours_cust` WHERE customer_id = $id";
        $sql2 = "DELETE FROM `tbl_products` WHERE food_id = $id";
        if($result = $con ->query($sql)){
            echo "<script>alert('Action compeleted');
            window.location.href='a_fooditems.php';
    </script>";
        }elseif($result = $con->query($sql2)){
            echo "<script>alert('Action completed');
                    window.location.href='a_fooditems.php';
            </script>";
        }
    }


    if(isset($_POST['register'])){
        require_once('database.php');
        $txtname = $_POST['fName'];
        $txtemail = $_POST['email'];
        $txtnumber = $_POST['tel_number'];
        $txtpassword = $_POST['password'];
        $txtconfrim = $_POST['confirm_password'];
        if($txtpassword != $txtconfrim){
            echo '<script>alert("Password do no match")</script>';
            header("Location:admin_registration.php"); 
        }else{
            $register_admin = "INSERT INTO `admins`(`name`, `email`, `tel-no`, `password`)VALUES('$txtname', '$txtemail', '$txtnumber', '$txtpassword');";
            $status = write($register_admin);
            if($status == true){
                echo '<script>alert("New admin added")</script>';
                header("Location:admin_registration.php");
            }
    
        }
    }
    
    if(isset($_POST["addfood"])){
        $file = $_FILES['food-image'];
        $target_dir="food_images/";

        $newname = $_POST['image-name'].".jfif";
        $_FILES['food-image']['name'] = $newname;

        $target_file = $target_dir . basename($_FILES['food-image']['name']);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $check = getimagesize($_FILES['food-image']['tmp_name']);
        if($check !== false){
            $uploadOk = 1;
        }else{
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif"){
            $uploadOk=0;
        }

        if($uploadOk == 0){
            echo "<script>alert('Upload failed')</script>";
        }else{
            move_uploaded_file($_FILES['food-image']["tmp_name"], $target_file);
        }

        $txtname = $_POST['name'];
        $txtimage = $_FILES['food-image']['name'];
        $txtcategory = $_POST['category'];
        $price = (int)$_POST['price'];
        $addfood = "INSERT INTO `tbl_products`(`name`, `image`, `category`, `price`)VALUES('$txtname', '$txtimage', '$txtcategory', '$price');";
        require_once("database.php");
        if($result = $con ->query($addfood)){
            header("Location:a_fooditems.php");
        }
    
    }

    if(isset($_POST['cancel'])){
        $id = $_POST['cancel'];
        $sql = "UPDATE `orders` SET `status` = 'Cancelled' WHERE `order_id` = $id";
        require_once('database.php');
        if($result = $con->query($sql)){
            header("Location:admin_orders.php");
        }
    }elseif(isset($_POST['accept'])){
        $id = $_POST['accept'];
        $sql = "UPDATE `orders` SET `status` = 'Complete' WHERE `order_id` = $id";
        require_once('database.php');
        if($result = $con->query($sql)){
            header("Location:admin_orders.php");
        }
    }

    if(isset($_POST['update-food'])){
        $id = (int)$_POST['update-food'];
        $file = $_FILES['food-image'];
        $target_dir="food_images/";

        $newname = $_POST['image-name'].".jfif";
        $_FILES['food-image']['name'] = $newname;

        $target_file = $target_dir . basename($_FILES['food-image']['name']);

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $check = getimagesize($_FILES['food-image']['tmp_name']);
        if($check !== false){
            $uploadOk = 1;
        }else{
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif"){
            $uploadOk=0;
        }

        if($uploadOk == 0){
            echo "<script>alert('Upload failed')</script>";
        }else{
            move_uploaded_file($_FILES['food-image']["tmp_name"], $target_file);
        }

        $txtname = $_POST['name'];
        $txtimage = $_FILES['food-image']['name'];
        $txtcategory = $_POST['category'];
        $price = (int)$_POST['price'];
        $addfood = "UPDATE `tbl_products` SET `name` = '$txtname', `image` = '$txtimage', `category` = '$txtcategory', `price` = '$price' WHERE `food_id` = $id";
        require_once("database.php");
        if($result = $con ->query($addfood)){
            echo "<script>alert('Food item updated successfully');
                    window.location.href='a_fooditems.php';
            </script>";
        }else{
            echo "<script>alert('Food item updated failed');
                    window.location.href='a_fooditems.php';
            </script>";
        }
        
    }
    
?>
