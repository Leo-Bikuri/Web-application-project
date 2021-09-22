<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<?php
session_start();
$user_id = (int)$_SESSION['user_id'];
    $getorders = "SELECT * FROM `orders` where customer_id = '$user_id' and status = 'Pending'";
    require_once("database.php");
    $results = $con->query($getorders);
    $foodtotal = 0;
?>
<body class="cartboundaries">
    <header>
        <div class="container">
          <div class="logo">
            <h1>Flav<span>ours</span></h1>
          </div>
          <div class="currentDetails">
            <div class="header-option">
              <span><i class="fas fa-map-marker-alt"></i>  Kenya</span>
            </div>
          </div>
          <div class="searchBar">
            <div class="header-option">
              <span><i class="fas fa-search"></i>  Search</span>
            </div>
            <div class="header-option">
              <a href="Index.html"><span>Back</span></a>
            </div>
          </div>
        </div>
      </header>

    <form action = "remove-order.php" method = "post">
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>
                    Product
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Subtotal
                </th>
            </tr>
            <form>
            <?php
            while($rows = $results->fetch_assoc()){
                $id = $rows['food_id'];
                $sql = "SELECT * FROM tbl_products WHERE food_id = '$id'";
                $orders = $con->query($sql);
                $row = $orders->fetch_assoc();
                
            ?>
            <tr>
                <td>
                    <div class='cart-info'>
                        <img src=<?php echo 'food_images/'.$row['image']?> alt="">
                         <div>
                            <p>
                                <?php echo $row['name']?>
                            </p>
                                <small>Price: <?php echo $row['price'] ?></small>
                                <br>
                                <button type="submit" class = "rmv_btn" name="remove" value="<?php echo $rows['order_id']?>">Remove</button>
                         </div>
                    </div>
                </td>
                <td>
                    <p><?php echo $rows['quantity']?></p>
                </td>
                <td>
                    <?php $subtotal = (int)$row['price']*(int)$rows['quantity'];
                          $foodtotal = $foodtotal + $subtotal;  
                    ?>
                    KSH <?php echo $subtotal ?>
                </td>
            </tr>
            <?php } ?>
            
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>KSH <?php echo $foodtotal ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>KSH 250</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <?php $total = $foodtotal + 250; ?>
                    <td>KSH <?php echo $total ?></td>
                </tr>
            </table>
        </div>
    </div>
            </form>
    <div class="checkout_btn"> 
    <a href="thankyou.php"><button type="button">Checkout</button></a>
    </div>
</body>
</html>