<option>-- Select options  --</option>
<?php 
	foreach ($data as $key => $value) 
	{

		echo '<option value="'.$value["districtid"].'">'.$value["name"].' </option>';
	}	
?>