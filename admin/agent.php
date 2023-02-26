<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
 $type=get_safe_value($con,$_GET['type']);
	// if($type=='status'){
	// 	$operation=get_safe_value($con,$_GET['operation']);
	// 	$id=get_safe_value($con,$_GET['id']);
	// 	if($operation=='active'){
	// 		$status='1';
	// 	}
   //    else{
	// 		$status='0';
	// 	}
	// 	$update_status_sql="update agent set status='$status' where id='$id'";
	// 	mysqli_query($con,$update_status_sql);
      
   // }

   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from agent where agent_id='$id'";
		mysqli_query($con,$delete_sql);
      
   }
}
$sql="select * from  agent order by agent_name desc";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Agent</h4>
                           <div><a href="manage_agent.php" class="btn btn-primary  btn-right">Add Agent</a></div>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Agent Name</th>
                                       <th>Image</th>
                                       <th>Agent Address</th>
                                       <th>Agent Contact</th>
                                       <th>Agent Cmail</th>

                                       <!-- <th>Product</th>
                                       <th>Quantity</th>
                                       <th>Status</th> -->
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                <?php
                                $i=1;
                                while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                    <td class="serial"><?php echo $i?>
                                       </td>
                                       <td><?php echo $row['agent_id']?></td>
                                       <td><?php echo $row['agent_name']?></td>
                                       <td>
                                          <?php if($row['image']!=''){?>
                                          <img src="media/agent/<?php echo $row['image']?>" height="100px" width="100px" alt="">
                                       <?php }else{
                                       echo "No Image";}
                                          ?>
                                       </td>
                                       <td><?php echo $row['agent_address']?></td>
                                       <td><?php echo $row['agent_contact']?></td>
                                       <td><?php echo $row['agent_email']?></td>
                                    
                                       <td>
                                          <!-- <?php echo $row['status']?> -->
                                           <?php 
                                          
                                           echo "<span class='badge badge-edit'><a href='manage_agent.php?id=".$row['agent_id']."'>
                                           Edit</a></span>";
                                           echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['agent_id']."'>Delete</a></span>";
                                           ?>
                                           
                                        </td>
                                       <?php }?>
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