<?php
require('../../connection.inc.php');


$name=$_POST['name'];
$email=$_POST['email'];
$qry="INSERT INTO `set_data` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";
$res=mysqli_query($con,$qry);
if($res== true){
$response="inserted";}
else{
$response="faild";
echo $response;
}

?>