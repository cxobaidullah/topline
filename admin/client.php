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
       $update_status_sql = "update client set status='$status' where id='$id'";
       $res = mysqli_query($con, $update_status_sql);
       if ($res) {
          $_SESSION['client_success_message'] = "Status Change Successfully";
          header('location:client.php');
       } else {
          $_SESSION['client_error_message'] = "Fail To Change Status";
          header('location:client.php');
       }
    }
    if ($type == 'delete') {
       $id = $_GET['id'];
       $sql = "DELETE from `client`where id='$id'";
       $res = mysqli_query($con, $sql);
       if ($res) {
          $_SESSION['delete_success_message'] = "Delete Successfully";
          header('location:client.php');
       } else {
          $_SESSION['delete_error_message'] = "Fail To Delete";
          header('location:client.php');
       }
    }
} 
$sql = "select * from  client order by id desc";
$res = mysqli_query($con, $sql);
$count=mysqli_num_rows($res);
?>

<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Team</h4>
                  <div>
                     <a href="manage_client.php" class="btn btn-primary btn-right">Add</a>
                  </div>
               </div>
               <?php
               if (isset($_SESSION['Client_success_message'])) {
               ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?php echo $_SESSION['Client_success_message'];
                     unset($_SESSION["Client_success_message"]);
                     ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['Client_error_message'])) {
               ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php $_SESSION['Client_error_message'];
                     unset($_SESSION["Client_error_message"]); ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['client_success_message'])) {
               ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?php echo $_SESSION['client_success_message'];
                     unset($_SESSION["client_success_message"]);
                     ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['client_error_message'])) {
               ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php $_SESSION['client_error_message'];
                     unset($_SESSION["client_error_message"]); ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['delete_success_message'])) {
               ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <?php echo $_SESSION['delete_success_message'];
                     unset($_SESSION["delete_success_message"]);
                     ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php } ?>
               <?php
               if (isset($_SESSION['delete_error_message'])) {
               ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <?php $_SESSION['delete_error_message'];
                     unset($_SESSION["delete_error_message"]); ?>
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
                              <th>Name</th>
                              <th>Email</th>
                              <th>Designation</th>
                              <th>Mobile</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i = 1;
                           if ($count<1) {
                            echo "<tr><td>No Data Found</td></tr>";
                         } else {
                           while ($row = mysqli_fetch_assoc($res)) {
                        ?>      
                                 <tr>
                                    <td class="serial"><?php echo $i ?>
                                    </td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                       <?php 
                                          echo substr(ucfirst($row['designation']),0,40);
                                          if(strlen($row['designation'])>40){
                                             echo '...';
                                          }
                                       ?>
                                    </td>
                                    <td><?php echo $row['mobile'] ?></td>
                                    <td><img src="media/client/<?php echo $row['image'] ?>" alt=""></td>
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

                                       echo "<span class='badge badge-edit'><a href='manage_client.php?id=" . $row['id'] . "'>
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