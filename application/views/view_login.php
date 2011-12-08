<html>
	<body>
	<div id="templatemo_content">
	<h2>Are you a prodigy?</h2>
		<?php echo form_open('welcome/login'); ?>
		<p>	Username:
			<?php echo form_input('username',set_value('username')); ?>
			<?php echo form_error('username','<span class="error">', '</span>');?>
			Password:
			<?php echo form_password('password',''); ?>
			<?php echo form_submit('submit','Login'); ?> or 
			<?php echo anchor('welcome/register','Sign up to be prodigy') ?>
		</p>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('gagal'); ?>
	</div>
	</body>
</html>