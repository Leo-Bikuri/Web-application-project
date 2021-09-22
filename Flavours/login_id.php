<?php
session_start();
    require("database.php");

    if(isset($_POST["Login"])){
        if(empty($_POST["email"]) || empty($_POST["password"])){
            header("location:Login.php");
            exit();
        }else{
            $myemail = $_POST['email'];
            $mypassword = $_POST['password'];
    
        
            $customer_sql = "SELECT customer_id, fName, lName FROM flavours_cust WHERE email = '$myemail' and password = '$mypassword'";
            $admin_sql = "SELECT `admin-id`, `name` FROM admins WHERE email = '$myemail' and password = '$mypassword'";
            
            
            
            
                $adminresult = $con->query($admin_sql);
                $result = $con->query($customer_sql);
                if($adminresult->num_rows==1){
                    $row = $adminresult-> fetch_assoc();
                    $_SESSION['user_id'] = $row["admin-id"];
                    $_SESSION['name'] = $row['name'];
                    header("Location:admin.php");
                }elseif($result->num_rows == 1){
                    $row = $result-> fetch_assoc();
                    $_SESSION['user_id'] = $row["customer_id"];
                    $_SESSION['fName'] = $row['fName'];
                    $_SESSION['lName'] = $row['lName'];
                    header("Location:Index.php");
                }else{                 
                    header("Location:Login.php"); 
                }
         }
    }
    

?>
