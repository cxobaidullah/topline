<?php
require('top.inc.php');
$p_id=$_GET['id'];
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='availablility'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$availablility='1';
		}else{
			$availablility='0';
		}
		$update_availablility_sql="update properties set availablility='$availablility' where property_id='$id'";
		mysqli_query($con,$update_availablility_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from properties where property_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select properties.*,agent.agent_name from properties inner join agent 
on properties.agent_id=agent.agent_id where properties.property_id='$p_id'";
// $sql = "SELECT * FROM `properties` ORDER BY `property_id`  DESC;";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Properties</h4>
                           <h4 class="box-link"><a href="manage_properties.php">Add Properties</a></h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>property_title</th>
                                       <th>property_details</th>
                                       <th>delivery_type</th>
                                    
                                       <th>price</th>
                                       <th>property_address</th>
                                       <th>property_img</th>
                                       <th>img2</th>
                                       <th>img3</th>
                                       <th>img4</th>
                                       <th>bed_room</th>
                                       <th>liv_room</th>
                                       <th>parking</th>
                                       <th>kitchen</th>
                                       <th>utility</th>
                                       <th>property_type</th>
                                       <th>floor_space</th>
                                       <th>agent_id</th>
                                       <!-- <th>Product</th>
                                       <th>Quantity</th>
                                       <th>Status</th> -->
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
                                       <td> <?php 
                                          echo substr(ucfirst($row['property_details']),0,40);
                                          if(strlen($row['property_details'])>40){
                                             echo '...';
                                          }
                                       ?></td>
                                      
                                       <td><?php if(isset($row['delivery_type'])){
                                          echo $row['delivery_type'];
                                       }   
                                       ?></td>
                              
                                       <td><?php echo $row['price']?></td>
                                       <td><?php echo $row['property_address']?></td>
                                       <td><?php echo $row['property_img']?></td>
                                       <td><?php echo $row['img2']?></td>
                                       <td><?php echo $row['img3']?></td>
                                       <td><?php echo $row['img4']?></td>
                                       <td><?php echo $row['bed_room']?></td>
                                       <td>
                                       <?php if(isset($row['liv_room'])){
                                          echo $row['liv_room'];
                                       }   
                                       ?>
                                       </td>
                                       <td><?php echo $row['parking']?></td>
                                       <td><?php echo $row['kitchen'] ?? ''?></td>
                                       <td><?php echo $row['utility']?></td>
                                       <td><?php echo $row['property_type']?></td>
                                       <td><?php echo $row['floor_space']?></td>
                                       <td><?php echo $row['agent_id']?></td>
                                       <td>
                                          <!-- <?php echo $row['status']?> -->
                                           <?php 
                                           if($row['availablility']==1){
                                           echo "<span class='badge badge-complete'><a href='?type=availablility&operation=deactive&id=".$row['property_id']."'>Active</a></span>&nbsp";
                                            }
                                           else{
                                             echo "<span class='badge badge-pending'><a href='?type=availablility&operation=active&id=".$row['property_id']."'>Deactive</a></span>&nbsp";
                                           }
                                           echo "<span class='badge badge-edit'><a href='manage_properties.php?id=".$row['property_id']."'>
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