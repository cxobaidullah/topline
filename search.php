<?php
include('header.php');
if (isset($_POST['submit'])) {
  $city = $_POST['city'];
  $location = $_POST['location'];
  $property_type = $_POST['property_type'];
  $bed_room = $_POST['bed_room'];
  $bath = $_POST['bath'];
  $squre_feet1 = $_POST['squre_feet1'];
  $squre_feet2 = $_POST['squre_feet2'];
  $sql = "SELECT * FROM properties WHERE city like '$city' OR property_address like '$location' OR property_type like '$property_type' OR bed_room like '$bed_room' OR bath like '$bath' OR sqaure_feet like '$squre_feet1' OR sqaure_feet like '$squre_feet2'";
  
  $res = mysqli_query($con, $sql);
    // echo mysqli_num_rows($res);
    // die();
  // echo $sql;
  // die();
} else {
}
?>

<!-- LISTING STYLE-->
<section id="agent-p-2" class="listing-1 bg_light padding_top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="findus">
          <div class="row">
            <?php
            while ($list = mysqli_fetch_assoc($res)) {
            ?>
              <div class="col-md-4 col-sm-4">
                <div class="property_item heading_space">
                  <div class="image">
                    <img style="width:360px;height:251px" src="admin/media/product/<?php echo $list['property_img'] ?>" alt="listin" class="img-responsive">
                    <div class="overlay">
                      <div class="centered"><a class="link_arrow white_border" href="property_details.php?id=<?php echo $list['property_id'] ?>">View Detail</a></div>
                    </div>
                    <div class="feature"><span class="tag"><?php echo $list['property_status'] ?></span></div>
                    <div class="price"><span class="tag">For Sale</span></div>
                    <div class="property_meta">
                      <?php if ($list['sqaure_feet'] > 0) { ?>
                        <span><i class="fa fa-object-group"></i><?php echo $list['sqaure_feet'] ?> sq ft </span><?php } ?>
                      <?php if ($list['bed_room'] > 0) { ?>
                        <span><i class="fa fa-bed"></i><?php echo $list['bed_room'] ?></span><?php } ?>
                      <?php if ($list['bath'] > 0) { ?>
                        <span><i class="fa fa-bath"></i><?php echo $list['bath'] ?> Bathroom</span><?php } ?>
                    </div>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3><a href="property_details.php?id=<?php echo $list['property_id'] ?>"><?php echo ucfirst($list['property_title']) ?></a></h3>
                      <span class="bottom10"><?php echo ucfirst($list['property_address']) ?></span>
                      <p><strong>Rs. <?php echo $list['price'] ?></strong></p>
                    </div>
                    <div class="favroute clearfix">
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <!-- <ul class="pager top40 padding_bottom">
            <li class="active"><a href="#.">1</a></li>
            <li><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
          </ul> -->
        </form>
      </div>
    </div>
  </div>
</section>
<!-- LISTING -->

<?php
include('footer.php');
?>