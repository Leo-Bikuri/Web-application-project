
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <title>Document</title>
</head>
<body>
    <?php
    require("database.php");
$sql = "SELECT * FROM tbl_products";
$result = $con ->query($sql);
$x=0;
while($rows = $result->fetch_assoc()){
    $data[$x] = $rows;
    $x++;
}
$count = sizeof($data);
echo $count;
// echo "<pre>";
// print_r($data);
// echo "</pre>";
for($y = 0;$y<$count; $y++){
    $row = $data[$y];
    $row2 = $data[$y+1];
    $row3 = $data[$y+2];
    $y=$y+2;
    instantiate_food($row, $row2, $row3);
}

    ?>
</body>
</html>
