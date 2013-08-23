<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php require_once('application/templates/header.php'); ?>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/prettify.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancyProductDesigner.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancyProductDesigner-fonts.css" />

	<!-- javascript -->
	<script src="/assets/js/jquery.fancyProductDesigner.min.js" type="text/javascript"></script>
	<script src="/assets/js/prettify.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap-scripts.js" type="text/javascript"></script>
	<script src="/assets/js/script.js" type="text/javascript"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top plaid">
		<div class="container">
			<h1 class="navbar-brand" href="#">shirt buildr</h1>
				<div class="nav-collapse collapse">
				<!--register modal link-->
				<h1 class="span 6 offset2">User Dashboard</h1>
				<!-- logout button -->
				<form action="/user/logout" class="pull-right">
					<button type="submit" value="Logoff" class="btn btn-primary">Logoff</button>
				</form>
			</div>
		</div>
	</div>
	<div class="middle_banner">
		<div class="container">
			<div class="jumbotron plaid"> 
				<h1>Welcome <?php echo $user['first_name'] ?>!</h1>
				<p><button type="button" data-toggle="modal" data-target="#shirtbuilder_modal" class="btn btn-primary">Design another Garment </button></p>
			</div>
			<div id="shirtbuilder_modal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title">Let's create your shirt!</h1>
						</div>
						<div class="modal-body">

							<!-- TSHIRT BUILDER PLUGIN -->
							<div id="shirtbuilder_container">
								<h3 id="shirtbuilder_title">Shirt Buildr</h3>
								<div class="alert alert-info">
									<h4>To begin please scroll down...</h4>
								</div>
							  	<div id="clothing-designer">
							  		<div class="fpd-product" title="Shirt Front" data-thumbnail="/assets/images/yellow_shirt/front/preview.png">
										<img src="/assets/images/yellow_shirt/front/base.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#d59211", "price": 20}' />
										<img src="/assets/images/yellow_shirt/front/body.png" title="Hightlights" data-parameters='{"x": 249, "y": 80}' />
								  		<img src="/assets/images/yellow_shirt/front/shadows.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
								  		<span title="Any Text" data-parameters='{"x": 243, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000", "zChangeable": true}' >Default Text</span>
								  		<div class="fpd-product" title="Shirt Back" data-thumbnail="/assets/images/yellow_shirt/back/preview.png">
							    			<img src="/assets/images/yellow_shirt/back/base.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "Base", "price": 20}' />
							    			<img src="/assets/images/yellow_shirt/back/body.png" title="Hightlights" data-parameters='{"x": 277, "y": 79}' />
									  		<img src="/assets/images/yellow_shirt/back/shadows.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
										</div>
									</div>
									<div class="fpd-product" title="Sweater" data-thumbnail="/assets/images/sweater/preview.png">
										<img src="/assets/images/sweater/basic.png" title="Base" data-parameters='{"x": 120, "y": 76, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
								  		<img src="/assets/images/sweater/highlights.png" title="Hightlights" data-parameters='{"x": 123, "y": 76}' />
								  		<img src="/assets/images/sweater/shadow.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
									</div>
									<div class="fpd-product" title="Hoodie" data-thumbnail="/assets/images/hoodie/preview.png">
										<img src="/assets/images/hoodie/basic.png" title="Base" data-parameters='{"x": 100, "y": 60, "colors": "#850b0b", "price": 40}' />
								  		<img src="/assets/images/hoodie/highlights.png" title="Hightlights" data-parameters='{"x": 100, "y": 60}' />
								  		<img src="/assets/images/hoodie/shadows.png" title="Shadow" data-parameters='{"x": 100, "y": 60}' />
								  		<img src="/assets/images/hoodie/zip.png" title="Zip" data-parameters='{"x": 281, "y": 172}' />
									</div>
									<div class="fpd-product" title="Shirt" data-thumbnail="/assets/images/shirt/preview.png">
										<img src="/assets/images/shirt/basic.png" title="Base" data-parameters='{"x": 140, "y": 96, "colors": "#6ebed5", "price": 10}' />
										<img src="/assets/images/shirt/collar_arms.png" title="Collars & Arms" data-parameters='{"x": 140, "y": 96, "colors": "#000000"}' />
								  		<img src="/assets/images/shirt/highlights.png" title="Hightlights" data-parameters='{"x": 140, "y": 96}' />
								  		<img src="/assets/images/shirt/shadow.png" title="Shadow" data-parameters='{"x": 140, "y": 96}' />
								  		<span title="Any Text" data-parameters='{"x": 243, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
									</div>
									<div class="fpd-product" title="Basecap" data-thumbnail="/assets/images/cap/preview.png">
										<img src="/assets/images/cap/basic.png" title="Base" data-parameters='{"x": 100, "y": 126, "colors": "#ededed", "price": 5}' />
								  		<img src="/assets/images/cap/highlights.png" title="Hightlights" data-parameters='{"x": 114, "y": 141}' />
								  		<img src="/assets/images/cap/shadows.png" title="Shadows" data-parameters='{"x": 114, "y": 141}' />
									</div>
							  	</div>
							  	<div class="api-buttons clearfix" style="text-align: left;">
								  	<a href="#" id="print-button" class="btn btn-info">Print</a>
								  	<a href="#" id="image-button" class="btn btn-info">Create Image</a>
								  	<a href="#" id="upload-button" class="btn btn-warning">Upload own design</a>
								  	<label class="checkbox inline"><input type="checkbox" id="colorizable" /> Colorizable?</label>
								  	<span class="pull-right price badge badge-inverse"><span id="thsirt-price"></span> $</span>
								  	
								  	<input type="file" id="design-upload" style="display: none;" />
									<form action="recreation.php" id="recreation-form" method="post">
										<input type="hidden" name="recreation_product" value="" />
									</form>				  	
							  	</div>
							</div>
							<!-- END OF TSHIRT BUILDER PLUGIN -->

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>  
	</div>
</body>
</html>