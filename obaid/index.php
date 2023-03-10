<?php
require('function.inc.php');
require('top.php');
$saleType = "SELECT * FROM properties a WHERE a.delivery_type='Sale'";



?>
<!-- STAR HEADER SEARCH -->
<section id="hero-area" class="parallax-searchs home15 overlay thome-6" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                                <br class="d-md-none">
                                <span class="typed border-bottom"></span>
                            </h1>
                            <p class="mt-4">We Have Over Million Properties For You.</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-2" type="checkbox" name="check">
                                                                <label for="check-2">Air Conditioning</label>
                                                                <input id="check-3" type="checkbox" name="check">
                                                                <label for="check-3">Swimming Pool</label>
                                                                <input id="check-4" type="checkbox" name="check">
                                                                <label for="check-4">Central Heating</label>
                                                                <input id="check-5" type="checkbox" name="check">
                                                                <label for="check-5">Laundry Room</label>
                                                                <input id="check-6" type="checkbox" name="check">
                                                                <label for="check-6">Gym</label>
                                                                <input id="check-7" type="checkbox" name="check">
                                                                <label for="check-7">Alarm</label>
                                                                <input id="check-8" type="checkbox" name="check">
                                                                <label for="check-8">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-9" type="checkbox" name="check">
                                                                <label for="check-9">WiFi</label>
                                                                <input id="check-10" type="checkbox" name="check">
                                                                <label for="check-10">TV Cable</label>
                                                                <input id="check-11" type="checkbox" name="check">
                                                                <label for="check-11">Dryer</label>
                                                                <input id="check-12" type="checkbox" name="check">
                                                                <label for="check-12">Microwave</label>
                                                                <input id="check-13" type="checkbox" name="check">
                                                                <label for="check-13">Washer</label>
                                                                <input id="check-14" type="checkbox" name="check">
                                                                <label for="check-14">Refrigerator</label>
                                                                <input id="check-15" type="checkbox" name="check">
                                                                <label for="check-15">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs_2">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-16" type="checkbox" name="check">
                                                                <label for="check-16">Air Conditioning</label>
                                                                <input id="check-17" type="checkbox" name="check">
                                                                <label for="check-17">Swimming Pool</label>
                                                                <input id="check-18" type="checkbox" name="check">
                                                                <label for="check-18">Central Heating</label>
                                                                <input id="check-19" type="checkbox" name="check">
                                                                <label for="check-19">Laundry Room</label>
                                                                <input id="check-20" type="checkbox" name="check">
                                                                <label for="check-20">Gym</label>
                                                                <input id="check-21" type="checkbox" name="check">
                                                                <label for="check-21">Alarm</label>
                                                                <input id="check-22" type="checkbox" name="check">
                                                                <label for="check-22">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-23" type="checkbox" name="check">
                                                                <label for="check-23">WiFi</label>
                                                                <input id="check-24" type="checkbox" name="check">
                                                                <label for="check-24">TV Cable</label>
                                                                <input id="check-25" type="checkbox" name="check">
                                                                <label for="check-25">Dryer</label>
                                                                <input id="check-26" type="checkbox" name="check">
                                                                <label for="check-26">Microwave</label>
                                                                <input id="check-27" type="checkbox" name="check">
                                                                <label for="check-27">Washer</label>
                                                                <input id="check-28" type="checkbox" name="check">
                                                                <label for="check-28">Refrigerator</label>
                                                                <input id="check-29" type="checkbox" name="check">
                                                                <label for="check-29">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER SEARCH -->

<!-- START SECTION FEATURED PROPERTIES -->
<br>
<br>
<br>
<br>
<section class="recently portfolio bg-white-1 rec-pro2 hmp ho-17">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>Properties</h2>
            <p>These are our properties</p>
        </div>
        <div class="row portfolio-items">
            <?php
                $sql="select * from properties where status='1' order by property_id desc";
                $res=mysqli_query($con,$sql);
                while($list=mysqli_fetch_assoc($res)) {

            ?>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">

                    <div class="landscapes listing-item compact thehp-1">
                        <a href="view_details.php?id=<?php echo $list['property_id'] ?>" class="recent-16 hmp" data-aos="fade-up">
                            <div class="recent-img16 img-fluid img-center">
                                <img src="./admin/./media/./product/<?php echo $list['property_img'] ?>" alt="img" />



                                <!-- style="background-image: url(images/feature-properties/fp-8.jpg);" -->
                            </div>

                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span><?php echo $list['delivery_type'] ?></span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title"><?php echo $list['property_title'] ?></div>
                                <div class="price-details">
                                    <div class="recent-price mb-3"><?php echo $list['price'] ?></div>
                                    <div class="house-details thehp-1">
                                        <?php
                                        if($list['bed_room']==''||$list['bed_room']==0){
                                        }else{?>
                                        
                                        <i class="fa fa-bed mr-1" aria-hidden="true"></i>
                                        <?php echo $list['bed_room'] ?>
                                        <span class="mr-1">|</span>
                                        <?php
                                        }
                                        if($list['kitchen']==''||$list['kitchen']==0){
                                        }else{?>
                                        
                                        <i class="fa fa-bath mr-1" aria-hidden="true"></i> 
                                        <?php echo $list['kitchen'] ?> <span class="mr-1">|</span>
                                        <?php
                                        }
                                        if($list['parking']==''||$list['parking']==0){}else{?>
                                        <i class="fa fa-car mr-1" aria-hidden="true"></i> 
                                        <?php echo $list['parking'] ?> Gr <span class="mr-1">|</span>
                                        <?php
                                        }?>
                                        <i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft
                                    </div>
                                </div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>

                </div>


            <?php } ?>


        </div>
        <div class="bg-all">
            <a href="properties-full-grid-1.html" class="btn btn-outline-light">View All</a>
        </div>
    </div>
</section>
<!-- END SECTION FEATURED PROPERTIES -->

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Why </span>Choose Us</h2>
            <p>We provide full service at every step.</p>
        </div>
        <div class="row service-1">
            <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <img src="images/icons/icon-4.svg" alt="">
                        <h3>Wide Renge Of Properties</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="images/icons/icon-5.svg" alt="">
                        <h3>Trusted by thousands</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <img src="images/icons/icon-6.svg" alt="">
                        <h3>Financing made easy</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="images/icons/icon-15.svg" alt="">
                        <h3>We are here near you</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->

<!-- START SECTION PROPERTIES FOR SALE -->
<section class="recently portfolio featured bg-white-1 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Propeties for </span>Sale</h2>
            <p>These are our properties for sale</p>
        </div>
        <div class="portfolio col-xl-12 p-0">


            <div class="slick-lancers">
                <?php
                $get_propertyforsale = get_propertiesByWhere($con);
                foreach ($get_propertyforsale as $list) {

                ?>
                    <div class="agents-grid">
                        <div class="landscapes listing-item compact thehp-1" data-aos="fade-up" data-aos-delay="150">
                            <a href="single-property-1.html" class="recent-16">
                                <div class="recent-img16 img-fluid img-center">
                                    <img src="./admin/./media/./product/<?php echo $list['property_img'] ?>" alt="img" />
                                </div>
                                <div class="recent-content"></div>
                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-title"><?php echo $list['property_title'] ?></div>
                                    <div class="recent-price mb-3">PKR <?php echo $list['price'] ?> </div>
                                    <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->
<!-- START SECTION PROPERTIES FOR RENT -->
<section class="recently portfolio bg-white-1 rec-pro pt-3">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Propeties for </span>Rent</h2>
            <p>These are our properties for rent</p>
        </div>
        <div class="portfolio col-xl-12 p-0">
            <div class="slick-lancers">
                <?php
                $get_propertyforRent = get_propertiesByWhereRent($con);
                foreach ($get_propertyforRent as $list) {

                ?>
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes listing-item compact thehp-2">
                            <a href="view_details.php" class="recent-16" data-aos="fade-up">
                                <div class="recent-img16 img-fluid img-center">
                                    <img src="./admin/./media/./product/<?php echo $list['property_img'] ?>" alt="img" />

                                </div>
                                <div class="recent-content"></div>
                                <div class="listing-badges">
                                    <span>For Rent</span>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-title"><?php echo $list['property_title'] ?></div>
                                    <div class="recent-price mb-3">PKR <?php echo $list['price'] ?> </div>
                                    <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR RENT -->

<!-- START SECTION CONTACT US -->
<section class="request info-help" id="quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12" data-aos="fade-right">
                <h3>Ready to get started?</h3>
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="firstname" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="phonenumber" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group mb-1">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="1" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>
            <div class="col-lg-5 col-md-12 bgc" data-aos="fade-left">
                <div class="call-info">
                    <h3>Contact Details</h3>
                    <p class="mb-5">Please find below contact details and contact us today!</p>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="in-p">95 South Park Ave, USA</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p">+456 875 369 208</p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti">support@findhouses.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->

<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Meet Our </span>Agents</h2>
            <p>Our Agents are here to help you</p>
        </div>
        <div class="row team-all">
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-5.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-6.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-7.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-8.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="550">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/team-image-2.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Chris Melo</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="650">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/team-image-7.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Nina Thomas</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION AGENTS -->

<!-- START SECTION POPULAR PLACES -->
<section class="visited-cities bg-white-1 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Most Popular </span>Places</h2>
            <p>Explore the world of real estate.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-lg-3 col-md-6 pr-1" data-aos="zoom-in" data-aos-delay="150">
                <!-- Image Box -->
                <a href="listing-details.html" class="img-box hover-effect">
                    <img src="images/popular-places/7.jpg" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="img-box-content visible">
                        <h4 class="mb-2">New York</h4>
                        <span>203 Properties</span>
                        <ul class="starts text-center mt-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pr-1" data-aos="zoom-in" data-aos-delay="250">
                <!-- Image Box -->
                <a href="listing-details.html" class="img-box hover-effect">
                    <img src="images/popular-places/8.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4 class="mb-2">Los Angeles</h4>
                        <span>307 Properties</span>
                        <ul class="starts text-center mt-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pr" data-aos="zoom-in" data-aos-delay="350">
                <!-- Image Box -->
                <a href="listing-details.html" class="img-box hover-effect">
                    <img src="images/popular-places/9.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4 class="mb-2">Miami </h4>
                        <span>409 Properties</span>
                        <ul class="starts text-center mt-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pr-1" data-aos="zoom-in" data-aos-delay="450">
                <!-- Image Box -->
                <a href="listing-details.html" class="img-box san no-mb x3 hover-effect">
                    <img src="images/popular-places/10.jpg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4 class="mb-2">Chicago</h4>
                        <span>507 Properties</span>
                        <ul class="starts text-center mt-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
<?php
require('footer.php');
?>