<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
		
<div id="demo">
	<a href="add_donor">Add</a>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
	<thead>
		<tr>
			<th>Logo</th>
			<th>Name</th>
			<th>Description</th>
			<th>Projects</th>
			<th>Contact</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($donors as $donor){
				print "<tr>";
					print "<td><img src='".base_url().'uploads/'.$donor['logo']."' width='300px'></td>";
					print "<td>".$donor['name']."</td>";
					print "<td>".$donor['description']."</td>";
					print "<td></td>";
					print "<td>Email: ".$donor['email']."</td>";
				print "</tr>";			
			}
		?>		
	</tbody>
	<tfoot>
		<tr>
			<th>Logo</th>
			<th>Name</th>
			<th>Description</th>
			<th>Projects</th>
			<th>Contact</th>
		</tr>
	</tfoot>
</table>
</div><div class="spacer" style="margin-bottom: 30px"></div>