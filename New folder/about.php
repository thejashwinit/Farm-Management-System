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
			<div class="contact" style="font-size:14px;">
				<h4 class="heading colr">About Farm Management System</h4>
				<div style="font-size:12px;">
					<p>Farm management, making and implementing of the decisions involved in organizing and operating a farm for maximum production and profit. Farm management draws on agricultural economics for information on prices, markets, agricultural policy, and economic institutions such as leasing and credit. It also draws on plant and animal sciences for information on soils, seed, and fertilizer, on control of weeds, insects, and disease, and on rations and breeding; on agricultural engineering for information on farm buildings, machinery, irrigation, crop drying, drainage, and erosion control systems; and on psychology and sociology for information on human behaviour. In making his decisions, a farm manager thus integrates information from the biological, physical, and social sciences.</p>
					<p>Because farms differ widely, the significant concern in farm management is the specific individual farm; the plan most satisfactory for one farm may be most unsatisfactory for another. Farm management problems range from those of the small, near-subsistence and family-operated farms to those of large-scale commercial farms where trained managers use the latest technological advances, and from farms administered by single proprietors to farms managed by the state.</p>
					<p>In western Europe the typical family farmer has less land than is economical with modern machinery, equipment, and levels of education and training, and so must select from the products of an emerging stream of technology the elements that promise improved crop and livestock yields at low cost; adjust his choice of products as relative prices and costs change; and acquire more land as farm labour is attracted by nonfarm employment opportunities and farm numbers decline.</p>
					<p>On a typical 400-acre (160-hectare) corn-belt farm in the United States with a labour force equivalent to two full-time men, physical conditions and available technologies allow a wide range of options in farming systems. To reach a satisfactory income requires operating on an increasing scale of output and increasing specialization. Corn and soybean cash-crop farming systems have increased in number along with corn-hog-fattening farms and corn-beef-fattening farms. Thus, the choice of a farming system, the degree of specialization to be chosen, the size of operation, and the method of financing are top concerns of management.</p>
					<p>A rancher with thousands of acres, whether in the pampas of Argentina, the plains of Australia, or the prairies of the United States, is concerned about the rate of increase of the herd through births and purchases and herd composition—cows, calves, yearlings, steers, heifers. Risks from drought, winter storms, and price changes can be high. Weather, prospective yields, and the price outlook are the constant concern of competent and alert farm managers.</p>
            	</div>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 