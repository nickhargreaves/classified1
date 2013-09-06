<?php
	if(isset($message)){
		print "<h3>".$message."</h3>";
	}
?>
<form action="<?php echo base_url();?>index.php/admin/process_add_project" method="POST" enctype="multipart/form-data">
	<input name="title" placeholder="Title" type="text">
	<br />
	<textarea name="description" rows="5" cols="40" placeholder="Description"></textarea>
	<br />
	<select name="category">
		<option value="Health">Health</option>
		<option value="Security">Security</option>
	</select>
	<br />
	<input type="submit" value="Add Project" class="btn btn-primary">
</form>
	