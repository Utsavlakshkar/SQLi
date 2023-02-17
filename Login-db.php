<?php 
    $name = $_GET["uname"];                
    $age = $_GET["password"];                                
    $con=mysqli_connect("localhost","root","","utsav");
    $sql="INSERT INTO student(Name,Age,Branch_ID) VALUES('".$name."','".$age."','".$branch."');";
    $result=$con->query($sql);
?>
