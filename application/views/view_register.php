<html>	
	<head>
		<title>Register</title>
		<style>
			.error
			{
				color:red;
			}
		</style>
	</head>
	<body>
		<div id="templatemo_content">
		<h2>Register</h2>
		<p>Please enter your detail below</p><br/>
		<?php echo form_open('welcome/register'); ?>
		<p>Username: <br>&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo form_input('username',set_value('username')); ?>
		<?php echo form_error('username','<span class="error">', '</span>');?>
		</p>
		<p>First name: <br>&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo form_input('firstname',set_value('firstname')); ?>
		<?php echo form_error('firstname',"<span style='color:red'>", "</span>");?>
		</p>
		<p>Email: <br>&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo form_input('email',set_value('email')); ?>
		<?php echo form_error('email','<span class="error">', '</span>');?></p>
		<p>Password: <br>&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo form_password('password',''); ?>
		<?php echo form_error('password','<span class="error">', '</span>');?></p>
		<p>Confirm Password: <br>&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo form_password('confirmPassword',''); ?>
		<?php echo form_error('confirmPassword','<span class="error">', '</span>');?></p>
		<p>
			<br/>
			<?php echo form_submit('submit','Register'); ?>
		</p>
		<?php echo form_close(); ?>
		</div>
	</body>
</html>