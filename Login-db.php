<?php 
    $uname = $_GET["uname"];                
    $password = $_GET["password"];                                
    $con=mysqli_connect("localhost","root","","test");
    $sql="SELECT order_id,item_name FROM `purchase` WHERE user_id=(SELECT user_id FROM users WHERE user_name='".$uname."')and user_id=(SELECT user_id FROM passkeys WHERE passk='".$password."');";
    $result=$con->query($sql);
    if($result->num_rows>0){
        echo "Login Successful";
    }
    else{
        echo "Invalid Login Username or Password";
    }
?>
