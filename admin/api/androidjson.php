<?php
require('../../connection.inc.php');
$qry="select * from properties";
$raw=mysqli_query($con,$qry);
while($res=mysqli_fetch_array($raw)){
    $data[]=$res;
}
print(json_encode($data));


?>