<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Signin Template for Bootstrap</title>
		
		<?php echo link_tag('assets/css/bootstrap.min.css');?>
		<?php echo link_tag('assets/css/ie10-viewport-bug-workaround.css');?>
		<?php echo link_tag('assets/css/signin.css');?>
	</head>
<body>

<div class="container">
<p><?php echo validation_errors(); ?></p>
<?php echo form_open('login/login_submit', ['class'=> 'form-signin']); ?>
<h2 class="form-signin-heading">Please sign in</h2>
<label class="sr-only" for="Username">Username</label>
<?php echo form_input(['name'=> 'username', 'id'=> 'username', 'class'=>'form-control', 'placeholder'=>'Username', 'value'=>set_value('username'), 'required' => '', 'autofocus'=> '']); ?>
<label class="sr-only" for="Password">Password</label>
<?php echo form_password(['name'=> 'password', 'id'=> 'password', 'class'=>'form-control', 'placeholder'=>'Password', 'value'=>'', 'required' => '']); ?>
<div class="checkbox">
<label>
<input value="remember-me" type="checkbox">
Remember me
</label>
</div>
<?php echo form_submit(['name'=>'submit', 'value'=>'Sign in', 'class'=> 'btn btn-lg btn-primary btn-block']); ?>

</form>
</div>
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>