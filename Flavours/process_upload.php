<?php
if(isset($_POST['addfood'])){
    $file = $_FILES["food-image"];
    $original_file_name = $_FILES["food-image"]["name"];
    print_r($file);

    
}
?>