<?php 
include('header.php');
if(isset($_GET['id'])){    
    $id=$_GET['id'];
}
$sql="SELECT * FROM projects WHERE  `property_id`='$id'";
$res=mysqli_query($con,$sql);

$doc="SELECT * FROM property_document WHERE  `project_id`='$id'";
$pdf=mysqli_query($con,$doc);
$file=$pdf->fetch_assoc();



?>

<style>
    .img1{
        height: 420px!important;
    }
    .slider_image{
      width: 750px !important;
      height:507px !important;
    }
    .carosel_image{
      width: 148px !important;
      height:100px !important;
    }
</style>

<?php 
while($list=mysqli_fetch_assoc($res)) {?>
<section class="property-details padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase"><?php echo ucfirst($list['property_title'])?></h2>
        <p class="bottom20"><?php echo ucfirst($list['property_address'])," ".$list['city']?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <div id="property-d-1" class="owl-carousel">
              <?php
              if($list['property_img']!=''){
                ?>
                <div class="item"><img src="admin/media/product/<?php echo $list['property_img'] ?>" alt="image" class="slider_image" /></div>
                <?php
              } 
              ?>
              <?php
              if($list['img2']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img2'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
              <?php
              if($list['img3']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img3'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
              <?php
              if($list['img4']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img4'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
              <?php
              if($list['img5']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img5'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
              <?php
              if($list['img6']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img6'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
              <?php
              if($list['img3']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img3'] ?>" alt="image" class="slider_image" /></div>
              <?php
              } 
              ?>
            </div>
            <div id="property-d-1-2" class="owl-carousel">
            <div class="item"><img src="admin/media/product/<?php echo $list['property_img'] ?>" alt="image" class="carosel_image"/></div>
            <?php
              if($list['img2']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img2'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
              <?php
              if($list['img3']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img3'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
              <?php
              if($list['img4']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img4'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
              <?php
              if($list['img5']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img5'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
              <?php
              if($list['img6']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img6'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
              <?php
              if($list['img3']!=''){
                ?>
              <div class="item"><img src="admin/media/product/<?php echo $list['img3'] ?>" alt="image" class="carosel_image"/></div>
              <?php
              } 
              ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="property-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
                <li role="presentation"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
                <?php if($list['agent_id']!=''){?>
                <li role="presentation"><a href="#tab_contact" aria-controls="tab_contact" role="tab" data-toggle="tab">Contact</a></li><?php }?>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="description">
                  <h3 class="text-uppercase  bottom20 top10">Property <span class="color_red">Description</span></h3>
                  <p class="p-font-15"><?php echo $list['property_details']?></p>
                  <p class="p-font-15 top30 bottom30"></p>
                  <div class="property_meta bottom40">
                  <?php if($list['sqaure_feet']!=''){?><span><i class="fa fa-object-group"></i><?php echo $list['sqaure_feet']?> Square Feet </span><?php }?>
                  <!-- <?php if($list['bed_room']>0){?><span><i class="fa fa-bed"></i><?php echo $list['bed_room']?> Bedrooms</span><?php }?>
                  <?php if($list['bath']>0){?><span><i class="fa fa-bath"></i><?php echo $list['bath']?> Bath</span><?php }?> -->
                  <!-- <?php if($list['garage']!=''){?><span><i class="fa fa-car"></i><?php echo $list['garage']?> Garage</span><?php }?> -->
                  </div>
                  <!-- <a class="link_arrow" href="#.">Read More</a> -->
                </div>
                
                <div role="tabpanel" class="tab-pane" id="summary">;
                  <div class="row property-d-table">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Quick <span class="color_red">Summary</span></h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Property Id</b></td>
                            <td class="text-right"><?php echo $list['property_id']?></td>
                          </tr>
                          <tr>
                            <td><b>Price</b></td>
                            <td class="text-right">RS <?php echo $list['price']?></td>
                          </tr>
                          <tr>
                            <td><b>Property Size</b></td>
                            <td class="text-right"><?php echo $list['sqaure_feet']?> Square Feet</td>
                          </tr>
                          <!-- <?php if($list['bed_room']>0){?>
                          <tr> -->
                          <!-- <td><b>Bedrooms</b></td>
                            <td class="text-right"><?php echo $list['bed_room']?></td>
                          </tr><?php }?>
                          <?php if($list['bath']>0){?>
                          <tr>
                            <td><b>Bath</b></td>
                            <td class="text-right"><?php echo $list['bath']?></td>
                          </tr><?php }?> -->
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <table class="table table-striped table-responsive">
                        <tbody>
                          <tr>
                            <td><b>Status</b></td>
                            <td class="text-right"><?php echo $list['property_status']?></td>
                          </tr>
                          <!-- <?php if($list['garage']!=''){?>
                          <tr>
                            <td><b>Garages</b></td>
                            <td class="text-right"><?php echo $list['garage']?></td>
                          </tr>
                          <?php }?> -->
                          <!-- <?php if($list['floor_space']!=''){?>
                          <tr>
                            <td><b>Floors</b></td>
                            <td class="text-right"><?php echo $list['floor_space']?></td>
                          </tr>
                          <?php }?> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="features">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Proprty <span class="color_red">Features</span></h3>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['water_supply']!=0){?>
                        <li>
                        Water Supply
                        </li>
                        <?php }?>
                        <?php if($list['parking']!=0){?>
                        <li>
                        Parking
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['sewerage']!=0){?>
                        <li>
                        Sewerage
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['internet']!=0){?>
                        <li>
                        Internet
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['nearby_resturant']!=0){?>
                        <li>
                        Nearby Resturant
                        </li>
                        <?php }?>
                      </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['nearby_school']!=0){?>
                        <li>
                        Nearby School
                        </li>
                        <?php }?>
                      </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['nearby_hospital']!=0){?>
                        <li>
                        Nearby Hospital
                        </li>
                        <?php }?>
                      </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['nearby_mall']!=0){?>
                        <li>
                        Nearby Shopping Mall
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['nearby_transpoart']!=0){?>
                        <li>
                        Nearby Public Transpoart
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <ul class="pro-list">
                      <?php if($list['security_staff']!=0){?>
                        <li>
                        Security 
                        </li>
                        <?php }?>
                      </ul>
                    </div>
                  </div>
                </div>
                
                
            <?php
            $agent_id=$list['agent_id'];
            $agent="SELECT * from agent where agent_id='$agent_id'";
            $result=mysqli_query($con,$agent);
            $run=mysqli_fetch_assoc($result);
            ?>
                <div role="tabpanel" class="tab-pane" id="tab_contact">
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom30 top10">Contact <span class="color_red">Agent</span></h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-img"> <img src="admin/media/agent/<?php echo $run['image']?>" class="img-responsive" alt="No Image" /> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="agent-p-contact">
                        <div class="our-agent-box">
                          <!-- <h3 class="bottom10"><?php echo ucfirst($run['agent_name'])?></h3> -->
                          <h3 class="bottom10"><?php if(isset($run['agent_name'])) { echo ucfirst($run['agent_name']); } else { echo "&nbsp;"; } ?></h3>

                        </div>
                        <div class="agetn-contact">
                          <h6>Phone:</h6>
                          <h6>Email:</h6>
                          <h6>Adress:</h6>
                        </div>
                        <div class="agetn-contact-2">
                      <!-- <p><?php echo $run['agent_contact']?></p>
                      <p><?php echo $run['agent_email']?></p>
                      <p><?php echo ucfirst($run['agent_address'])?></p> -->
                      <p><?php if(isset($run['agent_contact'])) { echo $run['agent_contact']; } else { echo "&nbsp;"; } ?></p>
<p><?php if(isset($run['agent_email'])) { echo $run['agent_email']; } else { echo "&nbsp;"; } ?></p>
<p><?php if(isset($run['agent_address'])) { echo ucfirst($run['agent_address']); } else { echo "&nbsp;"; } ?></p>

                        </div>
                      </div>
                      <ul class="socials">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#."><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase  bottom40 top40">Recent <span class="color_red">Project</span></h3>
            <?php
              $recent="SELECT * FROM projects ORDER BY property_id DESC limit 4";
              $getRecent=mysqli_query($con,$recent);
              while($recents=mysqli_fetch_assoc($getRecent)){
            ?>

            <div class="media">
              <div class="media-left media-middle">
                <a href="project_details.php?id=<?php echo $recents['property_id'] ?>">
                <img class="media-object" src="admin/media/product/<?php echo $recents['property_img'] ?>" 
                style="width:110px" alt="image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#."><?php $recents['property_title']?></a></h4>
                <p><?php echo ucfirst($recents['property_address'])," ".$recents['city']?></p>
                <a href="project_details.php?id=<?php echo $recents['property_id'] ?>">RS. <?php echo $recents['price']?></a>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom40 top40">Featured <span class="color_red">Properties</span></h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
            <?php
              $feature="SELECT property_img,property_id FROM projects where property_status='Rent' ORDER BY property_id DESC limit 3";
              $getfeature=mysqli_query($con,$feature);
              while($fetures=mysqli_fetch_assoc($getfeature)){
            ?>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="project_details.php?id=<?php echo $fetures['property_id'] ?>"><img src="admin/media/product/<?php echo $fetures['property_img'] ?>" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div style="margin-top:10px">
    <a href="admin/media/agent/<?php echo $file['pdf'];?>">
      <img src="https://images.zameen.com/w248_h290/7/2320/zam_zam_citi_44175.jpeg" alt="" style="height:200px; width:200px;">
    </a>
    <h4><?php echo $file['title'];?></h4>
    </div>
  </div>
  </div>
</section>


<?php } ?>
<?php 
include('footer.php');
?>