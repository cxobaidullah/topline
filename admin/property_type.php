<?php
require('top.inc.php');

if (isset($_GET['type']) && $_GET['type'] != '') {
   $type = get_safe_value($con, $_GET['type']);
   if ($type == 'status') {
      $operation = get_safe_value($con, $_GET['operation']);
      $id = get_safe_value($con, $_GET['id']);
      if ($operation == 'active') {
         $status = '1';
      } else {
         $status = '0';
      }
      $update_status_sql = "update property_type set status='$status' where id='$id'";
      $res = mysqli_query($con, $update_status_sql);
      if ($res) {
         $_SESSION['status_success_message'] = "Status Change Successfully";
         header('location:property_type.php');
      } else {
         $_SESSION['status_error_message'] = "Fail To Change Status";
         header('location:property_type.php');
      }
   }
   if ($type == 'delete') {
      $id = $_GET['id'];
      $sql = "DELETE from `property_type`where id='$id'";
      $res = mysqli_query($con, $sql);
      if ($res) {
         $_SESSION['success_message'] = "Delete Successfully";
         header('location:property_type.php');
      } else {
         $_SESSION['error_message'] = "Fail To Delete";
         header('location:property_type.php');
      }
   }
}
$sql = "select * from  property_type order by id desc";
$res = mysqli_query($con, $sql);
?>

<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Property</h4>
                  <div>
                     <a href="manage_property_type.php" class="btn btn-primary btn-right">Add Property Type</a>
                  </div>
               </div>
               <?php
               if (isset($_SESSION['success_message'])) {
               ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?php echo $_SESSION['success_message'];
                     unset($_SESSION["success_message"]);
                     ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['error_message'])) {
               ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php $_SESSION['error_message'];
                     unset($_SESSION["error_message"]); ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['status_success_message'])) {
               ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?php echo $_SESSION['status_success_message'];
                     unset($_SESSION["status_success_message"]);
                     ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['status_error_message'])) {
               ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php $_SESSION['status_error_message'];
                     unset($_SESSION["status_error_message"]); ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              <th class="serial">#</th>
                              <th>ID</th>
                              <th>Property Type</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i = 1;
                           while ($row = mysqli_fetch_assoc($res)) {
                              if ($row['id'] == '') {
                                 echo "<tr>No Data Found</tr>";
                              } else {
                           ?>
                                 <tr>
                                    <td class="serial"><?php echo $i ?>
                                    </td>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['property_type'] ?></td>
                                    <td>

                                       <div class="dropdown show">
                                          <?php if ($row['status'] == 1) {
                                          ?>
                                             <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Active
                                             </button>

                                          <?php } else {
                                          ?>
                                             <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Deactive
                                             </button>
                                          <?php
                                          }
                                          ?>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="?type=status&&operation=active&&id=<?php echo $row['id'] ?>">Active</a>
                                             <a class="dropdown-item" href="?type=status&&operation=deactive&&id=<?php echo $row['id'] ?>">Deactive</a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- <?php echo $row['status'] ?> -->
                                       <?php

                                       echo "<span class='badge badge-edit'><a href='manage_property_type.php?id=" . $row['id'] . "'>
                                           Edit</a></span>&nbsp;&nbsp;";
                                       ?>
                                       <button class='badge badge-delete' data-toggle='modal' data-target='#delete_modal<?php echo $row['id'] ?>'>Delete</button>


                                    </td>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="delete_modal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <div class="modal-body">
                                                <p>Are you sure to delete this?</p>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <?php
                                                echo "<a href='?type=delete&id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                                                ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php }
                           } ?>
                                 </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
require('footer.inc.php');
?>