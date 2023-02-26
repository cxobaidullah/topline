<?php
require('top.inc.php');
$email = $_SESSION['ADMIN_EMAIL'];
$sql = "SELECT * from admin_user where role='admin' and email='$email'";
$res = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $admin_id = $row['id'];
    $name = $row['username'];
    $email = $row['email'];
    $image = $row['image'];
    $role = $row['role'];
}
if(isset($_POST['submit'])){
    $old = get_safe_value($con, $_POST['old']);
    $new = get_safe_value($con, $_POST['new']);
    $confirm = get_safe_value($con, $_POST['confirm']);
    $admin_id = get_safe_value($con, $_POST['admin_id']);

    $sql = "SELECT * from admin_user where id='$admin_id'";
    $res = mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($res)){
        $old1=$row['password'];
    }
    if($old1!=$old){
        $_SESSION['password_error'] = "You enter invalid password";
        header('location:profile.php');
    }else{
        
        if($new!=$confirm){
            $_SESSION['password_error'] = "New Password and Confirm Password Not Matched";
            header('location:profile.php');
        }else{
            $update="UPDATE admin_user set password ='$new' where id='$admin_id'";
            $res=mysqli_query($con,$update);
            if($res){
                
                $_SESSION['password_successs']="Password Change Successsfully";
                header('location:profile.php');
            }else{
                $_SESSION['password_error']="Failed To Change Password";
                header('location:profile.php');
            }         
        }
    }

}
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Profile</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="media/admin/<?php echo $image ?>" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $name ?></h3>
                        <p class="text-muted text-center"><?php echo $role ?></p>
                        <!-- <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                    </div>

                </div>


            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Password</a></li>
                        </ul>
                    </div>

                    <?php
                    if (isset($_SESSION['profile_successs'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['profile_successs'];
                            unset($_SESSION["profile_successs"]);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['profile_error'])) {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php $_SESSION['profile_error'];
                            unset($_SESSION["profile_error"]); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['password_successs'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['password_successs'];
                            unset($_SESSION["password_successs"]);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['password_error'])) {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php $_SESSION['password_error'];
                            unset($_SESSION["password_error"]); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <form class="form-horizontal" method="POST" action="manage_profile.php" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="<?php echo $name ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="admin_id" value="<?php echo $admin_id ?>">
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" disabled class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image" id="inputName2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="timeline">

                            <form class="form-horizontal" method="POST" action="">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="old" class="form-control" id="inputName" placeholder="Old Password">
                                        </div>
                                    </div>
                                    <input type="hidden" name="admin_id" value="<?php echo $admin_id ?>">
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="new" class="form-control" id="inputEmail" placeholder="New Password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" id="inputName2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<?php
require('footer.inc.php');
?>