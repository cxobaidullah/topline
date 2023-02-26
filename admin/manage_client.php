<?php
require('top.inc.php');
$name = '';
$mobile = '';
$email = '';
$designation = '';
$address = '';
$image1 = '';
$client_id = '';
if (isset($_POST['submit'])) {
    if ($_POST['client_id'] == '') {
        $name = get_safe_value($con, $_POST['name']);
        $mobile = get_safe_value($con, $_POST['mobile']);
        $email = get_safe_value($con, $_POST['email']);
        $designation = get_safe_value($con, $_POST['designation']);
        $address = get_safe_value($con, $_POST['address']);
        $select = "SELECT email from client";
        $run = mysqli_query($con, $select);
        while ($output = mysqli_fetch_assoc($run)) {
            if ($output['email'] == $email) { ?>
                <script>
                    alert('Email <?php echo $email ?> Already Exist');
                </script>image
<?php
            }
        }

        if (isset($_FILES['image'])) {
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "media/client/" . $image;
            move_uploaded_file($tempname, $folder);
        }
        $sql = "INSERT INTO `client`(`name`, `mobile`, `email`,`designation`, `address`, `image`, `status`) VALUES ('$name','$mobile','$email','$designation','$address','$image','1')";
        $res = mysqli_query($con, $sql);
        if ($res) {
            $_SESSION['Client_success_message'] = "Client Added Successfully";
            header('location:client.php');
        } else {
            $_SESSION['Client_error_message'] = "Fail To Add Client Type";
            header('location:client.php');
        }
    } else {
        $client_id = get_safe_value($con, $_POST['client_id']);
        $name = get_safe_value($con, $_POST['name']);
        $mobile = get_safe_value($con, $_POST['mobile']);
        $email = get_safe_value($con, $_POST['email']);
        $designation = get_safe_value($con, $_POST['designation']);
        $address = get_safe_value($con, $_POST['address']);
        if (isset($_FILES['image']) && !empty( $_FILES["image"]["name"] )) {
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "media/client/" . $image;
            move_uploaded_file($tempname, $folder);
            $update = "UPDATE client set name='$name',mobile='$mobile',email='$email',designation='$designation',address='$address',image='$image' where id='$client_id'";
        }else{
            $update = "UPDATE client set name='$name',mobile='$mobile',email='$email',designation='$designation',address='$address' where id='$client_id'";
        }
        $res = mysqli_query($con, $update);
        if ($res) {
            $_SESSION['success_message'] = "Update Successfully";
            header('location:client.php');
        } else {
            $_SESSION['error_message'] = "Failed To Update";
            header('location:client.php');
        }
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectdata = "SELECT * from client where id='$id'";
    $res = mysqli_query($con, $selectdata);
    while ($fetch = mysqli_fetch_assoc($res)) {
        $name = $fetch['name'];
        $mobile = $fetch['mobile'];
        $email = $fetch['email'];
        $designation = $fetch['designation'];
        $address = $fetch['address'];
        $image1 = $fetch['image'];
        $client_id = $id;
    }
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Team</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
                                <label for="Agent" class=" form-control-label">Client</label>
                                <input type="text" name="name" placeholder="Enter Client name" class="form-control" required value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Address" class=" form-control-label">Mobile</label>
                                <input type="text" name="mobile" placeholder="Enter Mobile No." class="form-control" required value="<?php echo $mobile; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Email</label>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control" required value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Designation</label>
                                <input type="text" name="designation" placeholder="Enter Designation" class="form-control" value="<?php echo $designation; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Address</label>
                                <input type="text" name="address" placeholder="Enter Address" class="form-control" value="<?php echo $address; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <?php if($image1){
                                ?> <img src="media/client/<?php echo $image1?>" style="height:150px;width:150px" alt="">
                            <?php }?>
                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                Submit
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>