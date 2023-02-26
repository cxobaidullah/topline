<?php
require('top.inc.php');
    $admin_id = get_safe_value($con, $_POST['admin_id']);
    $name = get_safe_value($con, $_POST['name']);

    if (isset($_FILES['image'])) {
        $image = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "media/admin/" . $image;
        move_uploaded_file($tempname, $folder);
    }
    if (isset($_FILES['image'])){
        $sql = "UPDATE `admin_user` set `username`='$name', image='$image' where id='$admin_id'";
    }else{
        $sql = "UPDATE `admin_user` set `username`='$name' where id='$admin_id'";
    }
    $res = mysqli_query($con, $sql);
    if ($res) {
        $_SESSION['profile_successs'] = "Profile Updated";
        header('location:profile.php');
    } else {
        $_SESSION['profile_error'] = "Fail To Update Profile";
        header('location:profile.php');
    }

?>