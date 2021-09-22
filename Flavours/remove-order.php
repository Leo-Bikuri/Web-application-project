<?php

if(isset($_POST['remove'])){
    $id = $_POST['remove'];
    $sql = "DELETE FROM `orders` WHERE `order_id` = $id";
    require("database.php");
    $result = $con->query($sql);

    if($result !== false){
        header("Location:Cart.php");
    }
}

?>