<?php
require('top.inc.php');
$Title = '';
$pdf='';
$msg = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
   $id = get_safe_value($con, $_GET['id']);
   $res = mysqli_query($con, "select * from property_document where id=$id ");
   $check = mysqli_num_rows($res);
   if ($check > 0) {
      $row = mysqli_fetch_assoc($res);
      $Title = $row['title'];
      
   } else {
      header('location:agent.php');
      die();
   }
}
if (isset($_POST['submit'])) {
   $Title = get_safe_value($con, $_POST['Title']);
   $project_id = get_safe_value($con, $_POST['project_id']);
   $res = mysqli_query($con, "select * from property_document where title='$Title' ");
   $check = mysqli_num_rows($res);
   if (isset($_FILES['pdf'])) {
      $pdf = $_FILES["pdf"]["name"];
      $tempname = $_FILES["pdf"]["tmp_name"];
      $folder = "media/agent/" . $pdf;
      move_uploaded_file($tempname, $folder);
  }
   if ($msg == '') {
      if (isset($_GET['id']) && $_GET['id'] != '') {
         if (isset($_FILES['pdf'])) {
            $pdf = $_FILES["pdf"]["name"];
            $tempname = $_FILES["pdf"]["tmp_name"];
            $folder = "media/agent/" . $pdf;
            move_uploaded_file($tempname, $folder);
            mysqli_query($con, "update property_document set title='$Title',pdf='$pdf' where id='$id'");
        }else{
         mysqli_query($con, "update property_document set title='$Title',pdf='$pdf', where id='$id'");
        }
      } else {
         if ($check > 0) {
            if (isset($_GET['id']) && $_GET['id'] != '') {
               $getData = mysqli_fetch_assoc($res);
               if ($id == $getData['id']) {
               } else {
                  $msg = "Agent already exist";
               }
            } else {
               $msg = "Agent already exist";
            }
         }

         mysqli_query($con, "insert into property_document(title,pdf,project_id,status) values('$Title','$pdf','$project_id','1')");
      }
      header('location:documents.php');
   }
}





?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Title</strong><small> Form</small></div>
               <form method="post" enctype="multipart/form-data">
                  <div class="card-body card-block">
                     <div class="form-group">
                        <label for="Title" class=" form-control-label">Title</label>
                        <input type="text" name="Title" placeholder="Enter Title" class="form-control" required value="<?php echo $Title ?>">
                     </div>
                     <div class="col-lg-4">
									<div class="form-group">
										<label for="Project" class=" form-control-label">Project</label>
										<select class="form-control" name="project_id" required>
											<option>Select Project</option>
											<?php
											 $res = mysqli_query($con, "select * from projects order by property_id desc");
											while ($row = mysqli_fetch_assoc($res)) {
													echo "<option selected value=" . $row['property_id'] . ">" . $row['property_title'] . "</option>";
												
											}
											?>
										</select>
									</div>
								</div>
                  
                     <div class="form-group">
                        <label for="Email" class=" form-control-label">PDF </label>
                        <input type="file" name="pdf" class="form-control">
                        <?php if(isset($row['pdf'])){?>
                        <img src="media/agent/<?php echo $row['pdf']?>" height="100px" width="100px" alt="">
                     <?php }else{
                    
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