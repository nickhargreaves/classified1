<?php
	if(isset($message)){
		print "<h3>".$message."</h3>";
	}
?>
<form action="<?php echo base_url();?>index.php/admin/process_add_donor" method="POST" enctype="multipart/form-data">
	<input name="name" placeholder="Full Name" type="text">
	<br />
	<input name="email" placeholder="Email Address" type="text">
	<br />
	<textarea name="description" rows="5" cols="40"></textarea>
	<br />
	<input name="username" placeholder="Username" type="text">
	<br />
	<input name="password" placeholder="Password" type="text">
	<br />
	<input type="file" name="file">
	<br />
	<input type="submit" value="Add Donor" class="btn btn-primary">
</form>
	