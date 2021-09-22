<?php
require_once("database.php");

if(isset($_POST['sign_up'])){
$txtfName = $_POST['fName'];
$txtlName = $_POST['lName'];
$txtemail = $_POST['email'];
$txttel_number = $_POST['tel_number'];
$txtaddress = $_POST['address'];
$txtpass = $_POST['password'];

$registerquery = "INSERT INTO `flavours_cust`(`fName`, `lName`, `email`, `tel_no`, `address`, `password`)VALUES('$txtfName', '$txtlName', '$txtemail', '$txttel_number', '$txtaddress', '$txtpass');";

$status = write($registerquery);

if($status == true){
    header("Location:Login.php");
}
}

if(isset($_POST['update_user'])){
    session_start();
    $id = (int)$_SESSION['user_id'];
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['email'];
    $number = $_POST['tel_number'];
    $address = $_POST['address'];
    $sql = "UPDATE `flavours_cust` SET `fName` = '$fname', `lName` = '$lname', `email` = '$email', `tel_no` = '$number', `address` = '$address' WHERE `customer_id` = $id"; 
    require("database.php");
    if($result = $con->query($sql)){
        header("Location:account_details.php");
    }
    else{
        echo "Fail";
    }
    
}

    
?>