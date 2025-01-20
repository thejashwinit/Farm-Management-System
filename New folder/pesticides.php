<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[pesticides_id])
	{
		$SQL="SELECT * FROM pesticides WHERE pesticides_id = $_REQUEST[pesticides_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
	if($_SESSION['pesticides_details']['pesticides_level_id'] == 3) {
		$readonly = "readonly";
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr">Pesticides Form</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/pesticides.php" enctype="multipart/form-data" method="post" name="frm_pesticides" onsubmit="return validateForm(this)">
					<ul class="forms">
						<li class="txt">Title</li>
						<li class="inputfield"><input name="pesticides_title" type="text" class="bar" required value="<?=$data[pesticides_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Cost Range</li>
						<li class="inputfield"><input name="pesticides_cost_range" type="text" class="bar" required value="<?=$data[pesticides_cost_range]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="pesticides_description" cols="" rows="6" required><?=$data[pesticides_description]?></textarea></li>
					</ul>
					<ul class="forms">
						<li class="txt">Photo</li>
						<li class="inputfield"><input name="pesticides_image" type="file" class="bar"/></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_pesticides">
					<input type="hidden" name="avail_image" value="<?=$data[pesticides_image]?>">
					<input type="hidden" name="pesticides_id" value="<?=$data[pesticides_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php if($_REQUEST[pesticides_id]) { ?>
			<div class="contactfinder">
				<h4 class="heading colr"><?=$data['pesticides_title']?> Image</h4>
				<div><img src="<?=$SERVER_PATH.'uploads/'.$data[pesticides_image]?>" style="width: 250px"></div><br>
			</div> 
			<?php } ?>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 