<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$availablility='1';
		}else{
			$availablility='0';
		}
		$update_availablility_sql="update projects set status='$availablility' where property_id='$id'";
		mysqli_query($con,$update_availablility_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from projects where property_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select projects.*,agent.agent_name from projects inner join agent 
on projects.agent_id=agent.agent_id order by projects.property_id desc";
// $sql = "SELECT * FROM `properties` ORDER BY `property_id`  DESC;";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Projects</h4>
                           <div>
                              <a href="manageProjects.php" class="btn btn-primary btn-right">Add Projects</a>
                           </div>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>property_title</th>
                                       <!-- <th>property_details</th>
                                       <th>delivery_type</th>
                                     -->
                                       <th>price</th>
                                       <!-- <th>property_address</th> -->
                                       <th>property_img</th>
                                       <!-- <th>bed_room</th>
                                       <th>liv_room</th>
                                       <th>parking</th>
                                       <th>kitchen</th>
                                       <th>utility</th>
                                       <th>property_type</th>
                                       <th>floor_space</th>
                                       <th>agent_id</th> -->
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
                                       <td><?php echo $row['property_id']?></td>
                                       <td><?php echo $row['property_title']?></td>
                                       <!-- <td><?php echo $row['property_details']?></td>
                                       <td><?php echo $row['delivery_type']?></td>
                               -->
                                       <td><?php echo $row['price']?></td>
                                       <!-- <td><?php echo $row['property_address']?></td> -->
                                       <td><img src="media/product/<?php echo $row['property_img']?>" alt=""></td>
                                       <!-- <td><?php echo $row['bed_room']?></td>
                                       <td><?php echo $row['liv_room']?></td>
                                       <td><?php echo $row['parking']?></td>
                                       <td><?php echo $row['kitchen']?></td>
                                       <td><?php echo $row['utility']?></td>
                                       <td><?php echo $row['property_type']?></td>
                                       <td><?php echo $row['floor_space']?></td>
                                       <td><?php echo $row['agent_id']?></td> -->
                                       <td>
                                          
                                           <?php 
                                           if($row['status']==1){
                                           echo "<span class='badge badge-complete'><a href='?type=status&&operation=deactive&&id=".$row['property_id']."'>Active</a></span>&nbsp";
                                            }
                                           else{
                                             echo "<span class='badge badge-pending'><a href='?type=status&&operation=active&&id=".$row['property_id']."'>Deactive</a></span>&nbsp";
                                           }
                                           echo "<span class='badge badge-edit'><a href='manageProjects.php?id=".$row['property_id']."'>
                                           Edit</a></span>";
                                           echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['property_id']."'>Delete</a></span>";
                                           echo "<span class='badge badge-success'><a href='view_detail.php?id=".$row['property_id']."'>View</a></span>";
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