<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
					<h4 class="heading colr">Farm Management Dashboard</h4>
					<ul class="login-home">
						<li><a href="crops.php">Add Crops</a></li>
						<li><a href="insecticides.php">Add Insecticides</a></li>
						<li><a href="pesticides.php">Add Pesticides</a></li>
						<li><a href="equipment.php">Add Equipment</a></li>
						<li><a href="crops-report.php">Crops Report</a></li>
						<li><a href="insecticides-report.php">Insecticides Report</a></li>
						<li><a href="equipment-report.php">Equipment Report</a></li>
						<li><a href="pesticides-report.php">Pesticides Report</a></li>
						<li><a href="change-password.php">Change Password</a></li>
						<li><a href="./lib/login.php?act=logout">Logout</a></li>
					</ul>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 