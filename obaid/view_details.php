<?php
require('function.inc.php');
require('top.php');
$property_id = mysqli_real_escape_string($con, $_GET['id']);
$sql="select properties.*,agent.* from properties inner join agent on properties.agent_id=agent.agent_id where properties.property_id='$property_id'"; 
$res=mysqli_query($con,$sql);
?>
<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">    
<?php
    while($row=mysqli_fetch_assoc($res)){
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <section class="headings-2 pt-0">
                            <div class="pro-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h3><?php echo ucfirst($row['property_title'])?> <span class="mrg-l-5 category-tag"><?php echo ucfirst($row['delivery_type'])?></span></h3>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i><?php echo ucfirst($row['property_address'])?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single detail-wrapper mr-2">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h4>PKR <?php echo ucfirst($row['price'])?></h4>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <p>$ 1,200 / sq ft</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- main slider carousel items -->

                        <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                    
                                <h5 class="mb-4">Gallery</h5>
                                <div class="carousel-inner">
                                    <div class="active item carousel-item" data-slide-number="0">
                                    <img src="./admin/./media/./product/<?php echo $row['property_img']?>" class="img-fluid property_detail_img"  alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="1">
                                    <img src="./admin/./media/./product/<?php echo $row['img2']?>" class="img-fluid property_detail_img"  alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="2">
                                    <img src="./admin/./media/./product/<?php echo $row['img3']?>" class="img-fluid property_detail_img"  alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="4">
                                    <img src="./admin/./media/./product/<?php echo $row['img4']?>" class="img-fluid property_detail_img"  alt="slider-listing">
                                    </div>
                                

                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                        <img src="./admin/./media/./product/<?php echo $row['property_img']?>" class="img-fluid"  alt="slider-listing">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                        <img src="./admin/./media/./product/<?php echo $row['img2']?>" class="img-fluid"  alt="slider-listing">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                        <img src="./admin/./media/./product/<?php echo $row['img3']?>" class="img-fluid "  alt="slider-listing">
                                        </a>
                                    </li>

                                </ul>
        
                            <!-- main slider carousel items -->
                        </div>
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Description</h5>
                            <p class="mb-3"><?php echo ucfirst($row['property_details'])?></p>
                        
                        </div>
                    </div>
                </div>
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Property Details</h5>
                    <ul class="homes-list clearfix">
                        <li>
                            <span class="font-weight-bold mr-1">Property ID:</span>
                            <span class="det">V254680</span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property Type:</span>
                            <span class="det"><?php echo ucfirst($row['property_title'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property status:</span>
                            <span class="det"><?php echo ucfirst($row['delivery_type'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Property Price:</span>
                            <span class="det">PKR <?php echo ucfirst($row['price'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Bed Rooms:</span>
                            <span class="det"><?php echo ucfirst($row['bed_room'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Living rooms:</span>
                            <span class="det"><?php echo ucfirst($row['liv_room'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">kitchen:</span>
                            <span class="det"><?php echo ucfirst($row['kitchen'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">Garages:</span>
                            <span class="det"><?php echo ucfirst($row['parking'])?></span>
                        </li>
                        <li>
                            <span class="font-weight-bold mr-1">utility:</span>
                            <span class="det"><?php echo ucfirst($row['utility'])?></span>
                        </li>
                    </ul>

                </div>




            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- Start: Schedule a Tour -->
                    <div class="schedule widget-boxed mt-33 mt-0">
                        <div class="widget-boxed-header">
                            <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 book">
                                    <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                </div>
                                <div class="col-lg-6 col-md-12 book2">
                                    <input type="text" id="reservation-time" class="form-control" readonly="">
                                </div>
                            </div>
                            <div class="row mrg-top-15 mb-3">
                                <div class="col-lg-6 col-md-12 mt-4">
                                    <label class="mb-4">Adult</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mt-4">
                                    <label class="mb-4">Children</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                        </div>
                    </div>
                    <!-- End: Schedule a Tour -->
                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>Agent Information</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <div class="author-box clearfix">
                                        <img src="images/testimonials/ts-1.jpg" alt="author-image" class="author__img">
                                        <h4 class="author__title"><?php echo ucfirst($row['agent_name'])?></h4>
                                        <p class="author__meta">Agent of Property</p>
                                    </div>
                                    <ul class="author__contact">
                                        <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span><?php echo ucfirst($row['agent_address'])?></li>
                                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#"><?php echo ucfirst($row['agent_contact'])?></a></li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#"><?php echo ucfirst($row['agent_email'])?></a></li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4>Request Inquiry</h4>
                                        <form name="contact_form" method="post" action="functions.php">
                                            <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                            <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                            <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                            <textarea placeholder="Message" name="message" required></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
        </div>
    </div>
    <?php } ?>
    </aside>
    </div>

    </div>
</section>
<?php
require('footer.php');
?>
<!-- END SECTION PROPERTIES LISTING -->