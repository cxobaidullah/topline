<?php
require('connection.inc.php');
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT into contact_us(name,phone,email,comment) VALUE('$name','$phone','$email','$message')";
    $res=mysqli_query($con,$sql);
    if($res){
        echo json_encode('We will contact you soon. Thank you for your inquiry');
    }

?>