<?php
if($_GET['id']){
    $id=$_GET['id'];
}else{
    header('location:index.php');
    die();
}
include('header.php');
$select="SELECT * from client where id='$id' and status='1'";
$res=mysqli_query($con,$select);
$row=mysqli_fetch_assoc($res);

?>



<!-- Agent-Profile Start -->
<section id="agent-profile" class="padding">
  <div class="container margin_bottom">
    <div class="row">
      <div class="col-md-4 col-sm-5 col-xs-12">
        <div class="agent-p-img">
          <img src="admin/media/client/<?php echo $row['image']?>" style="width:362px;height:397px" class="img-responsive" alt="image"/>
        </div>
      </div>
      <div class="col-md-4 col-sm-7 col-xs-12">
        <div class="agent-p-contact">
          <div class="our-agent-box padding-b-30">
            <h3><?php echo $row['name']?></h3>
            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue nihil imperdiet doming…</p>
          </div>
          <div class="agetn-contact">
            <h6>Mobile:</h6>
            <h6>Email Adress:</h6>
            <h6>Address:</h6>
          </div>
          <div class="agetn-contact-2">
            <p><?php echo $row['mobile']?></p>
            <a href="#">
              <p><?php echo $row['email']?></p>
            </a>
            <p><?php echo $row['address']?></p>
          </div>
        </div>
        <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="agent-p-form">
          <div class="row">
            <form class="findus">
              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" placeholder="Your Name" class="keyword-input">
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" placeholder="Phone Number" class="keyword-input">
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <input type="text" placeholder="Email Adress" class="keyword-input">
                </div>
              </div>
              <div class="col-md-12">
                <div class="single-query">
                  <textarea placeholder="Massege"></textarea>
                </div>
                <a href="#." class="btn_fill">Submit Now</a>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Agent-Profile End -->


<?php 
include('footer.php');
?>