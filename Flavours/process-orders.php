<?php
    $id = 0;
    if(isset($_POST['cancel'])){
        $id = (int)$_POST['cancel'];
        $sql = "UPDATE `orders` SET `status` = 'Cancelled' WHERE `order_id` = $id";
        require_once('database.php');
        if($result = $con->query($sql)){
            header("Location:admin_orders.php");
        }
    }elseif(isset($_POST['accept'])){
        $id = (int)$_POST['accept'];
        $sql = "UPDATE `orders` SET `status` = 'Complete' WHERE `order_id` = $id";
        require_once('database.php');
        if($result = $con->query($sql)){
            header("Location:admin_orders.php");
        }
    }
?>