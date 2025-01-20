<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[equipment_id])
	{
		$SQL="SELECT * FROM equipment WHERE equipment_id = $_REQUEST[equipment_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
	if($_SESSION['equipment_details']['equipment_level_id'] == 3) {
		$readonly = "readonly";
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr">equipment Form</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/equipment.php" enctype="multipart/form-data" method="post" name="frm_equipment" onsubmit="return validateForm(this)">
					<ul class="forms">
						<li class="txt">Title</li>
						<li class="inputfield"><input name="equipment_title" type="text" class="bar" required value="<?=$data[equipment_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Cost Range</li>
						<li class="inputfield"><input name="equipment_cost_range" type="text" class="bar" required value="<?=$data[equipment_cost_range]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="equipment_description" cols="" rows="6" required><?=$data[equipment_description]?></textarea></li>
					</ul>
					<ul class="forms">
						<li class="txt">Photo</li>
						<li class="inputfield"><input name="equipment_image" type="file" class="bar"/></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_equipment">
					<input type="hidden" name="avail_image" value="<?=$data[equipment_image]?>">
					<input type="hidden" name="equipment_id" value="<?=$data[equipment_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php if($_REQUEST[equipment_id]) { ?>
			<div class="contactfinder">
				<h4 class="heading colr"><?=$data['equipment_title']?> Image</h4>
				<div><img src="<?=$SERVER_PATH.'uploads/'.$data[equipment_image]?>" style="width: 250px"></div><br>
			</div> 
			<?php } ?>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 