<?php $this->load->view('includes/header'); ?>

<div id="login_form">

	<h1>로그인하세요</h1>
    <?php 
		echo form_open(base_url('auth/validate_credentials'));
		echo form_input('username', 'Username');
		echo form_password('password', 'Password');
		echo form_submit('submit', 'Login');
		echo anchor(base_url('auth/login/signup'), 'Create Account');
		echo form_close();
	?>

</div><!-- end login_form-->

	
<?php $this->load->view('includes/footer'); ?>