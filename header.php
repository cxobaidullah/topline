<?php
require('connection.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title> HOMES </title>
<link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" type="text/css" href="css/color/color-1.css" id="color" />
<link rel="shortcut icon" href="images/short_icon.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

</head>
<body>




<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
</div>
<!--===== #/BACK TO TOP =====-->


<!--===== HEADER =====-->
<header id="main_header">
 

  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="index.php"><img src="images/transparent.png" alt="logo"/></a></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="get-tuch text-left top20">
            <i class="icon-telephone114"></i>
            <ul>
              <li>
                <h4>Phone Number</h4>
              </li>
              <li>
                <p>+92 0000000008</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class="icon-icons74"></i>
            <ul>
              <li>
                <h4>Location,</h4>
              </li>
              <li>
                <p>Real State Rawalpindi</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class=" icon-icons142"></i>
            <ul>
              <li>
                <h4>Email Address</h4>
              </li>
              <li>
                <p><a href="#">info@gmail.com</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER BOTTOM =====--> 

  <!--===== NAV-BAR =====-->
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="social-icons text-right">
            <ul class="socials">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div> -->
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand sticky_logo" href="index-2.html"><img src="images/transparent.png" class="logo" alt=""></a>
          </div>
          <!-- End Header Navigation --> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
              <li class="<?php echo $home_active?>">
                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Homes</a>
              </li>
              
              <li class="dropdown <?php echo $property_active?>">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                <ul class="dropdown-menu">
                  <li class="">
                    <a href="property_listing.php" class="dropdown-toggle" data-toggle="dropdown" >All Properties</a>
                  </li>
                  <?php
                  $sql="SELECT * from property_type where status='1'";
                  $res=mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <li class="">
                    <a href="property_listing.php?id=<?php echo $row['id']?>" class="dropdown-toggle" data-toggle="dropdown" ><?php echo ucfirst($row['property_type'])?></a>
                  </li>
                  <?php }
                  ?>
                </ul>
              </li>
              
              <li class="<?php echo $services_active?>">
                <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services</a>
              </li>
              
              <li class="<?php echo $team_active?>">
                <a href="team.php" class="dropdown-toggle" data-toggle="dropdown" >Team</a>
              </li>
              
              <li class="<?php echo $about_active?>">
                <a href="about_us.php" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
              </li>
              
              <li class="<?php echo $contact_active?>">
                <a href="contact.php" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--===== #/NAV-BAR =====--> 
</header>
<!--===== #/HEADER =====-->   
