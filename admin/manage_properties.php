<?php
require('top.inc.php');
$agent_id = '';
$property_title = '';
$property_details = '';
$delivery_type = '';
$price = '';
$sqaure_feet = '';
$city = '';
$property_address = '';
$property_img	= '';
$property_img2	= '';
$property_img3	= '';
$property_img4	= '';
$property_img5	= '';
$property_img6	= '';
$bed_room	= '';
$tv_lanch	= '';
$parking	= '';
$kitchen	= '';
$utility = '';
$property_type = '';
$floor_space = '';
$status = '';
$property_status = '';
$bath = '';
$security = '';
$nearby_resturant = '';
$cctv = '';
$water_supply = '';
$sewerage = '';
$internet = '';
$nearby_school = '';
$nearby_hospital = '';
$nearby_mall = '';
$nearby_transpoart = '';
$security_staff = '';


$msg = '';
$image_required = 'required';
if (isset($_GET['id']) && $_GET['id'] != '') {
	$image_required = '';
	$id = get_safe_value($con, $_GET['id']);
	$res = mysqli_query($con, "select * from properties where property_id ='$id'");
	$check = mysqli_num_rows($res);
	if ($check > 0) {
		$row = mysqli_fetch_assoc($res);
		$agent_id = $row['agent_id'];
		$property_title = $row['property_title'];
		$property_details = $row['property_details'];
		$property_type = $row['property_type'];
		$price = $row['price'];
		$sqaure_feet = $row['sqaure_feet'];
		$city = $row['city'];
		$property_address = $row['property_address'];
		$property_img	= $row['property_img'];
		$property_img2	= $row['img2'];
		$property_img3	= $row['img3'];
		$property_img4	= $row['img4'];
		$property_img5	= $row['img5'];
		$property_img6	= $row['img6'];
		$bed_room	= $row['bed_room'];
		$tv_lanch	= $row['tv_lanch'];
		$parking	= $row['parking'];
		$kitchen	= $row['kitchen'];
		$utility = $row['utility'];
		$floor_space = $row['floor_space'];
		$status = $row['status'];
		$property_status = $row['property_status'];
		$bath = $row['bath'];
		$security = $row['security'];
		$nearby_resturant = $row['nearby_resturant'];
		$cctv = $row['cctv'];
		$water_supply = $row['water_supply'];
		$img5 = $row['img5'];
		$img6 = $row['img6'];
		$sewerage = $row['sewerage'];
		$internet = $row['internet'];
		$nearby_school = $row['nearby_school'];
		$nearby_hospital = $row['nearby_hospital'];
		$nearby_mall = $row['nearby_mall'];
		$nearby_transpoart = $row['nearby_transpoart'];
		$security_staff = $row['security_staff'];
	} else {
		header('location:product.php');
		die();
	}
}

if (isset($_POST['submit'])) {
	$agent_id = get_safe_value($con, $_POST['agent_id']);
	$property_title = get_safe_value($con, $_POST['property_title']);
	$property_type = get_safe_value($con, $_POST['property_type']);
	$property_details = get_safe_value($con, $_POST['property_details']);
	$price = get_safe_value($con, $_POST['price']);
	$city = get_safe_value($con, $_POST['city']);
	$sqaure_feet = get_safe_value($con, $_POST['sqaure_feet']);
	$property_address = get_safe_value($con, $_POST['property_address']);
	$bed_room = get_safe_value($con, $_POST['bed_room']);
	$tv_lanch = get_safe_value($con, $_POST['tv_lanch']);
	$parking = get_safe_value($con, $_POST['parking']);
	$kitchen = get_safe_value($con, $_POST['kitchen']);
	$utility = get_safe_value($con, $_POST['utility']);
	$floor_space = get_safe_value($con, $_POST['floor_space']);
	$property_status = get_safe_value($con, $_POST['property_status']);
	$bath = get_safe_value($con, $_POST['bath']);
	$security = get_safe_value($con, $_POST['security']);
	$nearby_resturant = get_safe_value($con, $_POST['nearby_resturant']);
	$cctv = get_safe_value($con, $_POST['cctv']);
	$water_supply = get_safe_value($con, $_POST['water_supply']);
	$sewerage = get_safe_value($con, $_POST['sewerage']);
	$internet = get_safe_value($con, $_POST['internet']);
	$nearby_school = get_safe_value($con, $_POST['nearby_school']);
	$nearby_hospital = get_safe_value($con, $_POST['nearby_hospital']);
	$nearby_mall = get_safe_value($con, $_POST['nearby_mall']);
	$nearby_transpoart = get_safe_value($con, $_POST['nearby_transpoart']);
	$security_staff = get_safe_value($con, $_POST['security_staff']);



	if (isset($_GET['id'])) {
		if ($_GET['id'] == 0) {
			if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
				$msg = "Please select only png,jpg and jpeg image formate";
			}
		}
	} else {
		if ($_FILES['image']['type'] != '') {
			if ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') {
				$msg = "Please select only png,jpg and jpeg image formate";
			}
		}
	}

	if ($msg == '') {
		if (isset($_GET['id']) && $_GET['id'] != '') {
			if ($_FILES['image']['name'] != '') {
				$property_img = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], './media/product/' . $property_img);
			}
			if ($_FILES['image2']['name'] != '') {
				$property_img2 = rand(111111111, 999999999) . '_' . $_FILES['image2']['name'];
				move_uploaded_file($_FILES['image2']['tmp_name'], './media/product/' . $property_img2);
			}
			if ($_FILES['image3']['name'] != '') {
				$property_img3 = rand(111111111, 999999999) . '_' . $_FILES['image3']['name'];
				move_uploaded_file($_FILES['image3']['tmp_name'], './media/product/' . $property_img3);
			}
			if ($_FILES['image4']['name'] != '') {
				$property_img4 = rand(111111111, 999999999) . '_' . $_FILES['image4']['name'];
				move_uploaded_file($_FILES['image4']['tmp_name'], './media/product/' . $property_img4);
			}
			if ($_FILES['image5']['name'] != '') {
				$property_img5 = rand(111111111, 999999999) . '_' . $_FILES['image5']['name'];
				move_uploaded_file($_FILES['image5']['tmp_name'], './media/product/' . $property_img5);
				}
			if ($_FILES['image6']['name'] != '') {
				$property_img5 = rand(111111111, 999999999) . '_' . $_FILES['image6']['name'];
				move_uploaded_file($_FILES['image6']['tmp_name'], './media/product/' . $property_img6);
			}
			$update_sql ="UPDATE `properties` SET `property_title`='$property_title',`property_details`='$property_details',`price`='$price',`sqaure_feet`='$sqaure_feet',`city`='$city',`property_address`='$property_address',`property_img`='$property_img',`img2`='$property_img2',`img3`='$property_img3',`img4`='$property_img4',`bed_room`='$bed_room',`tv_lanch`='$tv_lanch',`parking`='$parking',`kitchen`='$kitchen',`utility`='$utility',`property_type`='$property_type',`floor_space`='$floor_space',`agent_id`='$agent_id',`property_status`='$property_status',`bath`='$bath',`security`='$security',`nearby_resturant`='$nearby_resturant',`cctv`='$cctv',`water_supply`='$water_supply',`img5`='$property_img5',`img6`='$property_img6',`sewerage`='$sewerage',`internet`='$internet',`nearby_school`='$nearby_school',`nearby_hospital`='$nearby_hospital',`nearby_mall`='$nearby_mall',`nearby_transpoart`='$nearby_transpoart',`security_staff`='$security_staff' WHERE property_id='$id'";
			mysqli_query($con, $update_sql);
		} else {
			$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
			$image2 = rand(111111111, 999999999) . '_' . $_FILES['image2']['name'];
			$image3 = rand(111111111, 999999999) . '_' . $_FILES['image3']['name'];
			$image4 = rand(111111111, 999999999) . '_' . $_FILES['image4']['name'];
			$image5 = rand(111111111, 999999999) . '_' . $_FILES['image5']['name'];
			$image6 = rand(111111111, 999999999) . '_' . $_FILES['image6']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], './media/product/' . $image);
			move_uploaded_file($_FILES['image2']['tmp_name'], './media/product/' . $image2);
			move_uploaded_file($_FILES['image3']['tmp_name'], './media/product/' . $image3);
			move_uploaded_file($_FILES['image4']['tmp_name'], './media/product/' . $image4);
			move_uploaded_file($_FILES['image5']['tmp_name'], './media/product/' . $image5);
			move_uploaded_file($_FILES['image6']['tmp_name'], './media/product/' . $image6);
			mysqli_query($con, "INSERT INTO properties(`property_title`, `property_details`, `price`,`sqaure_feet`, `city`, `property_address`, `property_img`, `img2`, `img3`, `img4`, `img5`, `img6`, `bed_room`, `tv_lanch`, `parking`, `kitchen`, `utility`, `property_type`, `floor_space`, `agent_id`, `status`, `property_status`, `bath`, `security`, `nearby_resturant`, `cctv`, `water_supply`, `sewerage`, `internet`, `nearby_school`, `nearby_hospital`, `nearby_mall`, `nearby_transpoart`, `security_staff`) 
			values('$property_title','$property_details','$price','$sqaure_feet','$city','$property_address','$image','$image2','$image3','$image4','$image5','$image6','$bed_room',
			'$tv_lanch','$parking','$kitchen','$utility','$property_type','$floor_space','$agent_id','1','$property_status','$bath','$security','$nearby_resturant','$cctv','$water_supply','$sewerage','$internet','$nearby_school','$nearby_hospital','$nearby_mall','$nearby_transpoart','$security_staff')");
		}
		header('location:properties.php');
		die();
	}
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Property</strong><small> Form</small></div>
					<form method="post" enctype="multipart/form-data">
						<div class="card-body card-block">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active " aria-current="page">Property Details</li>
								</ol>
							</nav>
							<div class="row">

								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Property Title</label>
										<input type="text" name="property_title" placeholder="Enter property title" class="form-control" required value="<?php echo $property_title ?>">
									</div>
								</div>

								<div class="col-lg-4">
									<div class="form-group">
										<label for="Agent" class=" form-control-label">Property Type</label>
										<select class="form-control" name="property_type" required>
											<option>Select Type</option>
											<?php
											$res = mysqli_query($con, "select * from property_type order by id desc");
											while ($row = mysqli_fetch_assoc($res)) {
												if ($row['id'] == $property_type) {
													echo "<option selected value=" . $row['id'] . ">" . $row['property_type'] . "</option>";
												} else {
													echo "<option value=" . $row['id'] . ">" . $row['property_type'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="Agent" class=" form-control-label">Agent</label>
										<select class="form-control" name="agent_id">
											<option>Select Agent</option>
											<?php
											$res = mysqli_query($con, "select agent_id ,agent_name from agent order by agent_name asc");
											while ($row = mysqli_fetch_assoc($res)) {
												if ($row['agent_id'] == $agent_id) {
													echo "<option selected value=" . $row['agent_id'] . ">" . $row['agent_name'] . "</option>";
												} else {
													echo "<option value=" . $row['agent_id'] . ">" . $row['agent_name'] . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Property Status</label>
										<select name="property_status" id="" class="form-control">
											<option>Select Status</option>
											<option value="Sale" <?php if($property_status=="Sale"){echo "selected";}?>>Sale</option>
											<option value="Rent" <?php if($property_status=="Rent"){echo "selected";}?>>Rent</option>
											<option value="Sold" <?php if($property_status=="Sold"){echo "selected";}?>>Sold</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Price</label>
										<input type="number" name="price" placeholder="Enter Price" class="form-control" required value="<?php echo $price ?>">
									</div>
								</div>
								<div class="col-lg-4">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Square Feet</label>
										<input type="text" name="sqaure_feet" placeholder="Enter Square Feet" value="<?php echo $sqaure_feet;?>" class="form-control" required>
									</div>
								</div>

								<div class="col-lg-12">

								<div class="form-group">
										<label for="projects" class=" form-control-label">Description</label>
										<textarea id="editor" name="property_details"><?php echo $property_details ?></textarea>
										
									</div>
								</div>
							</div>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Property Images</li>
								</ol>
							</nav>
							<div class="row">
								<div class="col-lg-6">

									<!-- //img1 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 1</label>
										<input type="file" name="image" class="form-control" <?php echo  $image_required ?>>
									</div>
									<?php if($property_img!=''){?>
									<img src="media/product/<?php echo $property_img?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
								<div class="col-lg-6">

									<!-- image2 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 2</label>
										<input type="file" name="image2" class="form-control" <?php echo  $image_required ?>>
									</div>
									
									<?php if($property_img2!=''){?>
									<img src="media/product/<?php echo $property_img2?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
								<div class="col-lg-6">
									<!-- //image3 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 3</label>
										<input type="file" name="image3" class="form-control" <?php echo  $image_required ?>>
									</div>
									
									<?php if($property_img3!=''){?>
									<img src="media/product/<?php echo $property_img3?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
								<div class="col-lg-6">

									<!-- image4 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 4</label>
										<input type="file" name="image4" class="form-control" <?php echo  $image_required ?>>
									</div>
									
									<?php if($property_img4!=''){?>
									<img src="media/product/<?php echo $property_img4?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
								<div class="col-lg-6">

									<!-- image4 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 5</label>
										<input type="file" name="image5" class="form-control" <?php echo  $image_required ?>>
									</div>
									
									<?php if($property_img5!=''){?>
									<img src="media/product/<?php echo $property_img5?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
								<div class="col-lg-6">

									<!-- image4 -->
									<div class="form-group">
										<label for="properties" class=" form-control-label">Image 6</label>
										<input type="file" name="image6" class="form-control" <?php echo  $image_required ?>>
									</div>
									
									<?php if($property_img6!=''){?>
									<img src="media/product/<?php echo $property_img6?>" width="250px" height="150px" alt="">
									<?php }?>	
								</div>
							</div>

							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Property Address</li>
								</ol>
							</nav>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="properties" class=" form-control-label">City</label>
										<input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $city?>">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Property Address</label>
										<textarea name="property_address" placeholder="Enter property address" class="form-control" required><?php echo $property_address ?></textarea>
									</div>
								</div>

							</div>

							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Property Features</li>
								</ol>
							</nav>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Bed Room</label>
										<input type="number" name="bed_room" placeholder="Enter bed_room" class="form-control" value="<?php echo $bed_room ?>">

									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">TV Lanch</label>
										<input type="number" name="tv_lanch" placeholder="Enter Tv Lanch" class="form-control" value="<?php echo $bed_room ?>">

									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Bath</label>
										<input type="number" name="bath" placeholder="Enter Bath" class="form-control" value="<?php echo $bath ?>">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Water Supply</label>
										<select name="water_supply" id="" class="form-control">
											<option>Select</option>
											<option value="1" <?php if($water_supply==1){ echo "selected"; }?>>Yes</option>
											<option value="0" <?php if($water_supply==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Sewerage</label>
										<select name="sewerage" id="" class="form-control">
											<option>Select</option>
											<option value="1" <?php if($sewerage==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($sewerage==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Parking</label>
										<textarea name="parking" placeholder="Enter Parking" class="form-control"><?php echo $parking ?></textarea>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Kitchen</label>
										<textarea name="kitchen" placeholder="Enter kitchen" class="form-control"><?php echo $kitchen ?></textarea>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Utility</label>
										<textarea name="utility" placeholder="Enter Utility" class="form-control"><?php echo $utility ?></textarea>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Floor Space</label>
										<textarea name="floor_space" placeholder="Enter Floor Space" class="form-control"><?php echo $floor_space ?></textarea>
									</div>
								</div>


							</div>

							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Nearby Locations & Other Facilities</li>
								</ol>
							</nav>
							<div class="row">
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Nearby Resturant</label>
										<select name="nearby_resturant" class="form-control" id="">
											<option>Select Resturant</option>
											<option value="1"<?php if($nearby_resturant==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($nearby_resturant==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Nearby School</label>
										<select name="nearby_school" class="form-control" id="">
											<option>Select</option>
											<option value="1"<?php if($nearby_school==1){ echo "selected";}?>>Yes</option>
											<option value="0"<?php if($nearby_school==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Nearby Hospital</label>
										<select name="nearby_hospital" class="form-control" id="">
											<option>Select</option>
											<option value="1" <?php if($nearby_hospital==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($nearby_hospital==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Nearby Shopping Mall</label>
										<select name="nearby_mall" class="form-control" id="">
											<option>Select Security</option>
											<option value="1" <?php if($nearby_mall==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($nearby_mall==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Nearby Public Transpoart</label>
										<select name="nearby_transpoart" class="form-control" id="">
											<option>Select</option>
											<option value="1" <?php if($nearby_transpoart==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($nearby_transpoart==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>

							</div>

							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Other Facilities</li>
								</ol>
							</nav>
							<div class="row">
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Security</label>
										<select name="security" class="form-control" id="">
											<option>Select Security</option>
											<option value="1" <?php if($security==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($security==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>

								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">CCTV</label>
										<select name="cctv" class="form-control" id="">
											<option>Select CCTV</option>
											<option value="1" <?php if($cctv==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($cctv==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Internet</label>
										<select name="internet" class="form-control" id="">
											<option>Select</option>
											<option value="1" <?php if($internet==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($internet==01){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">

									<div class="form-group">
										<label for="properties" class=" form-control-label">Security Staff</label>
										<select name="security_staff" class="form-control" id="">
											<option>Select Staff</option>
											<option value="1" <?php if($security_staff==1){ echo "selected";}?>>Yes</option>
											<option value="0" <?php if($security_staff==0){ echo "selected";}?>>No</option>
										</select>
									</div>
								</div>

								<button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
									<span id="payment-button-amount">Submit</span>
								</button>
								<div class="field_error"><?php echo $msg ?></div>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('footer.inc.php');
?>