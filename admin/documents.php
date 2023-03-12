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
		$delete_sql="delete from property_document where id='$id'";
		mysqli_query($con,$delete_sql);
      
   }
}
$sql="select * from  property_document order by title desc";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Documents</h4>
                           <div><a href="manage_agent.php" class="btn btn-primary  btn-right">Add Document</a></div>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Title</th>
                                       <th>PDF</th>
                                       <th>Project</th>
                                     
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
                                       <td><?php echo $row['id']?></td>
                                       <td><?php echo $row['title']?></td>
                                       <td>
                                          <?php if($row['pdf']!=''){?>
                                          <!-- <img src="media/agent/<?php echo $row['pdf']?>" height="100px" width="100px" alt=""> -->
                                          <div style="margin-top:10px">
    <a href="media/agent/<?php echo $row['pdf'];?>">
      <img src="https://images.zameen.com/w248_h290/7/2320/zam_zam_citi_44175.jpeg" alt="" style="height:100px; width:100px;">
    </a>
    </div>
                                       <?php }else{
                                       echo "No Image";}
                                          ?>
                                       </td>
                                       <!-- <td><?php echo $row['agent_address']?></td>
                                       <td><?php echo $row['agent_contact']?></td>
                                       <td><?php echo $row['agent_email']?></td> -->
                                    
                                       <td>
                                          <!-- <?php echo $row['status']?> -->
                                           <?php 
                                          
                                           echo "<span class='badge badge-edit'><a href='addDocument.php?id=".$row['id']."'>
                                           Edit</a></span>";
                                           echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
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