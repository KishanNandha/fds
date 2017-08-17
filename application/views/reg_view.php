<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">

</head>
<body>
	<?php include("layouts/nav.php");?>
	<div class="container">
		 <?php 
		 	$form_attr=array('class'=>'form from-inline',
		 					 'name'=>'loginform'
		 					 );
		 	echo form_open('login_controller/do_login',$form_attr);?>
		 	<div class="form-group">
		 		<?php 
		 			echo form_label("username:");
		 			echo br();
		 			echo form_input(['class'=>'form-control','placeholder'=>'username','name'=>'username']);
		 		?>
		 	</div>
		 	<div class="form-group">
		 		<?php 
		 			echo form_label("password:");
		 			echo br();
		 			echo form_password(['class'=>'form-control','name'=>'password']);
		 		?>
		 	</div>
		 		<div class="form-group">
		 		<?php 
		 			echo form_submit(['class'=>'btn btn-primary','value'=>'login']);
		 		?>
		 	</div>
		 	<?php echo form_close();?>
	 
	</div>

	<script type="text/javascript" src="<?php echo base_url();?>js/jQuery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>                     