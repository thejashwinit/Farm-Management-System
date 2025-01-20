<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[crops_id])
	{
		$SQL="SELECT * FROM crops WHERE crops_id = $_REQUEST[crops_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
	if($_SESSION['crops_details']['crops_level_id'] == 3) {
		$readonly = "readonly";
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr">Crops Form</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/crops.php" enctype="multipart/form-data" method="post" name="frm_crops" onsubmit="return validateForm(this)">
					<ul class="forms">
						<li class="txt">Title</li>
						<li class="inputfield"><input name="crops_title" type="text" class="bar" required value="<?=$data[crops_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Months</li>
						<li class="inputfield"><input name="crops_month" type="text" class="bar" required value="<?=$data[crops_month]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="crops_description" cols="" rows="6" required><?=$data[crops_description]?></textarea></li>
					</ul>
					<ul class="forms">
						<li class="txt">Photo</li>
						<li class="inputfield"><input name="crops_image" type="file" class="bar"/></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_crops">
					<input type="hidden" name="avail_image" value="<?=$data[crops_image]?>">
					<input type="hidden" name="crops_id" value="<?=$data[crops_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php if($_REQUEST[crops_id]) { ?>
			<div class="contactfinder">
				<h4 class="heading colr"><?=$data['crops_title']?> Image</h4>
				<div><img src="<?=$SERVER_PATH.'uploads/'.$data[crops_image]?>" style="width: 250px"></div><br>
			</div> 
			<?php } ?>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 