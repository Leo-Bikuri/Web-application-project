<?php
if(isset($_POST['order'])){
    $id = (int)$_POST['order'];
    $getprice = "SELECT `price` FROM `tbl_products` WHERE `food_id` = $id";
    require("database.php");
    $results = $con->query($getprice);
    $row = $results->fetch_assoc();
    $price = $row['price'];
    session_start();
    $customer_id = (int)$_SESSION['user_id'];
    echo $id;
    echo "<br>";
    echo $customer_id;
    echo "<br>";
    
      $checkorder = "SELECT `quantity` FROM `orders` WHERE `food_id` = $id and `customer_id` = $customer_id and `status` = 'Pending'";
      $check = $con->query($checkorder);
         if($check->num_rows == 1){
         $row = $check->fetch_assoc();
         $quantity = $row['quantity'];
         $quantity = $quantity + 1;
         $update_quantity = "UPDATE `orders` SET `quantity` = $quantity WHERE `customer_id` = $customer_id and  `food_id` = $id and `status` = 'Pending'";
         $newresult = $con->query($update_quantity);
         if ($newresult !== false) {
            header("Location:index.php");
         } else {
            header("Location:index.php");
         }
      }else{
         $result = $con->query("INSERT INTO `orders`(`food_id`, `customer_id`, `quantity`, `price`, `status`)VALUES($id, $customer_id, 1, $price, 'Pending')");
         if ($result !== false) {
            header("Location:index.php");
         } else {
            echo "<script>alert('Failure')</script>";
         }
   }
}
?>