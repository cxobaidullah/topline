<?php
   require('top.inc.php');
   $Title = '';
   $preview = '';
   $thumbnil='';
   $msg = '';
   $image_required = 'required';
   if (isset($_GET['id']) && $_GET['id'] != '') {
      $id = get_safe_value($con, $_GET['id']);
      $res = mysqli_query($con, "select * from property_document where id=$id ");
      $check = mysqli_num_rows($res);
      if ($check > 0) {
         $row = mysqli_fetch_assoc($res);
         $Title = $row['title'];
         $preview = $row['pdf'];
         $thumbnil = $row['thumbnil'];
      } else {
         header('location:agent.php');
         die();
      }
   }
   if (isset($_POST['submit'])) {
      $Title = get_safe_value($con, $_POST['Title']);
      $project_id = get_safe_value($con, $_POST['project_id']);
      // $thumbnil = get_safe_value($con, $_POST['thumbnail']);
      $res = mysqli_query($con, "select * from property_document where title='$Title' ");
      $check = mysqli_num_rows($res);
      if (isset($_FILES['pdf'])) {
         $pdf = $_FILES["pdf"]["name"];
         $tempname = $_FILES["pdf"]["tmp_name"];
         $folder = "media/agent/" . $pdf;
         move_uploaded_file($tempname, $folder);
     }
     if (isset($_FILES['thumbnail'] )) {
      $thumbnil = rand(111111111, 999999999) . '_' . $_FILES['thumbnail']['name'];
      move_uploaded_file($_FILES['thumbnail']['tmp_name'], "media/agent/" . $thumbnil);
      }
      if ($check > 0 && !isset($_GET['id'])) {
         $msg = "Document already exists";
      } else {
         if (isset($_GET['id']) && $_GET['id'] != '') {
            $id = get_safe_value($con, $_GET['id']);
            if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] != UPLOAD_ERR_NO_FILE) {
               // $pdf = $_FILES["pdf"]["name"];
               // $tempname = $_FILES["pdf"]["tmp_name"];
               // $folder = "media/agent/" . $pdf;
               // move_uploaded_file($tempname, $folder);
               // if ($_FILES['thumbnail']['name'] != '') {
               //    $thumbnil = rand(111111111, 999999999) . '_' . $_FILES['thumbnail']['name'];
               //    move_uploaded_file($_FILES['thumbnail']['tmp_name'], "media/agent/" . $thumbnil);
               // }
              mysqli_query($con, "update property_document set title='$Title', pdf='$pdf',thumbnil='$thumbnil' where id='$id'");
            } else {
               mysqli_query($con, "update property_document set title='$Title' where id='$id'");
            }
         } else {
            $thumbnil = rand(111111111, 999999999) . '_' . $_FILES['thumbnail']['name'];
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], "media/agent/" . $thumbnil);
            mysqli_query($con, "insert into property_document(`title`,`pdf`,`project_id`,`status`,`thumbnil`) values ('$Title','$pdf','$project_id','1','$thumbnil')");
         }
         header('location:documents.php');
         die();
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
                     <!-- thumbnilll -->
                     <div class="form-group">
                        <label for="thumbnil" class=" form-control-label">Thumbnil </label>
                        <input type="file" name="thumbnail" class="form-control">
                        <?php 
                           if($thumbnil!=''){
                           ?>
                           <img src="media/agent/<?php echo $thumbnil?>" width="250px" height="150px" alt="">
                        <?php }
                        ?>	
                     </div>
                     <div class="form-group">
                        <label for="PDF" class=" form-control-label">PDF </label>
                        <input type="file" name="pdf" class="form-control">
                        <?php 
                           if($preview!=''){
                        ?>
                        <div style="margin-top:10px">
                           <a href="media/agent/<?php echo $preview?>">
                           <img src="media/agent/<?php echo $thumbnil?>" alt="" style="height:100px; width:100px;">
                           </a>
                        </div>
                        <?php 
                           }else{
                              echo "No Image";
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