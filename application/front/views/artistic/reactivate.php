

<?php echo $head; ?>

<?php echo $header; ?>


<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
	<title>Reactivate</title>
<link rel="icon" href="<?php echo base_url('images/favicon.png?ver='.time()); ?>">
<!-- CSS START -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/common-style.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style_harshad.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/media.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/animate.css?ver='.time()) ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/custom-style.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/1.10.3.jquery-ui.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/profiles/common/header.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/profiles/common/style.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/profiles/common/font-awesome.min.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/sprite_img.css?ver='.time()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/profiles/common/mobile.css?ver='.time()) ?>" />
<!--<script type="text/javascript" src="<?php //  echo base_url('js/jquery-1.11.1.min.js?ver='.time()); ?>"></script>-->
<!--<script type="text/javascript" src="<?php //  echo base_url('js/jquery-2.0.3.min.js?ver='.time()); ?>"></script>-->
<script type="text/javascript" src="<?php  echo base_url('js/jquery-3.2.1.min.js?ver='.time()); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery-ui.min-1.12.1.js?ver='.time()); ?>"></script>  
<!--<script src="<?php // echo base_url('js/fb_login.js?ver='.time()); ?>"></script>-->


   
</head>
<body>


<div class="container" id="paddingtop_fixed">
  <div class="row">
          
          <center> 
		<div class="reactivatebox">
			
		<div class="reactivate_header">
		 <center><h2>Are you sure you want to reactive your artistic profile?</h2></center>
		</div>
		<div class="reactivate_btn_y">
		 <a href="<?php echo base_url('artistic/reactivate'); ?>">Yes</a>

		</div>
		<div class="reactivate_btn_n">
		  <a href="<?php echo base_url('dashboard'); ?>">No</a>
        </div>
          <script src="<?php echo base_url('js/fb_login.js'); ?>"></script>

		</div>
           </center>
  </div>

</div>

</body>
</html>



