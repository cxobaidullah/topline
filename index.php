<?php 
$home_active='active';
include('header.php');
?>

<!-- SLIDER -->
<section class="rev_slider_wrapper">
  <div id="rev_slider_3" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade">
        <img src="images/banner-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
  <a href="#." class="short-topup" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        <div class="tp-caption  tp-resizeme text-left slider-caption"               
          data-x="['left','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
          data-mask_out="x:0;y:0;s:inherit;e:inherit;"               
          data-start="800">
        </div>
      </li>
      <!-- SLIDE  -->
      <li data-transition="slideremoveright">
        <img src="images/banner-2.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption  tp-resizeme text-left slider-caption"               
          data-x="['left','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
          data-mask_out="x:0;y:0;s:inherit;e:inherit;"               
          data-start="800">
        </div>
      </li>
      <!-- SLIDE  --> 
      <li data-transition="slideremoveright">
        <img src="images/banner-3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption  tp-resizeme text-left slider-caption"               
          data-x="['left','center','center','center']" data-hoffset="['15','15','0','0']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','off']"
          data-transform_idle="o:1;"
          data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
          data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
          data-mask_out="x:0;y:0;s:inherit;e:inherit;"               
          data-start="800">
          
        </div>
      </li>
    </ul>
  </div>
</section>
<!--SLIDER --> 


<!-- SERVICES -->
<section id="our-services">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"> <i class="icon-select-an-objecto-tool"></i></span>
          <div class="description">
            <h4>Wide Range of Properties</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="icon-user-tie"></i></span>
          <div class="description">
            <h4>14 Agents for Your Service</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 top40">
        <div class="feature_box equal-height">
          <span class="icon"><i class="fa fa-money"></i></span>
          <div class="description">
            <h4>Best Price Guarantee!</h4>
            <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
            <a href="" class="link_arrow top20">Read More</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SERVICES --> 


<!-- PROPERTY SEARCH -->
<section class="property-query-area property-page-bg padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom40">
        <h2 class="text-uppercase"><span class="color_red">Search</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <form class="findus" id="" method="post" action="search.php">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <label>City</label>
            <input type="text" class="keyword-input city" placeholder="City" name="city">
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Location</label>
              <input type="text" class="keyword-input" placeholder="Location" name="location">
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
              <label>Property Type</label>
              <select class="selectpicker property_type" name="property_type" data-live-search="true">
              <option>Select Type</option>
											<?php
											$res = mysqli_query($con, "select * from property_type order by id desc");
											while ($row = mysqli_fetch_assoc($res)) {
													echo "<option value=" . $row['id'] . ">" . $row['property_type'] . "</option>";
											}
											?>
              </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="single-query form-group">
            <label>Bed Room</label>
              <select class="selectpicker bed_room" name="bed_room" data-live-search="true">
                <option>Any</option>
                <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
              </select>
          </div>
        </div>
      </div>
    <div class="search-2">
      <form class="findus">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="single-query form-group">
                    <label>Bath Room</label>
                    <select class="selectpicker bath" name="bath" data-live-search="true">
                      <option>Any</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="single-query form-group">
                  <label>Squre Fit Min</label>
                  <input type="text" class="keyword-input squre_feet1" name="squre_feet1" placeholder="Any">
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="single-query form-group">
                  <label>Squre Fit Max</label>
                  <input type="text" class="keyword-input squre_feet2" name="squre_feet2" placeholder="Any">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5 col-sm-6 text-right">
                <div class="query-submit-button top10">
                  <input type="submit" name="submit" class="btn_fill" value="Search">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- PROPERTY SEARCH --> 


<!-- IMAGE WITH CONTENT -->
<section class="info_section parallaxie">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-4"> </div>
      <div class="col-md-6 col-sm-8 right_box">
        <div class="right_box_inner padding clearfix">
          <div class="col-md-6 col-sm-6 white_content top20 bottom30">
            <i class="icon-library"></i>
            <h3 class="bottom10 top20">Residential</h3>
            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum dolore nulla facilisis.</p>
          </div>
          <div class="col-md-6 col-sm-6 white_content top20 bottom30">
            <i class="icon-office"></i>
            <h3 class="bottom10 top20">Commercial</h3>
            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum dolore nulla facilisis.</p>
          </div>
          <div class="col-md-6 col-sm-6 white_content top20 bottom30">
            <i class=" icon-user-tie"></i>
            <h3 class="bottom10 top20">Our Best Staff</h3>
            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum dolore nulla facilisis.</p>
          </div>
          <div class="col-md-6 col-sm-6 white_content top20 bottom30">
            <i class="icon-history"></i>
            <h3 class="bottom10 top20">24 Hours Services</h3>
            <p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse molestie vel illum dolore nulla facilisis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- IMAGE WITH CONTENT -->


<!-- PROPERTY LISTING -->
<section id="property" class="index3 bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">OUR <span class="color_red">PROPERTY</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">        
    <?php
      $sql="SELECT * FROM properties WHERE `status`='1' ORDER BY `property_id` DESC LIMIT 6";
      $res=mysqli_query($con,$sql);
      while($list=mysqli_fetch_assoc($res)) {
    ?>
      <div class="col-md-4 col-sm-6">
        <div class="property_item bottom40">
          <div class="image">
            <img src="admin/media/product/<?php echo $list['property_img'] ?>" style="width:360px;height:251px;" alt="listin" class="img-responsive">
            <div class="property_meta">
            <?php if($list['sqaure_feet']!=''){?><span><i class="fa fa-object-group"></i><?php echo $list['sqaure_feet']?> </span><?php }?>
            <?php if($list['bed_room']>0){?><span><i class="fa fa-bed"></i><?php echo ucfirst($list['bed_room'])?></span><?php }?>
            <?php $bath=$list['bath'];
              if( $bath=='1'){
                ?>
              <span><i class="fa fa-bath"></i><?php echo $list['bath'];?> Bath</span>
            <?php }
            ?>
            </div>
            <?php if($list['property_status']!=''){?><div class="price"><span class="tag"><?php echo ucfirst($list['property_status'])?></span></div><?php }?>
            <div class="overlay">
            <div class="centered"><a class="link_arrow white_border" href="property_details.php?id=<?php echo $list['property_id']?>">View Detail</a></div>
            </div>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3><a href="property_details.php?id=<?php echo $list['property_id']?>"><?php echo ucfirst($list['property_title'])?></a></h3>
              <span><?php echo ucfirst($list['property_address'])?></span>
              <p class="p-font-15"><?php echo substr($list['property_details'],0,40)?></p>
            </div>
            <div class="favroute clearfix">
              <p class="pull-md-left">Rs: <?php echo ucfirst($list['price'])?></p>
              <!-- <ul class="pull-right">
                <li><a href="#."><i class="icon-video"></i></a></li>
                <li><a href="#."><i class="icon-like"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- PROPERTY LISTING --> 


<!-- BEST DEALS -->
<section id="property-listing" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bottom40">
        <h2 class="text-uppercase">Best Deal <span class="color_red">Properties</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Our Properties.</p>
      </div>
    </div>
    <div class="row">
      <div id="listing_slider" class="owl-carousel">
        <div class="item clearfix">
          <div class="project1 clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
              <div class="gri">
                <figure class="effect-layla">
                  <img src="images/b-d-property.jpg" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                <div class="item background-color-white">
                  <h4>Residential Project-d05</h4>
                  <div class="small-title">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="client-loc">
                    <p><span>Client:</span> Bryan Doe Joe</p>
                    <p><span>Location:</span> Mountain Line CA 62548</p>
                    <p><span>Value:</span> $15,000</p>
                  </div>
                  <a href="#" class="link_arrow">read more</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item clearfix">
          <div class="project1 clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
              <div class="gri">
                <figure class="effect-layla">
                  <img src="images/b-d-property-2.jpg" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                <div class="item background-color-white">
                  <h4>Residential Project-d05</h4>
                  <div class="small-title">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="client-loc">
                    <p><span>Client:</span> Bryan Doe Joe</p>
                    <p><span>Location:</span> Mountain Line CA 62548</p>
                    <p><span>Value:</span> $15,000</p>
                  </div>
                  <a href="#" class="link_arrow">read more</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item clearfix">
          <div class="project1 clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
              <div class="gri">
                <figure class="effect-layla">
                  <img src="images/b-d-property.jpg" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                <div class="item background-color-white">
                  <h4>Residential Project-d05</h4>
                  <div class="small-title">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="client-loc">
                    <p><span>Client:</span> Bryan Doe Joe</p>
                    <p><span>Location:</span> Mountain Line CA 62548</p>
                    <p><span>Value:</span> $15,000</p>
                  </div>
                  <a href="#" class="link_arrow">read more</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item clearfix">
          <div class="project1 clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 padding-left-0 project-images">
              <div class="gri">
                <figure class="effect-layla">
                  <img src="images/b-d-property-2.jpg" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 project-owl-slidee padding-left-0 project-owl-slideee">
                <div class="item background-color-white">
                  <h4>Residential Project-d05</h4>
                  <div class="small-title">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="client-loc">
                    <p><span>Client:</span> Bryan Doe Joe</p>
                    <p><span>Location:</span> Mountain Line CA 62548</p>
                    <p><span>Value:</span> $15,000</p>
                  </div>
                  <a href="#" class="link_arrow">read more</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- BEST DEALS --> 



<!-- TEAM -->
<section id="our-agent" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center bottom40">
        <h2 class="text-uppercase bottom10">Our <span class="color_red">Team</span></h2>
        <div class="text-center seprator">
        <div class="line_4"></div>
        <div class="line_5"></div>
        <div class="line_6"></div>
        </div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div id="our-agent-slider" class="owl-carousel">
      <?php
        $team="SELECT * FROM client where status='1' order by id DESC limit 6";
        $res=mysqli_query($con,$team);
        while($row=mysqli_fetch_assoc($res)){
      ?>
      <div class="item">
        <div class="single-effect">
          <figure class="ageent_overlay">
            <a href="#."><img src="admin/media/client/<?php echo $row['image']?>" style="width:360px;height:360px" alt="img"></a>
            <figcaption class="view-caption">
              <a href="team_detail.php?id=<?php echo $row['id']?>"><i class="icon-focus"></i></a>
            </figcaption>
          </figure>
        </div>
        <div class="team_text text-center">
          <h3><?php echo ucfirst($row['name'])?></h3>
          <span><?phpecho substr(ucfirst($row['designation']),0,80)?></span>
         
          <a href="team_detail.php?id=<?php echo $row['id']?>" class="link_arrow">Read More</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!--TEAM --> 
<script>
  $('#searchForm').click(function(e){
    e.preventDefault();
  var city=$('.city').val();  
  var property_type=$('.property_type').val();  
  var bed_room=$('.bed_room').val();  
  var bath=$('.bath').val();  
  var squre_feet1=$('.squre_feet1').val();  
  var squre_feet2=$('.squre_feet2').val(); 
  console.log(city);
  console.log(property_type);
  console.log(bed_room);
  console.log(bath);
  console.log(squre_feet1);
  console.log(squre_feet2);
  if(city==''&&property_type==''&&bed_room==''&&bath==''&&squre_feet1==''&&squre_feet2==''){
    console.log("Please fill at least one field")
    // window.location ="index.php";
  }
  });
</script>

<?php 
include('footer.php');
?>