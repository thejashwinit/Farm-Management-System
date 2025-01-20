<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM equipment";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
	global $SERVER_PATH;
?>
<script>
function delete_equipment(equipment_id)
{
	if(confirm("Do you want to delete the equipment?"))
	{
		this.document.frm_equipment.equipment_id.value=equipment_id;
		this.document.frm_equipment.act.value="delete_equipment";
		this.document.frm_equipment.submit();
	}
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
				<h4 class="heading colr">equipment Reports</h4>
			<form name="frm_equipment" action="lib/equipment.php" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">Sr. No.</td>
						<td scope="col">Image</td>
						<td scope="col">Title</td>
						<td scope="col">Cost Range</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td style="text-align:center; font-weight:bold;"><?=$sr_no++?></td>
						<td><img src="<?='uploads/'.$data[equipment_image]?>" style="heigh:50px; width:50px"></td>
						<td><?=$data[equipment_title]?></td>
						<td><?=$data[equipment_cost_range]?></td>
						<td style="text-align:center"><a href="equipment.php?equipment_id=<?php echo $data[equipment_id] ?>">Edit</a> | <a href="Javascript:delete_equipment(<?=$data[equipment_id]?>)">Delete</a> </td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="equipment_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 