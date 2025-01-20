<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM crops";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
	global $SERVER_PATH;
?>
<script>
function delete_crops(crops_id)
{
	if(confirm("Do you want to delete the crops?"))
	{
		this.document.frm_crops.crops_id.value=crops_id;
		this.document.frm_crops.act.value="delete_crops";
		this.document.frm_crops.submit();
	}
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
				<h4 class="heading colr">Crops Reports</h4>
			<form name="frm_crops" action="lib/crops.php" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">Sr. No.</td>
						<td scope="col">Image</td>
						<td scope="col">Title</td>
						<td scope="col">Month</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td style="text-align:center; font-weight:bold;"><?=$sr_no++?></td>
						<td><img src="<?='uploads/'.$data[crops_image]?>" style="heigh:50px; width:50px"></td>
						<td><?=$data[crops_title]?></td>
						<td><?=$data[crops_month]?></td>
						<td style="text-align:center"><a href="crops.php?crops_id=<?php echo $data[crops_id] ?>">Edit</a> | <a href="Javascript:delete_crops(<?=$data[crops_id]?>)">Delete</a> </td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="crops_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 