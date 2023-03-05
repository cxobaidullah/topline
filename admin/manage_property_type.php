<?php
require('top.inc.php');
$property_type = '';
$property_type_id='';
if (isset($_POST['submit'])) {
	if($_POST['property_type_id']==''){
		$property_type = get_safe_value($con, $_POST['property_type']);
		$select = "SELECT  property_type from property_type LIMIT 1";
		$run = mysqli_query($con, $select);
		while ($output = mysqli_fetch_assoc($run)) {
			if ($output['property_type'] == $property_type) { ?>
				<script>
					alert('Property Type <?php echo $property_type ?> Already Exist');
				</script>
			<?php
			} else {
				$sql = "INSERT INTO `property_type`(`property_type`, `status`) VALUES ('$property_type','1')";
				$res = mysqli_query($con, $sql);
				if ($res) {
					$_SESSION['success_message'] = "Property Type Inserted Successfully";
					header('location:property_type.php');
				} else {
					$_SESSION['error_message'] = "Fail To Add Property Type";
					header('location:property_type.php');
				}
			}
		}
	}else{
		$property_type_id=get_safe_value($con, $_POST['property_type_id']);
		$property_type = get_safe_value($con, $_POST['property_type']);
		$update="UPDATE property_type set property_type='$property_type' where id='$property_type_id'";
		$res = mysqli_query($con, $update);
		if ($res) {
			$_SESSION['success_message'] = "Update Successfully";
			header('location:property_type.php');
		} else {
			$_SESSION['error_message'] = "Failed To Update";
			header('location:property_type.php');
		}

	}
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$selectdata="SELECT * from property_type where id='$id'";
	$res = mysqli_query($con, $selectdata);
	while($fetch=mysqli_fetch_assoc($res)){
		$property_type=$fetch['property_type'];
		$property_type_id=$id;
	}
}
?>
<div class="content pb-0">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Property</h4>
						<div>
							<a href="property_type.php" class="btn btn-primary btn-right">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header"><strong>Property</strong><small> Type</small></div>
					<form method="post">
						<div class="card-body card-block">

							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="properties" class=" form-control-label">Property Type</label>
										<input type="text" name="property_type" placeholder="Enter property type" class="form-control" required value="<?php echo $property_type ?>">
										<input type="hidden" name="property_type_id" value="<?php echo $property_type_id;?>">
									</div>
								</div>
								<div class="col-lg-12">
									<div>
										<button id="payment-button" name="submit" type="submit" class="btn btn-info btn-right">Submit</button>
									</div>
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