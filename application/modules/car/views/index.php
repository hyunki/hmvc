<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if(isset($post))
{
	$this->load->model('car_m');
	// echo "<pre>";
	// print_r($post['post']);
	// echo "</pre>";

}

$attributes = ["style" => '<br>'];

echo form_open(base_url('car/submit'), 'POST' );

	echo form_label('번호판', 'plate');
	echo form_input('plate', $post['post']['plate'], $attributes);

	echo form_label('차량명', 'name');
	echo form_input('name', $post['post']['name']);

	echo form_label('소유자', 'ownership');
	echo form_input('ownership', $post['post']['ownership']);

	echo form_label('사용자', 'employee');
	echo form_input('employee', $post['post']['employee']);

	echo form_label('취득일', 'acquired_at');
	echo '<input type="date" name="acquired_at" value="'.$this->input->post['post']['acquired_at'].'" placeholder="">';

	echo form_label('처분일', 'sold_at');
	echo '<input type="date" name="sold_at" value="'.$this->input->post['post']['sold_at'].'" placeholder="">';

echo form_submit('submit','저장');


/* End of file index.php */
/* Location: ./application/modules/car/views/index.php */
?>

<br>
<hr>

<table border="1px">
	<tr>
		<th>ID</th>
		<th>번호판</th>
		<th>차량명</th>
		<th>사용자</th>
		<th>취득일</th>
		<th>처분일</th>
		<th>편집</th>
	</tr>
	<tr>
		<?php
		foreach ($cars as $car) 
		{
			echo '<td>'.$car->id.'</td>';
			echo '<td>'.$car->plate.'</td>';
			echo '<td>'.$car->name.'</td>';
			echo '<td>'.$car->employee.'</td>';
			echo '<td>'.$car->acquired_at.'</td>';
			echo '<td>'.$car->sold_at.'</td>';
			echo '<td><a href="">편집</a></td>';
		}
		?>
	</tr>
</table>

