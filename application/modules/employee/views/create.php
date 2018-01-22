<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* End of file create.php */
/* Location: ./application/modules/employee/views/create.php */
echo form_open('employee/saveform');

form_label('What is your Name', 'username');
form_input('name', $this->input->first_name);
?>
	<p>
		<label for="first_name">이름</label>
	    <input type="text" name="first_name" value="<?=$this->input->first_name; ?>" />

    	<label for="last_name">성</label>
    	<input type="text" name="last_name" value="<?=$this->input->last_name; ?>" />
	</p>
    <p>
	    <label for="bod">생년월일</label>
	    <input type="date" name="bod" min="1900-01-01" max="9999-12-31" value="<?=$this->input->date; ?>" />
	</p>
	<p>
    	<label for="social_security">주민번호뒷자리</label>
    	<input type="text" name="social_security" value="<?=$this->input->social_security; ?>" />
    </p>
	<button type="submit" value="submit">등록	</button>
</form>