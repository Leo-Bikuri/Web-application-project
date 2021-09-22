<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flavours</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <body class="index">
    <?php
      session_start();
      $fName = $_SESSION['fName'];
      $lName = $_SESSION['lName'];
    ?>
  
    <header>
      <div class="container">
        <div class="logo">
          <h1>Flav<span>ours</span></h1>
        </div>
        <div class="currentDetails">
          <div class="header-option">
            <i data-feather="map-pin"></i>
            <span>Kenya</span>
          </div>
        </div>
        <div class="searchBar">
          <div class="header-option">
            <i data-feather="search"></i>
            <span>Search</span>
          </div>
          <div class="header-option" class="nav_cart">
            <a href="Cart.php"><span><i class="fas fa-shopping-basket fa-lg"></i></span></a>
          </div>
          <div class="header-option" class="nav_acc">
            <a href="account_details.php"><i class="fas fa-user-circle fa-lg"></i></i></a>
            <a href= "account_details.php"><?php echo $fName." ".$lName ?></a> 
          </div>
        </div>
      </div>
    </header>
   <?php
    require("database.php");
    $sql = "SELECT * FROM tbl_products";
    $result = $con ->query($sql);
    $x=0;
    while($rows = $result->fetch_assoc()){
    $data[$x] = $rows;
    $x++;
    }
   ?>
    <form method="post" action="orders.php">
    <div class="listings">
      <div class="container">
        <div class="header">
          <div class="header-title">
            <h2>Breakfast</h2>
            <span>For those early mornings. Order the day before to have it at your doorstep immediately you wake up</span>
          </div>
          <div class="header-viewOptions">
            <div class="viewAll">
              <span></span>
            </div>
          </div>
        </div>
        <div class="listings-grid">
          <?php

            $size = sizeof($data);
            for($x = 0; $x < $size;$x++){
              $row = $data[$x];
              if($x+1 < $size){
              $row2 = $data[$x+1];
              }
              if($x+2 < $size){
              $row3 = $data[$x+2];
              }
              
              instantiate_food(checkbreakfast($row), checkbreakfast($row2), checkbreakfast($row3));
              $x=$x+2;   
          }
          ?>
        </div>
      </div>
     </div>

  
     <div class="listings">
      <div class="container">
        <div class="header">
          <div class="header-title">
            <h2>Lunch</h2>
            <span>The fastest food to your door</span>
          </div>
          <div class="header-viewOptions">
            <div class="viewAll">
              <span></span>
            </div>
          </div>
        </div>
        <div class="listings-grid">
        <?php
            $size = sizeof($data);
            for($x = 0; $x < $size;$x++){
              $row = $data[$x];
              $row2 = $data[$x+1];
              $row3 = $data[$x+2];
              instantiate_food(checklunch($row), checklunch($row2), checklunch($row3));
              $x=$x+2;   
          }
          ?>
        </div>
      </div>
     </div>

    
     <div class="listings">
      <div class="container">
        <div class="header">
          <div class="header-title">
            <h2>Special offers</h2>
            <span>The fastest food to your door</span>
          </div>
          <div class="header-viewOptions">
            <div class="viewAll">
              <span></span>
            </div>
          </div>
        </div>
        <div class="listings-grid">
        <?php
            $size = sizeof($data);
            for($x = 0; $x < $size;$x++){
              $row = $data[$x];
              $row2 = $data[$x+1];
              $row3 = $data[$x+2];
              instantiate_food(checklunch($row), checklunch($row2), checklunch($row3));
              $x=$x+2;   
          }
          ?>
        </div>
      </div>
    </div>
        </form>

    <script src="/scripts/main.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>