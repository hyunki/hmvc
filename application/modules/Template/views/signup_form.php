<?php $this->load->view('includes/header'); ?>

<h1>계정 만들기</h1>
<fieldset>
<legend>개인정보</legend>

<?php
   
echo form_open('auth/login/create_user');

echo form_input('first_name', set_value('first_name', 'First Name'));
echo form_input('last_name', set_value('last_name', 'Last Name'));
echo form_input('email_address', set_value('email_address', 'Email Address'));
?>
</fieldset>

<fieldset>
<legend>로그인정보</legend>
<?php
echo form_password('password', set_value('password', 'Password'));
echo form_password('password2', 'Password Confirm');

echo form_submit('submit', 'Create Acccount');
?>

<?php echo validation_errors('<p class="error">'); ?>
</fieldset>


<?php $this->load->view('includes/footer'); ?>