<?php
require('top.inc.php');
$Agent = '';
$Address = '';
$Contact = '';
$Email = '';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
   $id = get_safe_value($con, $_GET['id']);
   $res = mysqli_query($con, "select * from agent where agent_id=$id ");
   $check = mysqli_num_rows($res);
   if ($check > 0) {
      $row = mysqli_fetch_assoc($res);
      $Agent = $row['agent_name'];
      $Address = $row['agent_address'];
      $Contact = $row['agent_contact'];
      $Email = $row['agent_email'];
   } else {
      header('location:agent.php');
      die();
   }
}
if (isset($_POST['submit'])) {
   $Agent = get_safe_value($con, $_POST['Agent']);
   $Address = get_safe_value($con, $_POST['Address']);
   $Contact = get_safe_value($con, $_POST['Contact']);
   $Email = get_safe_value($con, $_POST['Email']);
   $res = mysqli_query($con, "select * from agent where agent_name='$Agent' ");
   $check = mysqli_num_rows($res);
   if ($check > 0) {
      if (isset($_GET['agent_id']) && $_GET['agent_id'] != '') {
         $getData = mysqli_fetch_assoc($res);
         if ($id == $getData['agent_id']) {
         } else {
            $msg = "Agent already exist";
         }
      } else {
         $msg = "Agent already exist";
      }
   }
   if (isset($_FILES['image'])) {
      $image = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "media/agent/" . $image;
      move_uploaded_file($tempname, $folder);
  }
   if ($msg == '') {
      if (isset($_GET['id']) && $_GET['id'] != '') {
         if (isset($_FILES['image'])) {
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "media/agent/" . $image;
            move_uploaded_file($tempname, $folder);
            mysqli_query($con, "update agent set agent_name='$Agent',agent_address='$Address',agent_contact='$Contact',agent_email='$Email',image='$image' where agent_id='$id'");
        }else{
         mysqli_query($con, "update agent set agent_name='$Agent',agent_address='$Address',agent_contact='$Contact',
      agent_email='$Email' where agent_id='$id'");
        }
      } else {

         mysqli_query($con, "insert into agent(agent_name,agent_address,
    agent_contact,agent_email,image) values('$Agent','$Address',
    '$Contact','$Email','$image')");
      }
      header('location:agent.php');
      die();
   }
}



?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Agent</strong><small> Form</small></div>
               <form method="post" enctype="multipart/form-data">
                  <div class="card-body card-block">
                     <div class="form-group">
                        <label for="Agent" class=" form-control-label">Agent</label>
                        <input type="text" name="Agent" placeholder="Enter Agent name" class="form-control" required value="<?php echo $Agent ?>">
                     </div>
                     <div class="form-group">
                        <label for="Address" class=" form-control-label">Address</label>
                        <input type="text" name="Address" placeholder="Enter Address" class="form-control" required value="<?php echo $Address ?>">
                     </div>

                     <div class="form-group">
                        <label for="Contact" class=" form-control-label">Contact</label>
                        <input type="text" name="Contact" placeholder="Enter Contact" class="form-control" required value="<?php echo $Contact ?>">
                     </div>
                     <div class="form-group">
                        <label for="Email" class=" form-control-label">Email</label>
                        <input type="text" name="Email" placeholder="Enter Email" class="form-control" required value="<?php echo $Email ?>">
                     </div>
                     <div class="form-group">
                        <label for="Email" class=" form-control-label">Image</label>
                        <input type="file" name="image" class="form-control" required>
                        <?php if(isset($row['image'])){?>
                        <img src="media/agent/<?php echo $row['image']?>" height="100px" width="100px" alt="">
                     <?php }else{
                     // echo "No Image";
                  }
                        ?>
                     </div>
                     <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">Submit</span>
                     </button>
                     <div class="field_error"><?php echo $msg ?></div>
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