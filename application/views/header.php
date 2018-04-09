<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNS - Welcome to Portal</title>
    
    <?php 
    	echo link_tag('assets/css/bootstrap.min.css');
    	echo link_tag('assets/css/ie10-viewport-bug-workaround.css');
		echo link_tag('assets/css/content.css');
		echo link_tag('assets/css/app.css');
		
	?>
	
	<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<link rel="shortcut icon" href="assets/images/favicon.ico" />   
</head>



<div>
	<nav id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" style="padding-top:10px;" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">
			<div class="navbar-header">

				<!--<a class="navbar-brand" href="#">Brand</a>-->
    			<div class="navbar-header" style="padding-left: 40px; padding-top: 0%; padding-bottom: 0%;">
					<a href="/#/"><label style="color:white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:xx-large">GNS Portal</label></a>
				</div>
			</div>
		</div>
	</nav>
</div>